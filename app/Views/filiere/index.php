<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Filières</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #495057;
        }
        .container {
            margin-top: 40px;
        }
        h1 {
            font-size: 2.5rem;
            font-weight: 600;
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }
        .btn-ajouter {
            background-color: #007bff;
            color: #fff;
            border-radius: 50px;
            padding: 10px 20px;
            font-size: 1rem;
            text-decoration: none;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }
        .btn-ajouter:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }
        .table {
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .table th {
            background-color: #343a40;
            color: white;
            font-weight: bold;
            text-align: center;
        }
        .table td {
            text-align: center;
        }
        .table tr:hover {
            background-color: #f1f1f1;
        }
        .btn {
            font-size: 0.9rem;
            padding: 8px 16px;
            border-radius: 50px;
            transition: transform 0.3s ease;
        }
        .btn-warning {
            background-color: #ffc107;
            border: none;
            color: white;
        }
        .btn-warning:hover {
            background-color: #e0a800;
            transform: scale(1.05);
        }
        .btn-danger {
            background-color: #dc3545;
            border: none;
            color: white;
        }
        .btn-danger:hover {
            background-color: #c82333;
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Liste des Filières</h1>

        <a href="/filiere/create" class="btn btn-ajouter mb-3">Ajouter une Filière</a>

        <?php if (session()->getFlashdata('success')): ?>
            <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
        <?php endif; ?>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($filieres as $filiere): ?>
                    <tr>
                        <td><?= esc($filiere['id']); ?></td>
                        <td><?= esc($filiere['name']); ?></td>
                        <td>
                            <a href="/filiere/edit/<?= $filiere['id']; ?>" class="btn btn-warning btn-sm">Modifier</a>
                            <a href="/filiere/delete/<?= $filiere['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette filière ?');">Supprimer</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
