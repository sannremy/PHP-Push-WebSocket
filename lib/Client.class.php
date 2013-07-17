<?php
/**
 * Define a Client object
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
class Client {
	private $id;
	private $socket;
	private $handshake;
	private $pid;
        public $exists=true; //to check if client is broken	
	
	function Client($id, $socket) {
		$this->id = $id;
		$this->socket = $socket;
		$this->handshake = false;
		$this->pid = null;
	}
	
	public function getId() {
		return $this->id;
	}
	
	public function getSocket() {
		return $this->socket;
	}
	
	public function getHandshake() {
		return $this->handshake;
	}
	
	public function getPid() {
		return $this->pid;
	}
	
	public function setId($id) {
		$this->id = $id;
	}
	
	public function setSocket($socket) {
		$this->socket = $socket;
	}
	
	public function setHandshake($handshake) {
		$this->handshake = $handshake;
	}
	
	public function setPid($pid) {
		$this->pid = $pid;
	}
}
?>