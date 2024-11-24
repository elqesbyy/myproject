<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professeur List</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Professeur List</h1>
        <a href="/professeur/create" class="btn btn-success mb-3">Add New Professeur</a>
        <table class="table table-bordered">
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
                            <a href="/professeur/edit/<?= $professeur['id']; ?>" class="btn btn-warning btn-sm">Modifier</a>
                            <a href="/professeur/delete/<?= $professeur['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ?');">Supprimer</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
