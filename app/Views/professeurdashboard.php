<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de Bord Professeur</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f2f2f7;
            margin: 0;
            padding: 0;
        }

        /* Contenu Principal */
        .main-content {
            padding: 30px;
            background-color: #fff;
            min-height: 100vh;
        }

        .header {
            font-size: 2.5rem;
            font-weight: 600;
            color: #333;
            margin-bottom: 30px;
            text-align: center;
        }

        .section-title {
            font-size: 1.5rem;
            color: #495057;
            margin-bottom: 15px;
        }

        /* Cartes Professeur et Matière */
        .card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            padding: 20px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            font-size: 1.2rem;
            color: #333;
            font-weight: 600;
        }

        .card-body {
            font-size: 1rem;
            color: #666;
        }

        /* Bouton Ajouter un Cours */
        .add-course-btn {
            display: inline-block;
            background-color: #28a745;
            color: white;
            padding: 12px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: 600;
            margin-bottom: 20px;
            transition: background-color 0.3s ease;
        }

        .add-course-btn:hover {
            background-color: #218838;
        }

        /* Tableau Cours */
        .table thead {
            background-color: #007bff;
            color: white;
        }

        .table tbody tr:hover {
            background-color: #f1f1f1;
        }

        /* Animation d'Entrée */
        @keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }

        .main-content {
            animation: fadeIn 1s ease-in-out;
        }

        /* Styles Responsives */
        @media (max-width: 768px) {
            .header {
                font-size: 1.8rem;
            }

            .add-course-btn {
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>

    <!-- Contenu Principal -->
    <div class="main-content">
        <h1 class="header">Tableau de Bord Professeur</h1>

        <!-- Détails du Professeur -->
        <div class="card">
            <div class="card-header">Détails du Professeur</div>
            <div class="card-body">
                <p><strong>Nom :</strong> <?= esc($professeur['name']); ?></p>
                <p><strong>Email :</strong> <?= esc($professeur['email']); ?></p>
            </div>
        </div>

        <!-- Matière Assignée -->
        <div class="card">
            <div class="card-header">Matière Assignée</div>
            <div class="card-body">
                <p><strong>Nom de la Matière :</strong> <?= esc($matiere['name']); ?></p>
            </div>
        </div>

        <!-- Cours Relatifs -->
        <div class="card">
            <div class="card-header">Cours Relatifs</div>
            <div class="card-body">
                <a href="<?= route_to('cour/create'); ?>" class="add-course-btn">+ Ajouter un Cour</a>
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>Nom du Cours</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($cours as $index => $cour): ?>
                            <tr>
                                <td><?= esc($cour['name']); ?></td>
                                <td>
                                    <a href="<?= $cour['pdf_file']; ?>" target="_blank" class="btn btn-info btn-sm">Voir PDF</a>
                                    <a href="/cour/edit/<?= $cour['id']; ?>" class="btn btn-warning btn-sm">Modifier</a>
                                    <a href="/cour/delete/<?= $cour['id']; ?>" class="btn btn-danger btn-sm">Supprimer</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
