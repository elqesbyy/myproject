<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin List</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa; /* Light gray background */
        }
        .admin-list {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background: #ffffff; /* White background for the card */
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Subtle shadow */
        }
        .admin-item {
            border-bottom: 1px solid #ddd;
            padding: 10px 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .admin-item:last-child {
            border-bottom: none;
        }
        .admin-username {
            font-weight: bold;
            color: #495057;
        }
        .admin-email {
            color: #6c757d;
        }
        .admin-actions {
            display: flex;
            gap: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="admin-list">
            <h1 class="text-center mb-4">Admin List</h1>
            <ul class="list-unstyled">
                <?php foreach ($admins as $admin): ?>
                    <li class="admin-item">
                        <div>
                            <span class="admin-username"><?= esc($admin['username']); ?></span>
                            <span class="admin-email">(<?= esc($admin['email']); ?>)</span>
                        </div>
                        <div class="admin-actions">
                            <a href="/admin/edit/<?= esc($admin['id']); ?>" class="btn btn-sm btn-primary">Edit</a>
                            <a href="/admin/delete/<?= esc($admin['id']); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this admin?');">Delete</a>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
