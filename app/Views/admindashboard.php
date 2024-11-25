<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!-- FontAwesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* Sidebar Styling */
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;
            height: 100%;
            background-color: #343a40;
            color: #fff;
            padding-top: 20px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        }

        .sidebar a {
            color: #ddd;
            font-weight: bold;
            padding: 10px 20px;
            display: block;
            text-decoration: none;
            transition: background 0.3s ease, color 0.3s ease;
        }

        .sidebar a:hover {
            background-color: #495057;
            color: #fff; /* Change text color on hover */
        }

        .sidebar a i {
            margin-right: 8px;
        }

        /* Main container */
        .container-main {
            margin-left: 260px;
            padding: 30px;
        }

        /* Header section */
        .dashboard-header {
            background: linear-gradient(135deg, #007bff, #00c6ff);
            color: white;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 30px;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
        }

        /* Stats cards */
        .stat-card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
            text-align: center;
            margin-bottom: 20px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .stat-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
        }

        /* Add links */
        .add-link a {
            display: inline-block;
            padding: 12px 20px;
            margin: 10px;
            font-size: 16px;
            color: #fff;
            background-color: #28a745;
            text-decoration: none;
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: background 0.3s ease;
        }

        .add-link a:hover {
            background-color: #218838;
        }

        /* Responsiveness */
        @media (max-width: 768px) {
            .sidebar {
                position: absolute;
                width: 100%;
                height: auto;
                top: 0;
                left: 0;
                padding-top: 10px;
            }

            .container-main {
                margin-left: 0;
                padding: 10px;
            }

            .add-link a {
                display: block;
                margin-bottom: 10px;
            }
        }

        /* Animation for Stat Cards */
        .stat-card {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.5s ease, transform 0.5s ease;
        }

        .stat-card.visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body> 
    <!-- Sidebar -->
    <div class="sidebar">
        <h3 class="text-center text-white">Dashboard</h3>
        <a href="<?= route_to('admin/index'); ?>"><i class="fas fa-users"></i> Admins </a>
        <a href="<?= route_to('professeur'); ?>"><i class="fas fa-chalkboard-teacher"></i> Professeurs </a>
        <a href="<?= route_to('etudiant'); ?>"><i class="fas fa-graduation-cap"></i> Etudiants </a>
        <a href="<?= route_to('filiere'); ?>"><i class="fas fa-building"></i> Filières </a>
        <a href="<?= route_to('matiere'); ?>"><i class="fas fa-book"></i> Matières </a>
        <a href="<?= route_to('cour'); ?>"><i class="fas fa-book-open"></i> Cours </a>
    </div>

    <!-- Main Content -->
    <div class="container-main">
        <!-- Header with Statistics -->
        <div class="dashboard-header">
            <h1>Welcome to the Admin Dashboard</h1>
            <div class="row">
                <div class="col-md-3">
                    <div class="stat-card visible">
                        <h4>Admins</h4>
                        <p>120</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-card visible">
                        <h4>Professeurs</h4>
                        <p>45</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-card visible">
                        <h4>Etudiants</h4>
                        <p>350</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-card visible">
                        <h4>Filières</h4>
                        <p>10</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Add new links -->
        <div class="add-link">
            <a href="<?= route_to('admin/create'); ?>"><i class="fas fa-user-plus"></i> Ajouter Admin</a>
            <a href="<?= route_to('professeur/create'); ?>"><i class="fas fa-chalkboard-teacher"></i> Ajouter Professeur</a>
            <a href="<?= route_to('etudiant/create'); ?>"><i class="fas fa-graduation-cap"></i> Ajouter Etudiant</a>
            <a href="<?= route_to('filiere/create'); ?>"><i class="fas fa-building"></i> Ajouter Filière</a>
            <a href="<?= route_to('matiere/create'); ?>"><i class="fas fa-book"></i> Ajouter Matière</a>
            <a href="<?= route_to('cour/create'); ?>"><i class="fas fa-book-open"></i> Ajouter Cours</a>
        </div>

        <!-- List of items (for example, Admin List) -->
        
    </div>

    <!-- Bootstrap and FontAwesome JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- JavaScript for Stat Card Visibility Animation -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const cards = document.querySelectorAll('.stat-card');
            cards.forEach(card => {
                card.classList.add('visible');
            });
        });
    </script>
</body>
</html>
