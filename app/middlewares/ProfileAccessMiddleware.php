<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class ProfileAccessMiddleware
{
    public function handle($next)
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        if (isset($_GET['access']) && $_GET['access'] === '1') {
            $_SESSION['profile_access'] = true;
        }

        if (empty($_SESSION['profile_access'])) {
            header('Location: /');
            exit;
        }

        return $next();
    }
}
