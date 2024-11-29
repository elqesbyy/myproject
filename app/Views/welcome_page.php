<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Roboto', sans-serif;
            height: 100vh;
            background: linear-gradient(to bottom, #4e73df, #1d3557);
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
            overflow: hidden;
            animation: fadeIn 2s ease-in-out;
        }

        h1 {
            font-size: 3rem;
            font-weight: bold;
            text-align: center;
            animation: slideIn 1.5s ease-out;
        }

        .welcome-container {
            text-align: center;
            animation: fadeInUp 2s ease-in-out;
        }

        .btn-login {
            background-color: #007bff;
            color: #fff;
            padding: 15px 30px;
            font-size: 1.2rem;
            text-decoration: none;
            border-radius: 50px;
            display: inline-block;
            margin-top: 20px;
            cursor: pointer;
            transition: transform 0.3s ease, background-color 0.3s ease;
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
        }

        .btn-login:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }

        .btn-login:active {
            background-color: #00408c;
        }

        /* Animations */
        @keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }

        @keyframes slideIn {
            0% { transform: translateY(-50px); opacity: 0; }
            100% { transform: translateY(0); opacity: 1; }
        }

        @keyframes fadeInUp {
            0% { transform: translateY(50px); opacity: 0; }
            100% { transform: translateY(0); opacity: 1; }
        }
    </style>
</head>
<body>

    <!-- Welcome Message -->
    <div class="welcome-container">
        <h1>Bienvenue sur La Plateforme E-Cours</h1>
        <p>Nous sommes ravis de vous voir ici !</p>
        <a href="<?= route_to('login'); ?>" class="btn-login">Se Connecter</a>
    </div>

    <script>
        // Animation on page load (JavaScript can be used for extra interactivity if needed)
        window.onload = function() {
            const welcomeMessage = document.querySelector('.welcome-container');
            welcomeMessage.style.animation = 'fadeInUp 2s ease-in-out';
        };
    </script>

</body>
</html>
