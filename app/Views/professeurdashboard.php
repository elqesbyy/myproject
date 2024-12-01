<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de Bord Professeur</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Sidebar */
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: 280px;
            height: 100%;
            background: linear-gradient(180deg, #1d3557, #457b9d);
            color: white;
            padding-top: 20px;
            box-shadow: 2px 0 10px rgba(0, 0, 0, 0.1);
        }

        .sidebar h3 {
            text-align: center;
            font-weight: bold;
            margin-bottom: 30px;
        }

        .sidebar a {
            display: block;
            color: #ddd;
            font-weight: 600;
            padding: 15px 25px;
            margin: 5px 15px;
            text-decoration: none;
            border-radius: 8px;
            transition: background-color 0.3s, transform 0.2s;
        }

        .sidebar a:hover {
            background-color: #1d3557;
            color: #fff;
            transform: translateX(5px);
        }

        .sidebar a i {
            margin-right: 10px;
        }

        /* Contenu principal */
        .container-main {
            margin-left: 300px;
            padding: 30px;
        }

        /* En-tête */
        .dashboard-header {
            background: linear-gradient(90deg, #457b9d, #1d3557);
            color: white;
            padding: 20px 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .dashboard-header h1 {
            font-size: 28px;
            margin: 0;
        }

        /* Cartes */
        .card {
            background-color: #ffffff;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }

        .card-header {
            font-size: 1.2rem;
            font-weight: bold;
            color: #1d3557;
        }

        /* Bouton Ajouter */
        .add-course-btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #457b9d;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            transition: background-color 0.3s;
        }

        .add-course-btn:hover {
            background-color: #1d3557;
        }

        /* Tableau */
        .table thead {
            background-color: #457b9d;
            color: white;
        }

        .table tbody tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <h3>Tableau de Bord Professeur</h3>
        <a href="<?= route_to('professeurdashboard'); ?>"><i class="fas fa-home"></i> Accueil</a>
        <a href="<?= route_to('cour/create'); ?>"><i class="fas fa-plus"></i> Ajouter un Cour</a>
        <a href="#"><i class="fas fa-user"></i> Mon Profil</a>
        <a href="<?= route_to('login'); ?>"><i class="fas fa-sign-out-alt"></i> Déconnexion</a>
    </div>

    <!-- Contenu principal -->
    <div class="container-main">
        <!-- En-tête -->
        <div class="dashboard-header">
            <h1>Tableau de Bord Professeur</h1>
        </div>

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

        <!-- Liste des Cours -->
        <div class="card">
            <div class="card-header">Cours Relatifs</div>
            <div class="card-body">
                <table class="table table-hover table-bordered mt-3">
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
