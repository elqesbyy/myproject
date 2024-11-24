<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Matières</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center">Liste des Matières</h1>
    <a href="/matiere/create" class="btn btn-success mb-3">Ajouter Matière</a>
    <table class="table table-striped">
        <thead class="table-dark">
        <tr>
            <th>#</th>
            <th>Nom</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($matieres as $matiere): ?>
            <tr>
                <td><?= esc($matiere['id']); ?></td>
                <td><?= esc($matiere['name']); ?></td>
                <td>
                    <a href="/matiere/edit/<?= $matiere['id']; ?>" class="btn btn-warning btn-sm">Modifier</a>
                    <a href="/matiere/delete/<?= $matiere['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr ?');">Supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
