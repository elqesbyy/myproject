<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cours List</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa; /* Light gray background */
        }
        .cours-list {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background: #ffffff; /* White background for the card */
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Subtle shadow */
        }
        .cours-item {
            border-bottom: 1px solid #ddd;
            padding: 10px 0;
        }
        .cours-item:last-child {
            border-bottom: none;
        }
        .cours-name {
            font-weight: bold;
            color: #495057;
        }
        .cours-pdf {
            color: #007bff;
            text-decoration: none;
        }
        .cours-pdf:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="cours-list">
            <h1 class="text-center mb-4">Cours List</h1>

            <!-- Success or Error Messages -->
            <?php if (session()->getFlashdata('success')): ?>
                <div class="alert alert-success">
                    <?= session()->getFlashdata('success'); ?>
                </div>
            <?php endif; ?>
            <?php if (session()->getFlashdata('error')): ?>
                <div class="alert alert-danger">
                    <?= session()->getFlashdata('error'); ?>
                </div>
            <?php endif; ?>

            <ul class="list-unstyled">
                <?php foreach ($cours as $course): ?>
                    <li class="cours-item">
                        <span class="cours-name"><?= esc($course['name']); ?></span><br>
                        <strong>Matière:</strong> <?= esc($course['matiere_name']); ?><br>

                        <!-- PDF file link (if exists) -->
                        <?php if ($course['pdf_file']): ?>
                            <a href="<?= base_url('uploads/' . esc($course['pdf_file'])); ?>" class="cours-pdf" target="_blank">Download PDF</a>
                        <?php else: ?>
                            <span>No PDF available</span>
                        <?php endif; ?>
                        
                        <!-- Edit and Delete buttons -->
                        <div class="mt-2">
                        <a href="/cour/edit/<?= $course['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="/cour/delete/<?= $course['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?');">Delete</a>

                            
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
