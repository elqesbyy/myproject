<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professeur List</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet"> <!-- FontAwesome icons -->

    <style>
        /* Body Background */
        body {
            background-color: #f4f6f9; /* Light gray background */
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #495057;
        }

        /* Main Container */
        .container {
            max-width: 1200px;
            margin-top: 40px;
        }

        /* Professeur List Card */
        .professeur-list-card {
            background-color: #fff; /* White background */
            border-radius: 16px;
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.1);
            padding: 30px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .professeur-list-card:hover {
            transform: translateY(-12px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }

        /* Header Styling */
        h1 {
            font-size: 2.5rem;
            color: #333;
            font-weight: 600;
        }

        /* Add New Professeur Button */
        .add-new-btn {
            background-color: #28a745;
            color: white;
            padding: 12px 20px;
            border-radius: 50px;
            font-size: 1rem;
            text-decoration: none;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .add-new-btn:hover {
            background-color: #218838;
            transform: scale(1.05);
        }

        /* Table Styling */
        table {
            width: 100%;
            margin-top: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        }

        thead {
            background-color: #f8f9fa;
            color: #495057;
            font-weight: bold;
        }

        td, th {
            padding: 15px;
            text-align: center;
        }

        tbody tr {
            transition: background-color 0.3s ease;
        }

        tbody tr:hover {
            background-color: #f1f1f1;
        }

        /* Action Buttons Styling */
        .btn-edit, .btn-delete {
            font-size: 0.9rem;
            padding: 10px 18px;
            border-radius: 50px;
            transition: transform 0.3s ease;
        }

        .btn-edit {
            background-color: #ffc107;
            color: white;
            border: none;
        }

        .btn-edit:hover {
            background-color: #e0a800;
            transform: scale(1.05);
        }

        .btn-delete {
            background-color: #dc3545;
            color: white;
            border: none;
        }

        .btn-delete:hover {
            background-color: #c82333;
            transform: scale(1.05);
        }

        /* FontAwesome Icons */
        .btn i {
            margin-right: 5px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            h1 {
                font-size: 2rem;
            }
            .add-new-btn {
                font-size: 0.9rem;
            }
        }

    </style>
</head>
<body>

    <div class="container">
        <!-- Professeur List Card -->
        <div class="professeur-list-card">
            <div class="d-flex justify-content-between align-items-center">
                <h1>Professeur List</h1>
                <a href="/professeur/create" class="add-new-btn"><i class="fas fa-plus-circle"></i> Add New Professeur</a>
            </div>

            <!-- Professeur Table -->
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Matière</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($professeurs as $professeur): ?>
                        <tr>
                            <td><?= esc($professeur['id']); ?></td>
                            <td><?= esc($professeur['name']); ?></td>
                            <td><?= esc($professeur['email']); ?></td>
                            <td><?= esc($professeur['matiere_name'] ?? 'N/A'); ?></td>
                            <td>
                                <a href="/professeur/edit/<?= $professeur['id']; ?>" class="btn btn-sm btn-edit"><i class="fas fa-edit"></i> Edit</a>
                                <a href="/professeur/delete/<?= $professeur['id']; ?>" class="btn btn-sm btn-delete" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ?');"><i class="fas fa-trash-alt"></i> Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
