<div id="login_form">  
<h1>Step 1</h1>
<?php
echo form_open('multistep/step_2');
echo form_label('Name : ');
echo form_input('name');
echo form_label('Surname : ');
echo form_input('surname');
echo form_label('Create Username : ');
echo form_input('username');
echo form_label('Your email : ');
echo form_input('email_address');
echo form_label('Confirm email : ');
echo form_input('email_address_conf');
echo form_label('Password : ');
echo form_input('password');
echo form_label('Confirm password : ');
echo form_input('password_conf');
echo form_submit('submit', 'next');
echo form_close();
?>
</div>