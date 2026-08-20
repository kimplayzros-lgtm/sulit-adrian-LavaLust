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
        $accessFlag = trim((string) ($_GET['access'] ?? $_POST['access'] ?? ''));

        // Allow when a name is submitted in the request
        if (!empty($submittedName)) {
            $_SESSION['profile_access'] = true;
            $_SESSION['student_name'] = $submittedName;
            return $next();
        }

        // Allow when an access flag was submitted and we already have a session name
        if (!empty($accessFlag) && !empty($_SESSION['student_name'])) {
            $_SESSION['profile_access'] = true;
            return $next();
        }

        // Block otherwise
        unset($_SESSION['profile_access']);
        unset($_SESSION['student_name']);
        header('Location: /');
        exit;

        return $next();
    }
}
