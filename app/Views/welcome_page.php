<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to School Platform</title>
    <style>
        /* Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        /* Body */
        body {
            background: linear-gradient(to right, #6a11cb, #2575fc);
            color: #fff;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-between;
            min-height: 100vh;
        }

        /* Header */
        header {
            width: 100%;
            padding: 1rem 2rem;
            background: rgba(0, 0, 0, 0.6);
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
        }

        header h1 {
            font-size: 1.8rem;
        }

        header nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 1rem;
            font-size: 1rem;
        }

        header nav a:hover {
            text-decoration: underline;
        }

        /* Hero Section */
        .hero {
            text-align: center;
            margin: 3rem auto;
            padding: 2rem;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
        }

        .hero h2 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        .hero p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            line-height: 1.5;
        }

        .hero button {
            padding: 12px 25px;
            font-size: 1rem;
            color: #fff;
            background: #2575fc;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s ease, transform 0.3s ease;
        }

        .hero button:hover {
            background: #1e62d1;
            transform: scale(1.05);
        }

        /* Footer */
        footer {
            width: 100%;
            text-align: center;
            padding: 1rem;
            background: rgba(0, 0, 0, 0.7);
            box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.5);
        }

        footer p {
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <h1>School Platform</h1>
        <nav>
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Contact</a>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <h2>Welcome to School Platform</h2>
        <p>Your trusted partner in managing and accessing school resources with ease. Join us today to streamline your academic journey.</p>
        <a href="<?= route_to('login'); ?>"><i class="fas fa-user-plus"></i> login</a>
        </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 School Platform. All Rights Reserved.</p>
    </footer>
</body>
</html>
