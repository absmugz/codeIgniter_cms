<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <style>
            label  { display:block; } .errors {color:red;};    
        </style>
        <meta charset="utf-8">
        <title>Welcome to CodeIgniter</title>
    </head>
    <body>

        <h1>Login</h1>
        <?php echo form_open('admin'); ?>
        <p>
            <?php
            echo form_label('Email Address:', 'e_mail_address');
            echo form_input('email_address', '', 'id="e_mail_address"');
            ?>
        </p>
        <p>
            <?php
            echo form_label('Password', 'password');
            echo form_password('password', '', 'id="password"');
            ?>
        </p>
        <p> <?php echo form_submit('submit', 'Login'); ?></p>

        <?php echo form_close(); ?>

        <div class="errors"><?php echo validation_errors(); ?></div>


    </body>
</html>