<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professeur Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f6f9;
        }
        .dashboard {
            max-width: 900px;
            margin: 30px auto;
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .dashboard h1 {
            font-size: 2rem;
            color: #333;
        }
        .dashboard .section-header {
            font-size: 1.25rem;
            color: #495057;
            margin-bottom: 10px;
        }
        .table thead {
            background-color: #343a40;
            color: #ffffff;
        }
        .btn {
            margin-right: 5px;
        }
        .add-course-btn {
            display: inline-block;
            margin-bottom: 15px;
            padding: 10px 15px;
            background: #007bff;
            color: #ffffff;
            text-decoration: none;
            border-radius: 4px;
            font-weight: bold;
        }
        .add-course-btn:hover {
            background: #0056b3;
            color: #ffffff;
        }
    </style>
</head>
<body>
    <div class="dashboard">
        <h1 class="text-center">Professeur Dashboard</h1>

        <!-- Professeur Details -->
        <div class="mt-4">
            <div class="section-header">Professeur Details</div>
            <p><strong>Name:</strong> <?= esc($professeur['name']); ?></p>
            <p><strong>Email:</strong> <?= esc($professeur['email']); ?></p>
        </div>

        <!-- Assigned Matiere -->
        <div class="mt-4">
            <div class="section-header">Assigned Matiere</div>
            <p><strong>Matiere Name:</strong> <?= esc($matiere['name']); ?></p>
        </div>

        <!-- Related Cours -->
        <div class="mt-4">
            <a href="<?= route_to('cour/create'); ?>" class="add-course-btn">+ Add New Cours</a>

            <div class="section-header">Related Cours</div>
            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Course Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($cours as $index => $cour): ?>
                        <tr>
                            <td><?= $index + 1; ?></td>
                            <td><?= esc($cour['name']); ?></td>
                            <td>
                                <a href="<?=  $cour['pdf_file'];?>" target="_blank" class="btn btn-info btn-sm">View PDF</a>
                                <a href="/cour/edit/<?= $cour['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="/cour/delete/<?= $cour['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
