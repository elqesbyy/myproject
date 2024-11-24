<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f6f9;
            font-family: 'Arial', sans-serif;
        }
        .sidebar {
            background-color: #343a40;
            color: #fff;
            padding-top: 20px;
            height: 100vh;
            position: fixed;
            width: 250px;
        }
        .sidebar a {
            color: #ddd;
            font-weight: bold;
            padding: 10px 20px;
            display: block;
            text-decoration: none;
            transition: background 0.3s ease;
        }
        .sidebar a:hover {
            background-color: #495057;
        }
        .container-main {
            margin-left: 270px;
            padding: 20px;
        }
        .dashboard-header {
            background-color: #007bff;
            color: white;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 30px;
        }
        .stat-card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
            text-align: center;
            margin-bottom: 20px;
        }
        .stat-card h4 {
            font-size: 18px;
            color: #6c757d;
        }
        .stat-card .stat-value {
            font-size: 36px;
            font-weight: bold;
            color: #007bff;
        }
        .add-link a {
            display: inline-block;
            padding: 10px 20px;
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
        .menu-header {
            font-size: 22px;
            font-weight: bold;
            margin-bottom: 20px;
            color: #fff;
        }
    </style>
</head>
<body>

<!-- Sidebar Menu -->
<div class="sidebar">
    <div class="menu-header">Admin Dashboard</div>
    <a href="<?= route_to('admin/index'); ?>">Admin List</a>
    <a href="<?= route_to('professeur'); ?>">Professeur List</a>
    <a href="<?= route_to('etudiant'); ?>">Etudiant List</a>
    <a href="<?= route_to('filiere'); ?>">Filière List</a>
    <a href="<?= route_to('matiere'); ?>">Matière List</a>
    <a href="<?= route_to('cour'); ?>">Cours List</a>
</div>

<!-- Main Content -->
<div class="container-main">
    <!-- Statistics Section -->
    <div class="dashboard-header">
        <h3 class="text-center">Welcome to the Admin Dashboard</h3>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="stat-card">
                <h4>Total Admins</h4>
                <div class="stat-value"><?= $total_admins; ?></div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="stat-card">
                <h4>Total Professeurs</h4>
                <div class="stat-value"><?= $total_professeurs; ?></div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="stat-card">
                <h4>Total Etudiants</h4>
                <div class="stat-value"><?= $total_etudiants; ?></div>
            </div>
        </div>
    </div>

    <!-- Add New Records Section -->
    <div class="add-link">
        <h4>Add New Records:</h4>
        <a href="<?= route_to('admin/create'); ?>">Add New Admin</a>
        <a href="<?= route_to('professeur/create'); ?>">Add New Professeur</a>
        <a href="<?= route_to('etudiant/create'); ?>">Add New Etudiant</a>
        <a href="<?= route_to('filiere/create'); ?>">Add New Filière</a>
        <a href="<?= route_to('matiere/create'); ?>">Add New Matière</a>
        <a href="<?= route_to('cour/create'); ?>">Add New Cours</a>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
