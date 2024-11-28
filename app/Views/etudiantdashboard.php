<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Étudiant</title>
    <style>
        /* Global Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }

        /* Header */
        .header {
            background-color: #007bff;
            color: #ffffff;
            padding: 20px;
            text-align: center;
        }

        .header h1 {
            margin: 0;
            font-size: 2rem;
        }

        /* Navigation Menu */
        .menu {
            display: flex;
            justify-content: center;
            background-color: #0056b3;
            padding: 10px 0;
        }

        .menu a {
            color: #ffffff;
            text-decoration: none;
            padding: 10px 20px;
            margin: 0 10px;
            border-radius: 4px;
            font-size: 1rem;
        }

        .menu a:hover {
            background-color: #007bff;
        }

        /* Main Content */
        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
        }

        .courses {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
        }

        .course-card {
            background: #ffffff;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .course-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }

        .course-card .content {
            padding: 20px;
        }

        .course-card h3 {
            font-size: 1.5rem;
            margin: 0 0 10px;
            color: #333;
        }

        .course-card p {
            margin: 0 0 10px;
            color: #555;
        }

        .course-card .btn {
            display: inline-block;
            padding: 10px 15px;
            background-color: #007bff;
            color: #ffffff;
            text-decoration: none;
            border-radius: 4px;
            font-size: 0.9rem;
        }

        .course-card .btn:hover {
            background-color: #0056b3;
        }

        .text-muted {
            color: #888;
            font-style: italic;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <div class="header">
        <h1>Dashboard Étudiant</h1>
    </div>

    <!-- Navigation Menu -->
    <div class="menu">
        <a href="#">Accueil</a>
        <a href="#">Mes Cours</a>
        <a href="#">Profil</a>
        <a href="#">Déconnexion</a>
    </div>

    <!-- Main Content -->
    <div class="container">
        <h2>Mes Cours</h2>
        <div class="courses">
            <?php if (!empty($cours)): ?>
                <?php foreach ($cours as $index => $cour): ?>
                    <div class="course-card">
                        <div class="content">
                            <h3><?= esc($cour['name']); ?></h3>
                            <p><strong>Matière:</strong> <?= esc($cour['matiere_name']); ?></p>
                            <p><strong>Professeur:</strong> <?= esc($cour['professeur_name']); ?></p>
                            <?php if (!empty($cour['pdf_file'])): ?>
                                <a href="<?= $cour['pdf_file']; ?>" target="_blank" class="btn">Voir PDF</a>
                            <?php else: ?>
                                <span class="text-muted">Aucun fichier</span>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>Aucun cours disponible pour le moment.</p>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>
