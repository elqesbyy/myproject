<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin List</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet"> <!-- FontAwesome icons -->

    <style>
        body {
            background-color: #e9ecef; /* Elegant light gray background */
            font-family: 'Arial', sans-serif;
        }

        .admin-list-container {
            max-width: 900px;
            margin: 40px auto;
        }

        .admin-list-card {
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            padding: 30px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .admin-list-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.1);
        }

        .admin-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        .admin-header h1 {
            font-size: 2rem;
            color: #343a40;
        }

        .add-new-btn {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border-radius: 50px;
            font-size: 1rem;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .add-new-btn:hover {
            background-color: #0056b3;
        }

        .admin-item {
            padding: 20px;
            border-radius: 10px;
            background-color: #f8f9fa;
            margin-bottom: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .admin-item:hover {
            background-color: #e9ecef;
            transform: translateX(10px);
        }

        .admin-username {
            font-size: 1.2rem;
            font-weight: bold;
            color: #495057;
        }

        .admin-email {
            color: #6c757d;
            font-size: 0.9rem;
        }

        .admin-actions .btn {
            font-size: 0.9rem;
            padding: 8px 14px;
            border-radius: 50px;
            transition: transform 0.2s ease;
        }

        .admin-actions .btn:hover {
            transform: scale(1.1);
        }

        .btn-edit {
            background-color: #28a745;
            color: white;
            border: none;
        }

        .btn-edit:hover {
            background-color: #218838;
        }

        .btn-delete {
            background-color: #dc3545;
            color: white;
            border: none;
        }

        .btn-delete:hover {
            background-color: #c82333;
        }

        .divider {
            height: 1px;
            background-color: #ddd;
            margin: 15px 0;
        }

        .admin-email {
            font-size: 1rem;
        }
    </style>
</head>
<body>
    <div class="container admin-list-container">
        <div class="admin-list-card">
            <div class="admin-header">
                <h1>Admin List</h1>
                <a href="/admin/create" class="add-new-btn"><i class="fas fa-plus-circle"></i> Add New Admin</a>
            </div>

            <div class="divider"></div>

            <ul class="list-unstyled">
                <?php foreach ($admins as $admin): ?>
                    <li class="admin-item">
                        <div>
                            <span class="admin-username"><?= esc($admin['username']); ?></span><br>
                            <span class="admin-email"><?= esc($admin['email']); ?></span>
                        </div>
                        <div class="admin-actions">
                            <a href="/admin/edit/<?= esc($admin['id']); ?>" class="btn btn-sm btn-edit"><i class="fas fa-edit"></i> Edit</a>
                            <a href="/admin/delete/<?= esc($admin['id']); ?>" class="btn btn-sm btn-delete" onclick="return confirm('Are you sure you want to delete this admin?');"><i class="fas fa-trash-alt"></i> Delete</a>
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
