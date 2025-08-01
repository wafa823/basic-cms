
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        /* Reset basic styles */
        body, h1, ul, li, a {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
        }

        /* General body styling */
        body {
            background-color: #eef2f7;
            color: #333;
            line-height: 1.6;
            padding: 0;
            margin: 0;
        }

        /* Navbar Styling */
        .navbar {
            background-color: #4CAF50;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: white;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            font-size: 18px;
            transition: background-color 0.3s ease;
            border-radius: 5px;
        }

        .navbar a:hover {
            background-color: #45a049;
        }

        /* Centered container */
        .container {
            max-width: 800px;
            width: 100%;
            background-color: #fff;
            border-radius: 12px;
            padding: 40px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
            text-align: center;
            font-size: 18px;
            margin: 20px auto;
        }

        h1 {
            font-size: 36px;
            color: #4CAF50;
            margin-bottom: 30px;
        }

        /* Styling for the list of dashboard links */
        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin: 20px 0;
        }

        a.button {
            text-decoration: none;
            font-size: 20px;
            color: #fff;
            background-color: #4CAF50;
            padding: 15px 30px;
            border-radius: 8px;
            display: inline-block;
            transition: background-color 0.3s ease, transform 0.3s ease;
            width: 100%;
            max-width: 300px;
        }

        /* Hover effects */
        a.button:hover {
            background-color: #45a049;
            transform: translateY(-3px); /* Slight lift effect */
        }

        a.button:active {
            transform: translateY(1px); /* Slight push down effect */
        }

        /* Responsive design for mobile */
        @media (max-width: 600px) {
            .container {
                padding: 25px;
                width: 90%;
            }

            h1 {
                font-size: 30px;
            }

            a.button {
                font-size: 18px;
                padding: 12px 24px;
            }
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <div class="navbar">
        <div class="logo">
            <h2>Admin</h2>
        </div>
        <div class="nav-links">
            <a href="index.php">Home</a>
            <a href="contact_messages.php">Kontak</a>
            <a href="upload.php">Upload</a>
            <a href="../public/index.php">Logout</a>
        </div>
    </div>

    <!-- Admin Dashboard Container -->
    <div class="container">
        <h1>Admin Dashboard</h1>
        <ul>
            <li><a href="manage_images.php" class="button">Manage Images</a></li>
            <li><a href="reply_comments.php" class="button">Reply to Comments</a></li>
            <li><a href="reply_contacts.php" class="button">Reply to Contacts</a></li>
        </ul>
    </div>

    <script>
        // Optional JS for additional interactivity (hover effects handled by CSS)
        document.querySelectorAll('a').forEach(link => {
            link.addEventListener('mouseenter', function () {
                this.style.transition = "background-color 0.3s ease, transform 0.3s ease";
            });
        });
    </script>

</body>
</html>
