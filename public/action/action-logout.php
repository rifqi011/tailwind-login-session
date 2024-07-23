<?php
session_start();
unset($_SESSION['login_time']);
header('Location: ../index');