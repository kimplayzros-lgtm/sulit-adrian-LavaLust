<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Profile extends Controller {
    public function index() {
        $student = [
            'id' => 'MCC2024-00182',
            'name' => 'CYRUS KIM ADRIAN D. SULIT',
            'course' => 'BS Information Technology',
            'year' => '3rd Year',
            'section' => '3-F4',
            'email' => 'kimplayzros@gmail.com',
            'address' => 'Sta Isabel, Calapan City, Oriental Mindoro',
            'contact' => '+63 0961 653 3431',
        ];

        $this->call->view('profile', ['student' => $student]);
    }

    public function student() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $name = $_SESSION['student_name'] ?? 'Student';

        $student = [
            'id' => 'MCC2024-xxxxx',
            'name' => htmlspecialchars($name, ENT_QUOTES, 'UTF-8'),
            'course' => 'BS Information Technology',
            'year' => '3rd Year',
            'section' => '3-F4',
            'email' => '',
            'address' => '',
            'contact' => '',
        ];

        $this->call->view('profile', ['student' => $student]);
    }
}
