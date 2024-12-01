<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord Étudiant</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Styles généraux */
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

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

        /* Cartes de statistiques */
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

        /* Ajustements responsives */
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
    <!-- Sidebar -->
    <div class="sidebar">
        <h3>Tableau de bord Étudiant</h3>
        <a href="#"><i class="fas fa-home"></i> Accueil</a>
        <a href="<?= route_to('cour'); ?>"><i class="fas fa-book"></i> Mes Cours</a>
        <a href="#"><i class="fas fa-user"></i> Mon Profil</a>
        <a href=""><i class="fas fa-sign-out-alt"></i> Déconnexion</a>
    </div>

    <!-- Contenu principal -->
    <div class="container-main">
        <!-- En-tête -->
        <div class="dashboard-header">
            <h1>Bienvenue</h1>
        </div>

        <!-- Statistiques (nombre de cours, matières, professeurs) -->
        <div class="row my-4">
            <div class="col-lg-4">
                <div class="stat-card">
                    <i class="fas fa-book"></i>
                    <h4>Mes Cours</h4>
                     <p><?= isset($total_courses) ? $total_courses : 0; ?></p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="stat-card">
                    <i class="fas fa-chalkboard-teacher"></i>
                    <h4>Professeurs</h4>
                    <p><?= isset($total_professors) ? $total_professors : 0; ?></p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="stat-card">
                    <i class="fas fa-book-open"></i>
                    <h4>Matières</h4>
                    <p><?= isset($total_subjects) ? $total_subjects : 0; ?></p>
                </div>
            </div>
        </div>

        <!-- Liens d'action -->
        <div class="add-link">
            <a href="#"><i class="fas fa-book-reader"></i> Voir Mes Cours</a>
            <a href="#"><i class="fas fa-user-edit"></i> Modifier Mon Profil</a>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
