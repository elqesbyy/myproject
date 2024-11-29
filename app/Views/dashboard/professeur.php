<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de Bord Professeur</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Styles globaux (mêmes que pour admin) */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }

        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: 280px;
            height: 100vh;
            background: linear-gradient(180deg, #2a9d8f, #264653);
            color: #fff;
            padding: 20px 15px;
            box-shadow: 2px 0 10px rgba(0, 0, 0, 0.1);
        }

        .sidebar h3 {
            text-align: center;
            margin-bottom: 30px;
            font-size: 1.5rem;
        }

        .sidebar a {
            display: flex;
            align-items: center;
            color: #ddd;
            padding: 15px;
            margin: 5px 0;
            text-decoration: none;
            border-radius: 8px;
            transition: all 0.3s;
        }

        .sidebar a i {
            margin-right: 15px;
            font-size: 1.2rem;
        }

        .sidebar a:hover {
            background-color: #2a9d8f;
            color: #fff;
        }

        .main {
            margin-left: 300px;
            padding: 30px;
        }

        .main-header {
            background: #2a9d8f;
            color: white;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
            text-align: center;
        }

        .main-header h1 {
            font-size: 1.8rem;
        }

        .card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            transition: transform 0.3s;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card h4 {
            font-size: 1.2rem;
            margin-bottom: 10px;
        }

        .card p {
            font-size: 1.5rem;
            margin: 0;
            color: #264653;
        }

        .card i {
            font-size: 2.5rem;
            color: #2a9d8f;
            margin-bottom: 10px;
        }

        .action-buttons a {
            display: inline-block;
            margin: 5px;
            padding: 10px 20px;
            background: #2a9d8f;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            transition: background 0.3s;
        }

        .action-buttons a:hover {
            background: #264653;
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }

            .main {
                margin-left: 0;
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <!-- Barre latérale -->
    <div class="sidebar">
        <h3>Espace Professeur</h3>
        <a href="#"><i class="fas fa-book"></i> Mes Matières</a>
        <a href="#"><i class="fas fa-users"></i> Mes Étudiants</a>
        <a href="#"><i class="fas fa-calendar"></i> Mon Emploi du Temps</a>
    </div>

    <!-- Contenu principal -->
    <div class="main">
        <div class="main-header">
            <h1>Bonjour, Professeur</h1>
        </div>

        <!-- Cartes Statistiques -->
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <i class="fas fa-book"></i>
                    <h4>Matières</h4>
                    <p>5</p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <i class="fas fa-users"></i>
                    <h4>Étudiants</h4>
                    <p>120</p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <i class="fas fa-calendar"></i>
                    <h4>Emplois du Temps</h4>
                    <p>8 heures</p>
                </div>
            </div>
        </div>

        <!-- Liens d'action -->
        <div class="action-buttons">
            <a href="#"><i class="fas fa-plus-circle"></i> Ajouter une Note</a>
            <a href="#"><i class="fas fa-file-alt"></i> Télécharger Planning</a>
        </div>
    </div>
</body>
</html>
