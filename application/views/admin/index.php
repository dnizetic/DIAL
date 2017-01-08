<?php echo $this->message->display() ?>
<p>List of users</p>
<table>
    <thead>
        <tr>
            <th>First name</th>
            <th>Last name</th>
            <th>Username</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?php echo $user->first_name; ?></td>
                <td><?php echo $user->last_name; ?></td>
                <td><?php echo $user->username; ?></td>
                <td>
                    <?php if ($user->activated): ?>
                        <?php echo anchor('/admin/status/0/' . $user->id, 'Disable'); ?>
                    <?php else: ?>
                        <?php echo anchor('/admin/status/1/' . $user->id, 'Enable'); ?>
                    <?php endif; ?>
                    <?php echo anchor('/admin/edit/' . $user->id, 'Edit'); ?>

                    <a href="/admin/delete/<?php echo $user->id; ?>" onclick="return confirm('Delete user?');">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>

    </tbody>
</table>