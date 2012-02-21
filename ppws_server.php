#!/usr/bin/php -q
<?php
/**
 * A daemon of PHP Push WebSocket
 * @author Sann-Remy Chea <http://srchea.com>
 * @license This program is free software: you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation, either version 3 of the License, or
	(at your option) any later version.
	
	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.
	
	You should have received a copy of the GNU General Public License
	along with this program.  If not, see <http://www.gnu.org/licenses/>.
 * @version 0.1
 */
error_reporting(E_ALL);
require_once 'lib/Server.class.php';
require_once 'lib/Client.class.php';

set_time_limit(0);

// variables
$address = '127.0.0.1';
$port = 5001;
$verboseMode = true;

$server = new Server($address, $port, $verboseMode);
$server->run();
?>
