<?php

class Users extends Controller {

    public function __construct() {

    }

    public function register() {

        // Check for POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Process form

        } else {
            // Load Form
            echo 'load form';
            // Init data
            $data = [
                'name' => '',
                'email' => '',
                'password' => '',
                'confirm_password' => '',
                'name_err' => '',
                'email_err' => '',
                'password_err' => '',
                'confirm_password_err' => ''
            ];

            // Load view
            $this->view('users/register', $data);
        }
    }



}