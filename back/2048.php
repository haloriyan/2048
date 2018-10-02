<?php

class game {
	public function __construct() {
		$this->koneksi();
	}
	public function koneksi() {
		$host = 'localhost';
		$user = 'root';
		$pass = '';
		$nama = '2048';
		$this->konek = new mysqli($host, $user, $pass, $nama);
		return $this->konek;
	}
	public function sesi() {
		session_start();
		$this->session = $_SESSION['sesigame'];
		if($this->session == null) {
			header('location: ./login.php');
		}
		return $this->session;
	}
	public function login($a, $b, $c, $d) {
		$q = mysqli_query($this->konek, "INSERT INTO player VALUES('$a','$b','$c','$d')");
		session_start();
		$_SESSION['sesigame']=$a;
		return $q;
	}
	public function init() {
		if($this->sesi() == null) {
			$_SESSION['sesigame']=$randomString;
		}
	}
	public function load() {
		$q = mysqli_query($this->konek, "SELECT * FROM player ORDER BY skor DESC");
		while($r = mysqli_fetch_array($q)) {
			$hasil[] = $r;
		}
		return $hasil;
	}
	public function skor($id, $skor) {
		$now = time();
		$q = mysqli_query($this->konek, "UPDATE player SET skor = '$skor', updated = '$now' WHERE idplayer = '$id'");
		return $q;
	}
}

$game = new game();