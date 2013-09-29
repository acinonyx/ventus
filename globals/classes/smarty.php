<?php
/*
 * Ventus - Wireless Nodes Database
 *
 * Copyright (C) 2013 Vasilis Tsiligiannis <acinonyx@openwrt.gr>
 * 
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; version 2 dated June, 1991.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 *
 */

require(SMARTY_DIR . 'Smarty.class.php');

class Smarty3 extends Smarty {
    function __construct() {
        parent::__construct();

        global $vars;

        $this->setTemplateDir($vars['templates']['path'] . $vars['templates']['default'] . '/');
        $this->setCompileDir($vars['templates']['compiled_path'] . $vars['templates']['default'] . '/');
        $this->setPluginsDir(array($vars['templates']['path'] . $vars['templates']['default'] . '/plugins/', 'plugins'));
        $this->registerPlugin('modifier', 'stripslashes', 'stripslashes');
    }
}

?>