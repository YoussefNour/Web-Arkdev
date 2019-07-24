<?php
require_once(__DIR__ . '/../Repository/AdminRepository.php');
require_once(__DIR__ . '/../includes/sessionStart.php');

if (!isset($_POST['password']) || empty($_POST['password'])) {
    header('Location: /login.php');
    exit();
}

if (!isset($_POST['email']) || empty($_POST['email'])) {
    header('location: /login.php');
}

$data = $_POST;

$userRepo = new UserRepository();
$user = $userRepo->login($data['email'], $data['password']);

if ($user) {
    $_SESSION['user'] = $user;
    header('Location: /dashboard.php');
    exit();

} else {

    header('Location: /login.php');
    exit();
}