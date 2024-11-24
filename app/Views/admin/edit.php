<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Edit Admin</h1>
        <form action="/admin/update/<?= esc($admin['id']); ?>" method="post">
    <?= csrf_field(); ?>

        <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" id="username" class="form-control" value="<?= esc($admin['username']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" value="<?= esc($admin['email']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">password</label>
                <input type="password" name="password" id="password" class="form-control" value="<?= esc($admin['password']); ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Admin</button>
        </form>
    </div>
</body>
</html>
