<p class="description">
WiND depends on MySQL Server. To continue give all information needed to connect at your mysql service. 
</p>

<?php
$step_result = true;
// Process input
$def_values = array_merge($_SESSION['config']['db'], array());
if (is_method_post()) {
	$step_result = 'auto';
	$def_values = array_merge($def_values, $_POST);
	
	// Validation
	if (empty($def_values['server'])) {
		show_error('You need to define a <strong>server</strong> to connect.');
		$step_result = false;
	}
	if (empty($def_values['database'])) {
		show_error('You need to define a <strong>database</strong> to connect.');
		$step_result = false;
	}
	
	
	// Try to connect
	if ($step_result !== false) {
		if ($link = @mysql_connect($def_values['server'],$def_values['username'], $def_values['password'])) {
			if (!mysql_select_db($def_values['database'], $link)) {
				show_error('Cannot use schema "' . $def_values['database'] . '". ' . mysql_error($link));
				$step_result = false;
			} else {
				// Save variables
				$_SESSION['config']['db'] = $def_values;				
				
				
				// Check if there is already an installation
				$res = mysql_query("show tables like 'users'");
				if (mysql_num_rows($res) == 0) {
					mysql_free_result($res);
					
					$queries = explode(';', file_get_contents('schema.sql'));
					foreach($queries as $q) {
						$q = trim($q);
						if (empty($q)) continue;
						$q = $q . ';';
						if (!mysql_query($q, $link)) {
							show_error('Error building database.' . mysql_error($link));
							$step_result = false;
							break;
						}
					}
				}
			}
		} else {
			show_error('Cannot connect to database. ' . mysql_error());
			$step_result = false;
		}
	}
	
} else {
	$step_result = false;
}

// Show form on GET and POST(error)
if ((!is_method_post()) || !$step_result){

?>
<div class="form">
<form method="post">
	<ul class="fields">
		<li><label><span>Service host:</span><input type="text" name="server" value="<?php echo $def_values['server']; ?>"/></label>
		<li><label><span>Username:</span><input type="text" name="username" value="<?php echo $def_values['username']; ?>"/></label>
		<li><label><span>Password:</span><input type="password" name="password"/></label>
		<li><label><span>Schema:</span><input type="text" name="database" value="<?php echo $def_values['database']; ?>"/></label>
	</ul>
	<div class="buttons">
		<input type="submit" value="Continue" class="continue"/>
	</div>
</form>
</div>
<?php
} 

return $step_result;
