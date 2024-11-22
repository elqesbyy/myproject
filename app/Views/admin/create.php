<!DOCTYPE html>
<html>
<head>
    <title>Add Admin</title>
</head>
<body>
    <h1>Add New Admin</h1>
    <form action="<?= site_url('admin/store') ?>" method="post">
    <?= csrf_field() ?>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <button type="submit">Add Admin</button>
    </form>
</body>
</html>
