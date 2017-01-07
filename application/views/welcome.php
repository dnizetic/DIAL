<?php if ($this->is_logged_in): ?>
    <?php if ($username): ?>
        Hi, <strong><?php echo $username; ?></strong>! <br/>
    <?php endif; ?>
<?php endif; ?>

Welcome to the index page.

<br/><br/>

<?php if ($this->is_admin): ?>
    <?php echo anchor('/admin', 'Admin dashboard'); ?> <br/>
<?php endif; ?>


<?php if ($this->is_user): ?>
    <?php echo anchor('/user', 'User dashboard'); ?> <br/>
<?php endif; ?>



<?php if ($this->is_logged_in): ?>
    <?php echo anchor('/auth/logout/', 'Logout'); ?> <br/>
<?php else: ?>
    <?php echo anchor('/auth/login/', 'Login'); ?> <br/>
    <?php echo anchor('/auth/login/', 'Admin login'); ?> <br/>
    <?php echo anchor('/auth/register/', 'Register'); ?> <br/>
<?php endif; ?>
