<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Étudiant</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* General Styles */
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

        /* Main Content */
        .container-main {
            margin-left: 300px;
            padding: 30px;
        }

        .dashboard-header {
            background: linear-gradient(90deg, #457b9d, #1d3557);
            color: white;
            padding: 20px 30px;
            border-radius: 10px;
            margin-bottom: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .dashboard-header h1 {
            font-size: 28px;
            margin: 0;
        }

        .courses {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
        }

        .course-card {
            background: #ffffff;
            border: 1px solid #ddd;
            border-radius: 12px;
            padding: 20px;
            text-align: center;
            transition: all 0.3s;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .course-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }

        .course-card h3 {
            font-size: 1.5rem;
            color: #333;
        }

        .course-card p {
            margin: 10px 0;
            color: #555;
        }

        .course-card .btn {
            padding: 10px 20px;
            background-color: #457b9d;
            color: #ffffff;
            text-decoration: none;
            border-radius: 8px;
        }

        .course-card .btn:hover {
            background-color: #1d3557;
        }

        .text-muted {
            color: #888;
            font-style: italic;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h3>Tableau de bord Étudiant</h3>
        <a href="<?= route_to('etudiantdashboard'); ?>"><i class="fas fa-home"></i> Accueil</a>
        <a href="<?= route_to('courEtudiant'); ?>"><i class="fas fa-book"></i> Mes Cours</a>
        <a href="<?= route_to('profile'); ?>"><i class="fas fa-user"></i> Profil</a>
        <a href="<?= route_to('login'); ?>"><i class="fas fa-sign-out-alt"></i> Déconnexion</a>
    </div>

    <!-- Main Content -->
    <div class="container-main">
        <div class="dashboard-header">
            <h1>Bienvenue</h1>
        </div>

        <div class="courses">
            <?php if (!empty($cours)): ?>
                <?php foreach ($cours as $index => $cour): ?>
                    <div class="course-card">
                        <h3><?= esc($cour['name']); ?></h3>
                        <p><strong>Matière:</strong> <?= esc($cour['matiere_name']); ?></p>
                        <p><strong>Professeur:</strong> <?= esc($cour['professeur_name']); ?></p>
                        <?php if (!empty($cour['pdf_file'])): ?>
                            <a href="<?=  $cour['pdf_file']; ?>" target="_blank" class="btn">Voir PDF</a>
                        <?php else: ?>
                            <span class="text-muted">Aucun fichier</span>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>Aucun cours disponible pour le moment.</p>
            <?php endif; ?>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
