<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Cours</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .table-container {
            margin: 40px auto;
            max-width: 90%;
            background: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }
        .table-title {
            margin-bottom: 20px;
            font-size: 24px;
            font-weight: bold;
            color: #333333;
        }
        .action-buttons a {
            margin-right: 5px;
        }
        .btn-add {
            background-color: #28a745;
            color: white;
        }
        .btn-add:hover {
            background-color: #218838;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="table-container">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1 class="table-title">Liste des Cours</h1>
                <a href="/cour/create" class="btn btn-add">Ajouter un Cours</a>
            </div>
            <table class="table table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Nom du Cours</th>
                        <th>Matière</th>
                        <th>Professeur</th>
                        <th>PDF</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($cours)): ?>
                        <?php foreach ($cours as $index => $cour): ?>
                            <tr>
                                <td><?= $index + 1; ?></td>
                                <td><?= esc($cour['name']); ?></td>
                                <td><?= esc($cour['matiere_name']); ?></td>
                                <td><?= esc($cour['professeur_name']); ?></td>
                                <td>
                                    <?php if (!empty($cour['pdf_file'])): ?>
                                        <a href="<?=  $cour['pdf_file']; ?>" target="_blank" class="btn btn-sm btn-info">Voir PDF</a>
                                        <?php else: ?>
                                        <span class="text-muted">Aucun fichier</span>
                                    <?php endif; ?>
                                </td>
                                <td class="action-buttons">
                                    <a href="/cour/edit/<?= $cour['id']; ?>" class="btn btn-sm btn-primary">Modifier</a>
                                    <a href="/cour/delete/<?= $cour['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce cours ?');">Supprimer</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="6" class="text-center text-muted">Aucun cours trouvé.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
