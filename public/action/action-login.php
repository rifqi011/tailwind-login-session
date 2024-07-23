<?php
session_start();
include 'config.php';
date_default_timezone_set('Asia/Jakarta');

class LoginProcess
{
    private $nomor_hp;
    private $password;

    public function __construct($nomor_hp, $password)
    {
        $this->nomor_hp = $nomor_hp;
        $this->password = $password;
    }

    public function validate()
    {
        if ($this->nomor_hp === NOMOR_HP && $this->password === PASSWORD) {
            $_SESSION['login_time'] = date('Y-m-d H:i:s');
            return true;
        } else {
            return false;
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nomor_hp = $_POST['nomor_hp'];
    $password = $_POST['password'];

    $login = new LoginProcess($nomor_hp, $password);

    if ($login->validate()) {
        header('Location: ../index');
    } else {
        header('Location: ../login');
    }
}
header('Location: ../index');