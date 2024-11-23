<h2>Admins List</h2>
<a href="/admin/create">Add New Admin</a>
<ul>
    <?php foreach ($admins as $admin): ?>
        <li>
            <?= $admin['username'] ?> - <?= $admin['email'] ?> - <?= $admin['password'] ?>
            <a href="/admin/edit/<?= $admin['id'] ?>">Edit</a>
            <a href="/admin/delete/<?= $admin['id'] ?>">Delete</a>
        </li>
    <?php endforeach; ?>
</ul>
