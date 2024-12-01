<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Administrateur</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa; /* Couleur d'arrière-plan douce */
            font-family: 'Arial', sans-serif;
        }

        .card {
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #495057;
            border-top-left-radius: 12px;
            border-top-right-radius: 12px;
        }

        .card-header h1 {
            font-size: 1.5rem;
            font-weight: bold;
        }

        .form-label {
            font-weight: 500;
            color: #495057;
        }

        .btn-success {
            padding: 10px 20px;
            font-size: 1rem;
            border-radius: 50px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .btn-success:hover {
            background-color: #218838;
            transform: scale(1.05);
        }

        .form-control {
            border-radius: 10px;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }

        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header text-white text-center">
                        <h1 class="h3 mb-0">Ajouter un Nouvel Administrateur</h1>
                    </div>
                    <div class="card-body">
                        <form action="<?= route_to('admin/store') ?>" method="post">
                            <?= csrf_field() ?>
                            <div class="mb-3">
                                <label for="username" class="form-label">Nom d'utilisateur :</label>
                                <input type="text" id="username" name="username" class="form-control" placeholder="Entrez le nom d'utilisateur" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Adresse e-mail :</label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="Entrez l'adresse e-mail" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Mot de passe :</label>
                                <input type="password" id="password" name="password" class="form-control" placeholder="Entrez le mot de passe" required>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-success">Ajouter l'Administrateur</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
