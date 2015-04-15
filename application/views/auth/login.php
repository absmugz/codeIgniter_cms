<?php $this->load->view('includes/header'); ?>

<div class="container">




    <?php echo form_open("auth/login", "class='form-signin'"); ?>

    <h2><?php echo lang('login_heading', "class='form-signin-heading'"); ?></h2>
    <p><?php echo lang('login_subheading'); ?></p>

    <div id="infoMessage"><?php echo $message; ?></div>


    <?php echo lang('login_identity_label', 'identity', "class='sr-only'", "for='inputEmail'"); ?>
    <?php echo form_input($identity, "id='inputEmail'", "class='form-control'", "placeholder='Email addres'"); ?>




    <?php echo lang('login_password_label', 'password', "class='sr-only'", "for='inputPassword'"); ?>
    <?php echo form_input($password, "id='inputPassword'", "class='form-control'", "placeholder='Password'"); ?>


    <p>
        <?php echo lang('login_remember_label', 'remember'); ?>
        <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"'); ?>
    </p>


    <p>
    <div class="row">
        <div class="col-md-5">  <?php
            echo form_submit('submit', 'Login', "class='btn btn-lg btn-primary btn-block'");
            ?></div>
        <div class="col-md-7"><a href="forgot_password"><?php echo lang('login_forgot_password'); ?></a></div>
    </div>

</p>

<?php echo form_close(); ?>



</div>

<?php $this->load->view('includes/footer'); ?>