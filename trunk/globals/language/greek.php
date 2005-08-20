<?php
/*
 * WiND - Wireless Nodes Database
 *
 * Copyright (C) 2005 Nikolaos Nikalexis <winner@cube.gr>
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

setlocale(LC_ALL, 'ell');

$lang = array(

	'charset' => 'iso-8859-7',
	
	'site_title' => "WiND - Wireless Nodes Database",
	
	'forward_text' => "�� ��� ���������� �� ���������� ������� ���...",
	
	'delete_request' => "������ ���������",
	
	'delete' => "��������",
	'home' => "������ ������",
	'edit_profile' => "������ ������",
	'log_out' => "����������",
	'login' => "�������",
	'register' => "�������",
	'password_recover' => "�������� �������",
	'password_change' => "������ �������",
	'all_nodes' => "������ �������",
	'all_zones' => "����� DNS",
	'all_ranges' => "����������������",
	'user_info' => "�������� ������",
	'users_info' => "�������� �������",
	'username' => "����� ������",
	'registered_since' => "�������",
	'name' => "�����",
	'surname' => "�������",
	'last_visit' => "���. ��������",
	'mynodes' => "�� ������ ���",
	'node_add' => "�������� ������",
	'admin_panel' => "����������",
	'nodes' => "������",
	'users' => "�������",
	'hostmaster_panel' => "Hostmaster",
	'ip_ranges' => "IP C-Classes",
	'dns_zones' => "����� DNS",
	'dns_nameservers' => "Nameservers (NS)",
	'pending' => "�� �������",
	'for_deletion' => "��� ��������",
	'welcome' => "����� ������",
	'nodes_search' => "��������� ������",
	'nodes_found' => "������ ��� ��������",
	'users_search' => "��������� �������",
	'users_found' => "������� ��� ��������",
	'dns_zones_search' => "��������� ����� DNS",
	'dns_zones_found' => "����� DNS ��� ��������",
	'user_add' => "������� ���� ������",
	'user_edit' => "������ ������",
	'node' => "������",
	'node_info' => "�������� ������",
	'node_delete' => "�������� ������",
	'ip_range_request' => "������ �������� IP C-Class",
	'ip_range_request_for_node' => "������ �������� IP C-Class ��� ��� �����",
	'dnszone_request_forward' => "������ �������� ����� DNS (forward)",
	'dnszone_request_reverse' => "������ �������� ����� DNS (reverse)",
	'dnszone_edit' => "����������� ����� DNS",
	'nameserver_add' => "�������� nameserver (NS)",
	'nameserver_edit' => "����������� nameserver (NS)",
	'link_edit' => "����������� �����������",
	'link_add' => "�������� �����������",
	'links' => "������������",
	'ap' => "Access Point",
	'aps' => "Access Points",
	'aps_search' => "��������� Access Points",
	'aps_found' => "Access Points ��� ��������",
	'subnet_edit' => "����������� ����������",
	'subnet_add' => "�������� ����������",
	'subnets' => "���������",
	'ip_address_edit' => "����������� ���������� IP",
	'ip_address_add' => "�������� ���������� IP",
	'ip_addresses' => "����������� IP",
	'myview' => "� ������ ��� ������",
	'ip_ranges_search' => "��������� IP C-Classes",
	'ip_ranges_found' => "IP C-Classes ��� ��������",
	'dns_nameservers_search' => "��������� DNS nameservers",
	'dns_nameservers_found' => "DNS nameservers ��� ��������",
	'ip_range_edit' => "����������� IP C-Class",
	'send_mail' => "�������� ������������ E-mail",
	'to' => "����",
	'subject' => "����",
	'body' => "������",
	'mailto_all' => "����������� & ���������������",
	'mailto_owner' => "�����������",
	'mailto_custom' => "������",
	'ip_ranges_allocation' => "�������� ����������� IP",
	'ip_ranges_search' => "��������� IP C-Classes",
	'change' => "������",
	'submit' => "OK",
	'add' => "��������",
	'remove' => "��������",
	'update' => "��������",
	'search' => "���������",
	'plot' => "������ �����",
	'mynetwork' => "�� ������ ��� ������",
	'new_window' => "��� ��������",
	'node_plot_link' => "������ ����� �� ������ �������",
	'nodes_plot_link' => "������ ����� ������",
	'nodes_plot_link_info' => "�������� �������� ���� ������� ��� ���� ������� ���������� �� �������� ��� ������ �����.",
	'distance' => "��������",
	'azimuth' => "���������",
	'elevation' => "��������",
	'fsl' => "Free space loss",
	'tilt' => "�����",
	'clients' => "�������",
	'compare_equal' => "��� ��",
	'compare_greater' => "���������� ���",
	'compare_less' => "��������� ���",
	'compare_greater_equal' => "���������� � ��� ��",
	'compare_less_equal' => "��������� � ��� ��",
	'compare_starts_with' => "�������� ���",
	'compare_ends_with' => "��������� ��",
	'compare_contains' => "��������",
	'zone_forward' => "Forward ���� DNS",
	'zone_reverse' => "Reverse ���� DNS",
	'contact' => "�������� ���������",
	'contact_node' => "����������� �� ��� �����",
	'from' => "���",
	'send' => "��������",
	'node_page' => "������ ������",
	'yes' => "���",
	'no' => "���",
	'backbone' => "Backbone",
	'unlinked' => "���������",
	'find_coordinates' => "������ ��� ������������� ���",
	'select_the_coordinates' => "������� ��� �������������",

	'db' => array(
		'users__username' => '����� ������',
		'users__password' => '������� ���������',
		'users__password_c' => '����������� �������',
		'users__surname' => '�������',
		'users__name' => '�����',
		'users__email' => 'E-mail',
		'users__phone' => '��������',
		'users__info' => '�����������',
		'users__status' => '�������',
		'users__status-pending' => '�� �������',
		'users__status-activated' => '��������������',
		'fullname' => '�������������',
		
		'nodes__id' => '������� ������',
		'nodes__name' => '����� ������',
		'nodes__date_in' => '�������������',
		'nodes__area_id' => '����� / ���������',
		'nodes__latitude' => '���������� ������ (lat)',
		'nodes__longitude' => '���������� ����� (lon)',
		'nodes__elevation' => '���� ������� (�)',
		'nodes__info' => '�����������',
		'nodes__name_ns' => '������� nameserver',
		
		'users_nodes__owner' => '��������',
		'users_nodes__owner-Y' => '������������',
		'users_nodes__owner-N' => '���������������',
		'users_nodes__user_id' => '���������������',
		'user_id_owner' => '������������',

		'areas__id' => '����� / ���������',
		'areas__name' => '����� / ���������',

		'regions__id' => '��������',
		'regions__name' => '��������',

		'ip_ranges__date_in' => '����������',
		'ip_ranges__ip_start' => '���',
		'ip_ranges__ip_end' => '�����',
		'ip_ranges__status' => '���������',
		'ip_ranges__status-pending' => '�� �������',
		'ip_ranges__status-active' => '������',
		'ip_ranges__status-rejected' => '����������',
		'ip_ranges__status-invalid' => '�����',
		'ip_ranges__info' => '�����������',
		'ip_ranges__delete_req' => '������ ���������',
		'ip_ranges__delete_req-Y' => '���',
		'ip_ranges__delete_req-N' => '���',
		'ip_range' => 'C Class',
		'ip' => '��������� IP',

		'dns_zones__date_in' => '����������',
		'dns_zones__name' => '����� �����',
		'dns_zones__type' => '����� �����',
		'dns_zones__type-forward' => 'Forward',
		'dns_zones__type-reverse' => 'Reverse',
		'dns_zones__status' => '���������',
		'dns_zones__status-pending' => '�� �������',
		'dns_zones__status-active' => '������',
		'dns_zones__status-rejected' => '����������',
		'dns_zones__status-invalid' => '�����',
		'dns_zones__info' => '�����������',
		'dns_zones__delete_req' => '������ ���������',
		'dns_zones__delete_req-Y' => '���',
		'dns_zones__delete_req-N' => '���',

		'schema' => "Schema",

		'dns_zones_nameservers__nameserver_id' => '��������� Nameservers (NS)',

		'dns_nameservers__date_in' => '����������',
		'dns_nameservers__name' => '����� Nameserver',
		'dns_nameservers__delete_req' => '������ ���������',
		'dns_nameservers__delete_req-Y' => '���',
		'dns_nameservers__delete_req-N' => '���',
		'dns_nameservers__ip' => '��������� IP',
		'dns_nameservers__status' => '���������',
		'dns_nameservers__status-pending' => '�� �������',
		'dns_nameservers__status-active' => '������',
		'dns_nameservers__status-rejected' => '����������',
		'dns_nameservers__status-invalid' => '�����',

		'links__date_in' => '�������������',
		'links__peer_node_id' => '������ �����������',
		'links__peer_ap_id' => 'Access point',
		'links__type' => '����� �����������',
		'links__type-p2p' => 'Backbone',
		'links__type-ap' => 'Access Point',
		'links__type-client' => '�������',
		'links__ssid' => 'SSID',
		'links__protocol' => '����������',
		'links__protocol-other' => '����',
		'links__channel' => '������ ������������',
		'links__status' => '���������',
		'links__status-active' => '������',
		'links__status-inactive' => '��������',
		'links__equipment' => '����������',
		'links__info' => '�����������',
		'peer' => '����������',
		'total_active_peers' => '������� ������������',
		'total_active_clients' => '������� �������',
		'has_ap' => '�������� Access Point',

		'subnets__ip_start' => '���',
		'subnets__ip_end' => '�����',
		'subnets__type' => '����� ����������',
		'subnets__type-local' => '������ ������',
		'subnets__type-link' => '����������',
		'subnets__type-client' => '������ Access Point',
		'subnets__link_id' => '����������',
		'subnets__client_node_id' => '�������',
		'subnet' => '���������',

		'ip_addresses__date_in' => '����������',
		'ip_addresses__hostname' => 'Hostname',
		'ip_addresses__ip' => '��������� IP',
		'ip_addresses__mac' => '��������� MAC',
		'ip_addresses__type' => '����� �����������',
		'ip_addresses__type-router' => '������������',
		'ip_addresses__type-server' => '�����������',
		'ip_addresses__type-pc' => '� / �',
		'ip_addresses__type-wireless-bridge' => '�������� �������',
		'ip_addresses__type-voip' => '������� VoIP',
		'ip_addresses__type-camera' => '������',
		'ip_addresses__type-other' => '����',
		'ip_addresses__always_on' => '������ ���������� (24/7)',
		'ip_addresses__always_on-Y' => '���',
		'ip_addresses__always_on-N' => '���',
		'ip_addresses__info' => '�����������',

		'photos__date_in' => '����������',
		'photos__view_point' => '����������',
		'photos__view_point-N' => '������',
		'photos__view_point-NE' => '���������������',
		'photos__view_point-E' => '���������',
		'photos__view_point-SE' => '��������������',
		'photos__view_point-S' => '�����',
		'photos__view_point-SW' => '�����������',
		'photos__view_point-W' => '������',
		'photos__view_point-NW' => '������������',
		'photos__view_point-PANORAMIC' => '����������',
		'photos__info' => '�����������',
		'photo' => '����������',

		'rights__type' => '����������',
		'rights__type-blocked' => '��������������',
		'rights__type-admin' => '������������',
		'rights__type-hostmaster' => 'Hostmaster'
	),
	
	'message' => array(
		'info' => array(
			'insert_success' => array(
				'title' => "��������",
				'body' => "� �������� ������������ ��������."
			),
			'edit_success' => array(
				'title' => "�����������",
				'body' => "� ����������� ������������ ��������."
			),
			'delete_success' => array(
				'title' => "��������",
				'body' => "� �������� ������������ ��������."
			),
			'update_success' => array(
				'title' => "��������� ���������",
				'body' => "� ��������� ��� ��������� ������������ ��������."
			),
			'request_range_success' => array(
				'title' => "������ IP C-Class",
				'body' => "� ������ ��� ��� IP C-Class ����� �����. �������, � ����� Hostmaster �� ��������� ���� ������ ��� ��� e-mail ��� ����� �������. �������� �� ����� �� IP C-Class ����� ��� ��� ��������� ��� ��� ������ ��� ������ ���."
			),
			'request_dnszone_success' => array(
				'title' => "������ ����� DNS",
				'body' => "� ������ ��� ��� ���� DNS ����� �����. �������, � ����� Hostmaster �� ��������� ���� ������ ��� ��� e-mail ��� ����� �������. �������� �� ����� ��� ��������� ��� ����� DNS ��� ������ ��� ������ ���."
			),
			'request_dnsnameserver_success' => array(
				'title' => "������ DNS nameserver",
				'body' => "� ������ ��� ��� DNS nameserver ����� �����. �������, � ����� Hostmaster �� ������� ��� ������ ���. �������� �� ����� ��� ��������� ��� DNS nameserver ��� ������ ��� ������ ���."
			),
			'signup_success' => array(
				'title' => "� ������� ��� ������������",
				'body' => "� ������� ��� ������������ �� ��������. ��������� ��� e-mail ���, ��� �� URL ������������� ��� ����������� ���."
			),
			'login_success' => array(
				'title' => "�������� �������",
				'body' => "�� �������� ��� ������ ��������������."
			),
			'logout_success' => array(
				'title' => "����������",
				'body' => "����� ���������� ��� �� �������."
			),
			'no_privilege' => array(
				'title' => "����� �������� ���������",
				'body' => "��� ����� �������� ��������� �� ���� �� ������."
			),
			'activation_required' => array(
				'title' => "������������ �����������",
				'body' => "��� ���� ����� ������������ ��� ����������� ���. ��������� ��� e-mail ��� �������� ���� ��� ������� ���, ��� �� URL �������������."
			),
			'activation_success' => array(
				'title' => "������������ �����������",
				'body' => "� ������������ ��� ����������� ��� ����� �� ��������. �������� �� ����������� �� ������� �� �� �������."
			),
			'activation_failed' => array(
				'title' => "������������ �����������",
				'body' => "������ �������� ���� ������������ ��� �����������."
			),
			'message_sent' => array(
				'title' => "�� ������ �������",
				'body' => "�� ������ ������� �� ��������."
			)
		),
		'error' => array(
			'database_error' => array(
				'title' => "������ ��� ���� ���������",
				'body' => "������ ������ ���� ���� ��������� ���� ��� �������� ��� ��������� ���. ������������� �� ��� ����������� ��� ���������� ��� ��� ������������ ��� �����������."
			),
			'not_logged_in' => array(
				'title' => "���������� �������",
				'body' => "��� �� �������������� ���� �� ���������� ������ �� ����� ������������ ��� �������. �� ��� ����� ������ ����������, �������� �� ������������� ���� ���� ������� �������."
			),
			'login_failed' => array(
				'title' => "���������� �������",
				'body' => "�� �������� ��� ������ ��� ��������������."
			),
			'password_not_match' => array(
				'title' => "������ �������",
				'body' => "� ������� ��� ��������� ��� ����� ����� ��� ��� ��� �����."
			),
			'password_not_valid' => array(
				'title' => "������ �������",
				'body' => "� ������� ��������� ��� ������ �� ����� �����."
			),
			'password_restored' => array(
				'title' => "������ �������",
				'body' => "� ������� ��������� ��������� �� ��������."
			),	
			'fields_required' => array(
				'title' => "����������� �����",
				'body' => "��� ������ �� �������� ����� ��� ����� �����������:\n##fields_required##"
			),
			'duplicate_entry' => array(
				'title' => "� ���������� ������� ���",
				'body' => "�� �������� �������� ��� ����������� ��� �������� ���:\n##duplicate_entries##"
			),
			'upload_file_failed' => array(
				'title' => "�������� �������",
				'body' => "������ �������� ���� ��� �������� ��� �������. ��� ������������ ������������, ������������� �� ���� ������������ ��� ����������."
			),
			'nodes_field_name' => array(
				'title' => '������ �������� ������',
				'body' => '��� ����������� � ������ �������� ��� ������.'
			),
			'nodes_field_area_id' => array(
				'title' => '������ �����/���������� ������',
				'body' => '��� ����������� � ������ �������� ��� ������. ��� ����� �������� IP C-Classes, �� ���� ��� ������� ��� ����� ��� �������. ��� ������������ ������������, ������������� �� ��� ����� hostmaster.'
			),
			'nodes_no_area_id' => array(
				'title' => '������ �����/���������� ������',
				'body' => '��� ����� ������� ��� ����/��������� ��� ������ � ������. ��� ��� ������� IP C-Classes ���������� � ������ �����/����������. ��������� ��� �������� ��� ������ ���.'
			),
			'subnet_backbone_no_ip_range' => array(
				'title' => '�������� ���������� �� ����������',
				'body' => '�� ��������� ��� ��������, ��� ������ �� ������ IP C-Class ��� ��� ���� ��������. �� �� ��������� ������ ���� ����� ��� ����� ����� ��� �����������, �� ������ �� �� ������� � ������� ��� IP C-Class.'
			),
			'schema_files_missing' => array(
				'title' => '�� ������ schema ��� ��������',
				'body' => '��������, ������������� �� ��� ����������� ��� ���������� ��� �� �������� ��� ���������.'
			),
			'gmap_key_failed' => array(
				'title' => '�� ������ ��� �������',
				'body' => '��� ������� �� ������ ������������� ��� Google Maps. ������������� �� ��� ����������� ��� ���������� ��� ��� ������� ��� �����������.'
			),
			'generic' => array(
				'title' => "������ ������",
				'body' => "������ ������ ������. �������� ��������� �� ����� ������������ ��� ����������."
			)
		)
	),
		
	'email' => array(
		'user_activation' => array(
			'subject' => "������������ �����������: ##username##",
			'body' => "WiND - Wireless Nodes Database\n------------------------------------------\n������������ ����������� ##username##\n\n������� ���: ##act_link##"
		),

		'user_restore' => array(
			'subject' => "�������� �������: ##username##",
			'body' => "WiND - Wireless Nodes Database\n------------------------------------------\n\n�������� ������� ��� �� ���������� ##username##\n\n������� ���: ##act_link##"
		),

		'user_change_mail' => array(
			'subject' => "������ e-mail �����������: ##username##",
			'body' => "WiND - Wireless Nodes Database\n------------------------------------------\n\n������ e-mail ����������� ##username##\n\n������� ���: ##act_link##"
		),

		'node_contact' => array(
			'subject_prefix' => "WiND: ",
			'subject_suffix' => "",
			'body_prefix' => "� ������� ##username## ��� ������� �� �������� ������\n���� ��� ��������� WiND - Wireless Nodes Database:\n-------------------------------------------------------------------\n\n",
			'body_suffix' => "\n\n-------------------------------------------------------------------\n��������� �� ���� �� ������ ��� �� �������������� �� ��� ���������.\nWiND - Wireless Nodes Database\n-------------------------------------------------------------------"
		),

		'range' => array(
			'pending' => array(
				'subject' => "##range##: �� �������",
				'body' => "WiND - Wireless Nodes Database\n------------------------------------------\n\nIP C-Class: ##range##\n������: ##node_name## (###node_id##)\n\n�� �������� IP C-Class ����� �� ��������� ��������.\n\n� ����� WiND Hostmaster"
			),
			'active' => array(
				'subject' => "##range##: ��������������",
				'body' => "WiND - Wireless Nodes Database\n------------------------------------------\n\nIP C-Class: ##range##\n������: ##node_name## (###node_id##)\n\n�� �������� IP C-Class ��������������.\n\n� ����� WiND Hostmaster"
			),
			'rejected' => array(
				'subject' => "##range##: �����������",
				'body' => "WiND - Wireless Nodes Database\n------------------------------------------\n\nIP C-Class: ##range##\n������: ##node_name## (###node_id##)\n\n�� �������� IP C-Class �����������.\n\n� ����� WiND Hostmaster"
			),
			'invalid' => array(
				'subject' => "##range##: ���������",
				'body' => "WiND - Wireless Nodes Database\n------------------------------------------\n\nIP C-Class: ##range##\n������: ##node_name## (###node_id##)\n\n�� �������� IP C-Class ���������.\n\n� ����� WiND Hostmaster"
			)
		),
		
		'zone' => array(
			'pending' => array(
				'subject' => "##zone##: �� �������",
				'body' => "WiND - Wireless Nodes Database\n------------------------------------------\n\n���� DNS: ##zone##\n������: ##node_name## (###node_id##)\n\n�� �������� DNS zone ����� �� ��������� ��������.\n\n� ����� WiND Hostmaster"
			),
			'active' => array(
				'subject' => "##zone##: ��������������",
				'body' => "WiND - Wireless Nodes Database\n------------------------------------------\n\n���� DNS: ##zone##\n������: ##node_name## (###node_id##)\n\n�� �������� DNS zone ��������������.\n\n� ����� WiND Hostmaster"
			),
			'rejected' => array(
				'subject' => "##zone##: �����������",
				'body' => "WiND - Wireless Nodes Database\n------------------------------------------\n\n���� DNS: ##zone##\n������: ##node_name## (###node_id##)\n\n�� �������� DNS zone �����������.\n\n� ����� WiND Hostmaster"
			),
			'invalid' => array(
				'subject' => "##zone##: ���������",
				'body' => "WiND - Wireless Nodes Database\n------------------------------------------\n\n���� DNS: ##zone##\n������: ##node_name## (###node_id##)\n\n�� �������� DNS zone ���������.\n\n� ����� WiND Hostmaster"
			)
		)
	),
	
	'help' => array(
		'dnszones' => array(
			'title' => '����� DNS',
			'body' => '��� ������ ���� �������� �� ����������� ����� DNS ��� �������, �� ���� �� ����� ��� ������������. �� ������������ ������������ ���� �������� ������. ������, �������� �� ��������� ������� ����� ��� ������� ��� ��������� ���.'
		),
		'mynodes_add' => array(
			'title' => '�������� ������',
			'body' => '��� ������ ���� �������� �� ���������� ���� �����. ��������� �� �������� �� ������������ �� ��� �� ������� ���������� ��������.'
		),
		'mynodes' => array(
			'title' => '���������� ������',
			'body' => '��� ������ ���� �������� �� �������������� ������ ��� ����� ���. ��������� �� �������� �� ������������ �� ��� �� ������� ���������� ��������. ���� ��������� ����������, ��������� ��� ������� ��� ���� �������.'
		),
		'mynodes_range' => array(
			'title' => '������ �������� IP C-Class',
			'body' => '���������� �� ��������, ��� ����� ����������� ��� ���� ��� ������� ���.'
		),
		'mynodes_dnszone_request_reverse' => array(
			'title' => '������ �������� ����� DNS',
			'body' => '���������� �� �������� ��� ����� ����������� ��� ���� ��� ������� ���.'
		),
		'mynodes_dnszone_request_forward' => array(
			'title' => '������ �������� ����� DNS',
			'body' => '���������� �� �������� ��� ����� ����������� ��� ���� ��� ������� ���.'
		),
		'mynodes_dnszone_edit' => array(
			'title' => '����������� ����� DNS',
			'body' => '��� ������ ���� �������� �� ������� ���� ���������� nameservers (NS) ��� �� ��������� ��� ����������� ��� �����.'
		),
		'mynodes_dnsnameserver_add' => array(
			'title' => '�������� nameserver (NS)',
			'body' => '����� �� ����� ��� �� ��������� ��� nameserver.'
		),
		'mynodes_dnsnameserver_edit' => array(
			'title' => '����������� nameserver (NS)',
			'body' => '��� ������ ���� �������� �� �������������� �� ����� ��� nameserver (NS) ��� ����������. ������ ��� ���������� IP ��� ����� ������, �� ������ �� ������ ������ ��������� ��� ���������� nameserver ��� ������ ����������� ����.'
		),
		'mynodes_link_add' => array(
			'title' => '�������� �����������',
			'body' => '��� ������ ���� �������� �� ���������� ��� ���������� ��� ������ ��� �� ������� ���� �����. ����������� �� �������� ��� �� ������� ����������� ��� �� �����.'
		),
		'mynodes_link_edit' => array(
			'title' => '����������� �����������',
			'body' => '��� ������ ���� �������� �� �������������� ��� ���������� ��� ������ ��� �� ������� ���� �����. ����������� �� �������� ��� �� ������� ����������� ��� �� �����.'
		),
		'mynodes_subnet_add' => array(
			'title' => '�������� ����������',
			'body' => '��� ������ ���� �������� �� ���������� ��� ��������� ��� ������ ���. ��� �� ������ ��� ������ �������� �� �������� ��� ����������� ��� ��� ����������� �� IP C-Class ��� ��� ���� ��������. �� ��������� ������������ ������, ������ ���� ���������� ������ �� ����� ���� ��� ��� ������ ��� IP C-Class ��� ���������� ��� ���������������.'
		),
		'mynodes_subnet_edit' => array(
			'title' => '����������� ����������',
			'body' => '��� ������ ���� �������� �� �������������� ��� ��������� ��� ������ ���.'
		),
		'mynodes_ipaddr_add' => array(
			'title' => '�������� ���������� IP',
			'body' => '��� ������ ���� �������� �� ���������� ��� ��������� IP ��� ������ ���. �� ����� Hostname, ������ �� ��������� ���� �������� ����� �� ������������ ��������� IP ��� ������ �� ����� ����� �� ���� ��� ����������� IP ��� ������������� �����������.'
		),
		'mynodes_ipaddr_edit' => array(
			'title' => '����������� �����������',
			'body' => '��� ������ ���� �������� �� �������������� ��� ��������� IP ��� ������ ���. �� ����� Hostname, ������ �� ��������� ���� �������� ����� �� ������������ ��������� IP ��� ������ �� ����� ����� �� ���� ��� ����������� IP ��� ������������� �����������.'
		),
		'nodes_search' => array(
			'title' => '������ �������',
			'body' => '��� ������ ���� �������� �� ����������� ������� ��� ������� �� ���� �� ����� ��� ������������. �� ������������ ������������ ���� �������� ������. ������, �������� �� ��������� ������� ����� ��� ������� ��� ��������� ���.'
		),
		'ranges_allocation' => array(
			'title' => '�������� ����������� IP',
			'body' => '��� ������ ���� �������� �� ����� ��������� �� ������ ��� ����������� ��� ����� ��������� ��� ���� ����.'
		),
		'ranges_search' => array(
			'title' => '��������� IP C-Classes',
			'body' => '��� ������ ���� �������� �� ����������� �� IP C-Classes ��� ������� ��� ����� ��������� ��� �������. �� ������������ ������������ ���� �������� ������. ������, �������� �� ��������� ������� ����� ��� ������� ��� ��������� ���.'
		),
		'users_restore_password_recover' => array(
			'title' => '�������� �������',
			'body' => '��� ������ ���� �������� �� ���������� ��� ������ ������ ��������� ��� ��� ���������� ���. �������� �� �������� ����� ��� ����� ��� �� ������ e-mail �� ���������� �������.'
		),
		'users_restore_password_change' => array(
			'title' => '������ ������� ���������',
			'body' => '��� ������ ���� �������� �� �������� ��� ������ ������ ��������� ��� ����������� ���. ����� ���� ��� ������ ��������� ��� ����� ��� ��������� ��� �� ��������� ����� �� ���������������� ������� ���� ���������� ��� �� ��� ��� ������ ���������.'
		),
		'users_add' => array(
			'title' => '������� ���� ������',
			'body' => '������� �� �������� ��� ��� ����� ��� ���������. ��� ��� ����������� ��� e-mail ��� ��� ��� ������������ ��� ����������� ���, �� ��� ���������  e-mail �� ���������� ������� ��� ��������� ���. ����� ��� ������������ ���, � ����������� ��� �� ���������� ��������� ����� ���������� �������� ��� �������.'
		),
		'users_edit' => array(
			'title' => '������ ������',
			'body' => '��� ������ ���� �������� �� �������������� �� �������� ���. �� ��������� ������� ���������� e-mail �� ��� ��������� ������ e-mail �� ���������� ������� ������������� ��� ��� ��������� ��� �� ��������.'
		),
		'node_contact' => array(
			'title' => '�������� ���������',
			'body' => '��� ������ ���� �������� �� ����������� ������ ���� ��� ����������� � ��� ���� ��������������� ��� ������. � ����������� ��� ��������� �� ����� ��������� ��� ����������� ������ ���� �� ����� ������ � ������ �������� ��� ������ ��� ��� ���� ����������. �� ������������ ����������� ��� ���������� �� ������������ ���� ��� �������� ��� ���������. � ������ �������� ��� ������ ��� �� ��� ��������� ��� ����������� ��� �����������.'
		)
	)

);

?>
