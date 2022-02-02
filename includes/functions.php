<?php
include_once "config.php";

function get_url($page ='') {
	return HOST . "/$page";
}

function db() {
	try {
		return new PDO("mysql:host=". DB_HOST. ";dbname=". DB_NAME . ";charset=utf8", DB_USER, DB_PASS,
			[
				PDO::ATTR_EMULATE_PREPARES => false,
				PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
				PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
			]
		);
	} catch (PDOException $e) {
		die($e->getMessage());
	}
}

function db_query($sql, $exec = false) {
	if (empty($sql)) return false;

	if ($exec) return db()->exec($exec);

	return db()->query($sql);
}

function get_posts($user_id = 0) {
	if ($user_id > 0) {
		return db_query("SELECT posts.*, users.name, users.login, users.avatar FROM `posts` JOIN `users` ON users.id = posts.user_id WHERE posts.user_id = $user_id;");
	} else {
		return db_query("SELECT posts.*, users.name, users.login, users.avatar FROM `posts` JOIN `users` ON users.id = posts.user_id;");
	}
<<<<<<< Updated upstream
}
=======

	if ($auth_data['pass'] !== $auth_data['pass2']) {
		$_SESSION['error'] = 'Пароли не совпадают ';
		header('Location: ' . get_url('register.php'));
		die;
	}

	if (add_user($auth_data['login'], $auth_data['pass'])) {
		header('Location: ' . get_url(''));
		die;
	}
}

function login($auth_data) {

}

function get_error_message()
{
	$error = '';
	if (!empty($_SESSION['error']) && isset($_SESSION['error'])) {
		$error = $_SESSION['error'];
		$_SESSION['error'] = '';
	}

	return $error;
}
>>>>>>> Stashed changes
