<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class ProfileAccessMiddleware
{
    public function handle($next)
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $submittedName = trim((string) ($_GET['student_name'] ?? $_POST['student_name'] ?? ''));
        $expectedName = 'CYRUS KIM ADRIAN D. SULIT';

        if (!empty($submittedName)) {
            if (strcasecmp($submittedName, $expectedName) === 0) {
                $_SESSION['profile_access'] = true;
                $_SESSION['student_name'] = $expectedName;
            } else {
                unset($_SESSION['profile_access']);
                unset($_SESSION['student_name']);
                header('Location: /');
                exit;
            }
        } else {
            unset($_SESSION['profile_access']);
            unset($_SESSION['student_name']);
            header('Location: /');
            exit;
        }

        if (empty($_SESSION['profile_access'])) {
            header('Location: /');
            exit;
        }

        return $next();
    }
}
