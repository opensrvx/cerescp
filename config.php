<?php
/*
Ceres Control Panel

This is a control pannel program for Athena and Freya
Copyright (C) 2005 by Beowulf and Nightroad

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

To contact any of the authors about special permissions send
a mail to cerescp@gmail.com
*/

// SQL Connections
$CONFIG['rag_serv']		=	'mysql.ragfnx.io';	    // SQL Ragnarok Host
$CONFIG['rag_user']		=	'raguser';		        // SQL Ragnarok User
$CONFIG['rag_pass']		=	'ragpass';		        // SQL Ragnarok Password
$CONFIG['rag_db']		=	'ea_rag';		        // SQL Ragnarok Database name
$CONFIG['log_db']		=	'ea_log';		        // SQL Ragnarok Log Database name

$CONFIG['cp_serv']		=	'mysql.ragfnx.io';	    // SQL CP Host
$CONFIG['cp_user']		=	'raguser';		        // SQL CP User
$CONFIG['cp_pass']		=	'ragpass';		        // SQL CP Password
$CONFIG['cp_db']		=	'ea_cp';			    // SQL CP Database name

$CONFIG['md5_pass']		=	'0';			        // Use MD5 password (enable = 1, disable = 0)
$CONFIG['safe_pass']	=	'1';			        // Force the use of a safer password with size 6 and at least 2 letter and 2 numbers (enable = 1, disable = 0)

// Admin Area
$CONFIG['cp_admin']		=	'99';			        // CP admin functions
$CONFIG['gm_level']		=	'70';			        // CP GM funtions
$CONFIG['gm_hide']		=	'40';			        // GMs this level and above will be hidden from whoisonline.php

// WOE
// sun = sunday, mon = monday, tue = tuesday, wed = wednesday, thu = thursday, fri = friday, sun = sunday
// place week_day(start_time, end_time) and a ';' between the times the freya default woe times is set as an example
// there is no limit you can place as many as you want, no spaces are needed, but using it you can understand.
$CONFIG['woe_time']		    =	'tue(2100, 2300); sat(1600, 1800); ';
$CONFIG['agit_check']		=	'0';			    // This WILL NOT WORK unless you installed the npc script AND you updated your ragsrvinfo table, read the installation notes for more info.

// Server name, rates
$CONFIG['name']			    =	'RAGFNX';	        // name of the server
$CONFIG['rate']			    =	'200/200/100';		// rates of the server
$CONFIG['dynamic_info']		=	'0';			    // Use info (rates) from the server itself?
$CONFIG['dynamic_name']		=	'RAGFNX';	        // The name of the server in ragsrvinfo's server name column (Used for dynamic info)
$CONFIG['show_rates']		=	'0';			    // Show rates below server status?
date_default_timezone_set('America/Sao_Paulo');		// game server Timezone (useful if your webserver's timezone is different than game server).

// MAP, CHAR, LOGIN servers settings
$CONFIG['accip']		=	'login-server.ragfnx.io';	// Account/Login Server IP
$CONFIG['accport']		=	'6900';		                // Account/Login Server Port
$CONFIG['charip']		=	'char-server.ragfnx.io';	// Char Server IP
$CONFIG['charport']		=	'6121';		                // Char Server Port
$CONFIG['mapip']		=	'map-server.ragfnx.io';	    // Zone/Map Server IP
$CONFIG['mapport']		=	'5121';		                // Zone/Map Server Port

// Default language
$CONFIG['language']		=	'English';		            // default language (remember to check if the translation exist before set)

// CP features
$CONFIG['disable_account']	=	'0';			        // disable the account creation disable = 1, enable = 0
$CONFIG['auth_image']		=	'1';			        // enable the verification code image, to check if it's a real person using the cp, instead of a bot (brute-force atack) - Recommended, but requires gd library (enable = 1 disable = 0)
$CONFIG['max_accounts']		=	'0';			        // Max accounts allowed to be in the DB (0 = disabled)
$CONFIG['password_recover']	=	'0';			        // password recover enable = 1, disable = 0
$CONFIG['reset_enable']		=	'0';			        // reset position enable = 1, disable = 0
$CONFIG['reset_cost']		=	'0';		            // reset position cost, disable cost = 0
$CONFIG['money_transfer']	=	'0';			        // money transfer enable = 1, disable = 0
$CONFIG['money_cost']		=	'0';			        // money transfer cost (100 = 1%), disable cost = 0
$CONFIG['set_slot']		    =	'0';			        // change char slot enable = 1, disable = 0
$CONFIG['reset_look']		=	'0';			        // reset char equips and colors with error enable = 1, disable = 0
$CONFIG['marry_enable']		=	'0';			        // enable marriage view and divorce
$CONFIG['prison_map']		=	'sec_pri';		        // Name of the map that is used as your jail (mapname.gat)

// About Information
$CONFIG['classlist_show']	=	'1';			        // Show the class list on about.php? (disable = 0, enable = 1)

// Mail
$CONFIG['smtp_server']		=	'localhost';	        // the smtp server, the cp will use to send mails
$CONFIG['smtp_port']		=	'25';			        // the smtp server port
$CONFIG['smtp_mail']		=	'info@ragfnx.io';		// the email of the admin
$CONFIG['smtp_username']	=	'';			            // the username of the smtp server
$CONFIG['smtp_password']	=	'';			            // the password of the smtp server


// DO NOT MESS WITH THIS
extract($CONFIG, EXTR_PREFIX_ALL, "CONFIG");
extract($_GET, EXTR_PREFIX_ALL, "GET");
extract($_POST, EXTR_PREFIX_ALL, "POST");
extract($_SERVER, EXTR_PREFIX_ALL, "SERVER");
error_reporting(0);
?>