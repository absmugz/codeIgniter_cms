<?php $this->load->view('includes/header'); ?>

<div id="login_form">

    <h1>Username already exists!</h1>
    <?php
    echo anchor('login/signup', 'Create Account');
    ?>
</div><!-- end login_form-->



<?php $this->load->view('includes/tut_info'); ?>

<?php $this->load->view('includes/footer'); ?>

