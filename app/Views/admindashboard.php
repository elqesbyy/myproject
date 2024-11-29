<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord Admin</title>

    <!-- FontAwesome pour les icônes -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* Général */
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f8f9fa;
        }

        /* Barre latérale */
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

        /* Cartes statistiques */
        .stat-card {
            background: #ffffff;
            border-radius: 12px;
            padding: 20px;
            text-align: center;
            transition: all 0.3s;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }

        .stat-card h4 {
            font-size: 16px;
            margin-bottom: 10px;
        }

        .stat-card p {
            font-size: 24px;
            margin: 0;
            font-weight: bold;
            color: #1d3557;
        }

        .stat-card i {
            font-size: 36px;
            color: #457b9d;
            margin-bottom: 15px;
        }

        /* Liens d'ajout */
        .add-link a {
            display: inline-block;
            padding: 12px 20px;
            margin: 10px 5px;
            font-size: 16px;
            color: white;
            background-color: #457b9d;
            text-decoration: none;
            border-radius: 6px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s, box-shadow 0.3s;
        }

        .add-link a:hover {
            background-color: #1d3557;
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.2);
        }

        /* Adaptations Responsives */
        @media (max-width: 768px) {
            .sidebar {
                position: absolute;
                width: 100%;
                height: auto;
                z-index: 10;
            }

            .container-main {
                margin-left: 0;
                padding: 20px;
            }

            .add-link a {
                display: block;
                margin-bottom: 10px;
            }
        }
    </style>
</head>
<body>
    <!-- Barre latérale -->
    <div class="sidebar">
        <h3>Tableau de bord Admin</h3>
        <a href="<?= route_to('admin/index'); ?>"><i class="fas fa-users"></i> Administrateurs</a>
        <a href="<?= route_to('professeur'); ?>"><i class="fas fa-chalkboard-teacher"></i> Professeurs</a>
        <a href="<?= route_to('etudiant'); ?>"><i class="fas fa-graduation-cap"></i> Étudiants</a>
        <a href="<?= route_to('filiere'); ?>"><i class="fas fa-building"></i> Filières</a>
        <a href="<?= route_to('matiere'); ?>"><i class="fas fa-book"></i> Matières</a>
        <a href="<?= route_to('cour'); ?>"><i class="fas fa-book-open"></i> Cours</a>
    </div>

    <!-- Contenu principal -->
    <div class="container-main">
        <!-- En-tête -->
        <div class="dashboard-header">
            <h1>Bienvenue!</h1>
        </div>

        <!-- Section des statistiques -->
        <div class="row my-4">
            <div class="col-lg-4">
                <div class="stat-card">
                    <i class="fas fa-users"></i>
                    <h4>Administrateurs</h4>
                    <p><?= $total_admins; ?></p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="stat-card">
                    <i class="fas fa-chalkboard-teacher"></i>
                    <h4>Professeurs</h4>
                    <p><?= $total_professeurs; ?></p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="stat-card">
                    <i class="fas fa-graduation-cap"></i>
                    <h4>Étudiants</h4>
                    <p><?= $total_etudiants; ?></p>
                </div>
            </div>
        </div>

        <!-- Liens d'ajout -->
        <div class="add-link">
            <a href="<?= route_to('admin/create'); ?>"><i class="fas fa-user-plus"></i> Ajouter un Administrateur</a>
            <a href="<?= route_to('professeur/create'); ?>"><i class="fas fa-user-plus"></i> Ajouter un Professeur</a>
            <a href="<?= route_to('etudiant/create'); ?>"><i class="fas fa-user-plus"></i> Ajouter un Étudiant</a>
        </div>
    </div>

    <!-- Bootstrap et JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
