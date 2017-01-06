<?php echo anchor('/admin/index', 'Back'); ?> <br/>

<p>Edit user: <?php echo $user->username; ?></p>

<?php
$first_name = array(
    'name' => 'first_name',
    'id' => 'first_name',
    'value' => $user->first_name,
    'maxlength' => 255,
    'size' => 30,
);
$last_name = array(
    'name' => 'last_name',
    'id' => 'last_name',
    'value' => $user->last_name,
    'maxlength' => 255,
    'size' => 30,
);
$email = array(
    'name' => 'email',
    'id' => 'email',
    'value' => $user->email,
    'maxlength' => 80,
    'size' => 30,
);
$username = array(
    'name' => 'username',
    'id' => 'username',
    'value' => $user->username,
    'maxlength' => $this->config->item('username_max_length', 'tank_auth'),
    'size' => 30,
);
?>
<?php echo form_open($this->uri->uri_string()); ?>
<table>
    <tr>
        <td><?php echo form_label('First name', $first_name['id']); ?></td>
        <td><?php echo form_input($first_name); ?></td>
        <td style="color: red;"><?php echo form_error($first_name['name']); ?><?php echo isset($errors[$first_name['name']]) ? $errors[$first_name['name']] : ''; ?></td>
    </tr>
    <tr>
        <td><?php echo form_label('Last name', $last_name['id']); ?></td>
        <td><?php echo form_input($last_name); ?></td>
        <td style="color: red;"><?php echo form_error($last_name['name']); ?><?php echo isset($errors[$last_name['name']]) ? $errors[$last_name['name']] : ''; ?></td>
    </tr>
    <tr>
        <td><?php echo form_label('Username', $username['id']); ?></td>
        <td><?php echo form_input($username); ?></td>
        <td style="color: red;"><?php echo form_error($username['name']); ?><?php echo isset($errors[$username['name']]) ? $errors[$username['name']] : ''; ?></td>
    </tr>
    <tr>
        <td><?php echo form_label('Email', $email['id']); ?></td>
        <td><?php echo form_input($email); ?></td>
        <td style="color: red;"><?php echo form_error($email['name']); ?><?php echo isset($errors[$email['name']]) ? $errors[$email['name']] : ''; ?></td>
    </tr>
</table>
<?php echo form_submit('change', 'Change'); ?>
<?php echo form_close(); ?>