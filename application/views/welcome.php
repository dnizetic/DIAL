<?php if ($username): ?>
    Hi, <strong><?php echo $username; ?></strong>! 
<?php endif; ?>
Welcome to the dashboard.

<br/>
<?php echo anchor('/auth/login/', 'Login'); ?> <br/>
<?php echo anchor('/auth/login/', 'Admin login'); ?> <br/>
<?php echo anchor('/auth/register/', 'Register'); ?> <br/>
<?php echo anchor('/auth/logout/', 'Logout'); ?> 