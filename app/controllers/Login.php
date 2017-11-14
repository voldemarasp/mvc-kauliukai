<?php

class Login extends Controller {

	public function index() {
		$login = $this->model('Login_model');
		$result = $login->checkLogin($_POST['vardas']);

		if (!empty($result)) {
		$slaptazodis = $_POST['slaptazodis'];
		$slaptazodis_hashas = $result[0]['slaptazodis'];
		} else {
			header('Location: http://localhost/Projektas/Objektinis%20MVC/MVC-Game-master?login_error=bad_login');
			die();
		}

		if (password_verify($slaptazodis, $slaptazodis_hashas)) {

			$_SESSION['logged'] = "logged";
			$_SESSION['username'] = $_POST['vardas'];
			header('Location: http://localhost/Projektas/Objektinis%20MVC/MVC-Game-master');
		} else { 
			header('Location: http://localhost/Projektas/Objektinis%20MVC/MVC-Game-master?test=' . $result[0]['slaptazodis'] . '');
		}

	}

	public function logout() {
		session_destroy();
		unset($_SESSION['logged']);
		header('Location: http://localhost/Projektas/Objektinis%20MVC/MVC-Game-master');
	}

	public function register() {

		$login = $this->model('Login_model');
		$result = $login->checkLogin($_POST['vardas_reg']);
		header('Location: http://localhost/Projektas/Objektinis%20MVC/MVC-Game-master?error_reg=user_exists&&register=yes');
		if (empty($result)) {
			$reg = $this->model('Login_model');
			$slaptazodis = password_hash ($_POST['slaptazodis_reg'], PASSWORD_DEFAULT);
			$result = $reg->register($_POST['vardas_reg'], $slaptazodis);
			header('Location: http://localhost/Projektas/Objektinis%20MVC/MVC-Game-master?');
		}
	}
}