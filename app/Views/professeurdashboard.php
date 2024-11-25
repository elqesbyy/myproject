<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professeur Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Professeur Dashboard</h1>

        <div class="mt-4">
            <h3>Professeur Details</h3>
            <p><strong>Name:</strong> <?= esc($professeur['name']); ?></p>
            <p><strong>Email:</strong> <?= esc($professeur['email']); ?></p>
        </div>

        <div class="mt-4">
            <h3>Assigned Matiere</h3>
            <p><strong>Matiere Name:</strong> <?= esc($matiere['name']); ?></p>
        </div>

        <div class="mt-4">
        <a href="<?= route_to('cour/create'); ?>"><i class="fas fa-book-open"></i> Ajouter Cours</a>

            <h3>Related Cours</h3>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Course Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($cours as $index => $cour): ?>
                        <tr>
                            <td><?= $index + 1; ?></td>
                            <td><?= esc($cour['name']); ?></td>
                            <td>
                            <a href="<?=  $cour['pdf_file']; ?>" target="_blank" class="btn btn-sm btn-info">Voir PDF</a>
                            <a href="/cour/edit/<?= $cour['id']; ?>" class="btn btn-sm btn-warning">Edit</a>
                                <a href="/cour/delete/<?= $cour['id']; ?>" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
