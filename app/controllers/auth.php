<?php

use App\SmartyInit;
use App\User;
use App\Database;

$smarty = new SmartyInit();

$user = new User(new Database());

/** @var string $mode */

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_data = $_POST;

    if (isset($user_data['email'])) {
        if ($mode === 'register') {
            if (!$user->getUserDataByEmail($user_data['email'])) {
                $result = $user->createUser($user_data);
                if ($result) {
                    redirect("/auth?mode=login");
                } else {
                    $error_message = "Failed to register user.";
                }
            } else {
                $error_message = "User with this email already exists.";
            }
        }

        if ($mode === 'login') {
            $result = $user->authUser($user_data);

            if (!empty($result)) {
                $_SESSION['id'] = $result['id'];
                $_SESSION['email'] = $result['email'];
                redirect("/product?mode=manage");
            } else {
                $error_message = "Invalid email or password.";
            }
        }
    }
}

if ($mode === 'logout') {
    User::logoutUser();
    redirect("/");
}

$smarty->assign('title', ucfirst($mode));

if (isset($error_message)) {
    $smarty->assign('error_message', $error_message);
}

$smarty->display('auth.tpl');
