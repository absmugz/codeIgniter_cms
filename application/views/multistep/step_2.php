<h1>Step 2</h1>
<?php
echo form_open('multistep/step_3');

$data_radio_male = array(
'name' => 'gender',
'value' => 'Male',
'checked' => TRUE,
);

$data_radio_female = array(
'name' => 'gender',
'value' => 'Female',
);
echo form_radio($data_radio_male);
echo form_radio($data_radio_female);


echo form_submit('submit', 'next');
echo form_close();
?>

