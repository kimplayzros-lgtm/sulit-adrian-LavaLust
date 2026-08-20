<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentProfileMiddleware
{
    public function handle($next)
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $submittedName = trim((string) ($_GET['student_name'] ?? $_POST['student_name'] ?? ''));
        $accessFlag = trim((string) ($_GET['access'] ?? $_POST['access'] ?? ''));

        // If name submitted now, set session and allow
        if (!empty($submittedName)) {
            $_SESSION['student_name'] = $submittedName;
            $_SESSION['student_profile_access'] = true;
            return $next();
        }

        // If access flag present and session already has student name, allow
        if (!empty($accessFlag) && !empty($_SESSION['student_name'])) {
            $_SESSION['student_profile_access'] = true;
            return $next();
        }

        // Block and redirect to home with warning
        unset($_SESSION['student_profile_access']);
        header('Location: /?warning=need_name');
        exit;
    }
}
