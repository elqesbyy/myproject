<h2>Edit Admin</h2>
<form action="/admin/update/<?= $admin['id'] ?>" method="post">
    <label>Name:</label><input type="text" name="name" value="<?= $admin['name'] ?>"><br>
    <label>Email:</label><input type="text" name="email" value="<?= $admin['email'] ?>"><br>
    <label>password:</label><input type="password" name="password" value="<?= $admin['password'] ?>"><br>
    <button type="submit">Update</button>
</form>
