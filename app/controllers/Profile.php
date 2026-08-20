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
}
