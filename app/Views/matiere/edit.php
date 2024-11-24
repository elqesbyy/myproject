<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier Matière</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .form-container {
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        body {
            background-color: #f4f7f9;
        }
        .btn-custom {
            background-color: #28a745;
            color: white;
        }
        .btn-custom:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="form-container">
        <h2 class="text-center mb-4">Modifier Matière</h2>
        <form action="/matiere/update/<?= $matiere['id']; ?>" method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Nom de la Matière</label>
                <input type="text" name="name" id="name" class="form-control" value="<?= esc($matiere['name']); ?>" required>
            </div>
            <button type="submit" class="btn btn-custom w-100">Modifier</button>
            <a href="/matiere" class="btn btn-secondary w-100 mt-2">Retour à la liste</a>
        </form>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
