<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Etudiant Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .course-card {
            border: 1px solid #ddd;
            border-radius: 10px;
            background: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            padding: 15px;
        }
        .course-card h5 {
            font-size: 1.25rem;
            font-weight: bold;
        }
        .course-card p {
            margin-bottom: 5px;
            color: #555;
        }
        .view-btn {
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            padding: 5px 10px;
            border-radius: 5px;
        }
        .view-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Etudiant Dashboard</h1>
        <div class="row">
            <?php foreach ($cours as $cour): ?>
                <div class="col-md-4">
                    <div class="course-card">
                        <h5><?= esc($cour['cour_name']); ?></h5>
                        <p><strong>Matière:</strong> <?= esc($cour['matiere_name']); ?></p>
                        <p><strong>Professeur:</strong> <?= esc($cour['professeur_name']); ?></p>
                        <a href="<?= esc($cour['pdf_file']); ?>" class="view-btn" target="_blank">Voir le PDF</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
