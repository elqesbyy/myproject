<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier le Cours</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .form-container {
            max-width: 600px;
            margin: 30px auto;
            padding: 30px;
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .form-header {
            text-align: center;
            margin-bottom: 20px;
        }
        .btn-submit {
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h2 class="form-header">Modifier le Cours</h2>

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

            <!-- Form to edit a course -->
            <form action="/cour/update/<?= esc($cour['id']); ?>" method="POST" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="mb-3">
                    <label for="name" class="form-label">Nom du Cours</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?= esc($cour['name']); ?>" required>
                </div>

                <div class="mb-3">
                    <label for="matiere_id" class="form-label">Matière</label>
                    <select class="form-select" id="matiere_id" name="matiere_id" required>
                        <option value="" disabled>Sélectionner une Matière</option>
                        <?php foreach ($matieres as $matiere): ?>
                            <option value="<?= esc($matiere['id']); ?>" <?= ($matiere['id'] == $cour['matiere_id']) ? 'selected' : ''; ?>>
                                <?= esc($matiere['name']); ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="professeur_id" class="form-label">Professeur</label>
                    <select class="form-select" id="professeur_id" name="professeur_id" required>
                        <option value="" disabled>Sélectionner un Professeur</option>
                        <?php foreach ($professeurs as $professeur): ?>
                            <option value="<?= esc($professeur['id']); ?>" <?= ($professeur['id'] == $cour['professeur_id']) ? 'selected' : ''; ?>>
                                <?= esc($professeur['name']); ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="pdf_file" class="form-label">Télécharger un PDF (Optionnel)</label>
                    <input type="file" class="form-control" id="pdf_file" name="pdf_file">
                    <?php if ($cour['pdf_file']): ?>
                        <div class="mt-2">
                            <strong>PDF actuel :</strong> 
                            <a href="<?= base_url('uploads/' . esc($cour['pdf_file'])); ?>" target="_blank">Télécharger</a>
                        </div>
                    <?php endif; ?>
                </div>

                <button type="submit" class="btn btn-primary btn-submit">Mettre à jour le Cours</button>
            </form>

        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
