<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier Étudiant</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 20px;
            max-width: 600px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center mb-4">Modifier Étudiant</h1>
        <form action="/etudiant/update/<?= esc($etudiant['id']); ?>" method="post" class="bg-white p-4 rounded shadow-sm">
            <div class="mb-3">
                <label for="name" class="form-label">Nom</label>
                <input type="text" name="name" id="name" value="<?= esc($etudiant['name']); ?>" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" value="<?= esc($etudiant['email']); ?>" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="id_filiere" class="form-label">Filière</label>
                <select name="id_filiere" id="id_filiere" class="form-select">
                    <?php foreach ($filieres as $filiere): ?>
                        <option value="<?= esc($filiere['id']); ?>" <?= $etudiant['id_filiere'] == $filiere['id'] ? 'selected' : ''; ?>>
                            <?= esc($filiere['name']); ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <button type="submit" class="btn btn-warning w-100">Modifier</button>
        </form>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
