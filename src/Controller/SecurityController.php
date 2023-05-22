<?php

namespace App\Controller;

use App\Model\UserManager;

class SecurityController extends AbstractController
{
    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $userManager = new UserManager();
            $isLogin = $userManager->selectOneByAccount($_POST['user'], $_POST['password']);
            if ($isLogin) {
                $_SESSION['user'] = $isLogin['user'];
                $_SESSION['isLogin'] = true;
                header('Location:/dashboard');
            } else {
                header('Location:/login');
            }
        }
        return $this->twig->render('Security/login.html.twig');
    }

    public function logout()
    {
        $_SESSION['user'] = '';
        $_SESSION['isLogin'] = '';
        header('Location:/');
    }

    public function forbidden()
    {
        return $this->twig->render('Security/forbidden.html.twig');
    }
}
