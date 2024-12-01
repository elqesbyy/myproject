<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier la Filière</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #495057;
        }
        .container {
            margin-top: 50px;
            max-width: 600px;
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 2rem;
            color: #333;
        }
        label {
            font-weight: bold;
        }
        .btn {
            font-size: 1rem;
            padding: 10px 20px;
            border-radius: 50px;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }
        .btn-success {
            background-color: #28a745;
            border: none;
        }
        .btn-success:hover {
            background-color: #218838;
            transform: scale(1.05);
        }
        .btn-secondary {
            background-color: #6c757d;
            border: none;
        }
        .btn-secondary:hover {
            background-color: #5a6268;
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Modifier la Filière</h1>

        <form action="/filiere/update/<?= $filiere['id']; ?>" method="post">
            <?= csrf_field(); ?>
            <div class="mb-3">
                <label for="name" class="form-label">Nom de la Filière</label>
                <input type="text" class="form-control" id="name" name="name" value="<?= esc($filiere['name']); ?>" placeholder="Saisir le nom de la filière" required>
            </div>

            <div class="d-flex justify-content-between">
                <a href="/filiere" class="btn btn-secondary">Retour</a>
                <button type="submit" class="btn btn-success">Mettre à jour</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
