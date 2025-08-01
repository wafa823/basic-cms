<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS - User Page</title>
    <style>
        /* Reset basic styles */
        body, h1, h2, p, textarea, input, button {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
        }

        /* General body styling */
        body {
            background-color: #f4f7fc;
            color: #333;
            line-height: 1.6;
            padding: 20px;
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
        }

        h1, h2 {
            color: #333;
        }

        /* Center the content */
        .container {
            max-width: 900px;
            width: 100%;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }

        /* Form styling */
        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 100%;
        }

        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #45a049;
        }

        /* Styling for individual projects */
        .project {
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            margin-bottom: 20px;
            background-color: #fafafa;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        }

        .project h2 {
            font-size: 20px;
            margin-bottom: 10px;
        }

        .project p {
            font-size: 16px;
            margin-bottom: 15px;
        }

        /* Styling for the comment form */
        .comment-form {
            margin-top: 20px;
        }

        .comment-form input,
        .comment-form textarea {
            margin-bottom: 10px;
        }

        /* Add some space between sections */
        section {
            margin-bottom: 40px;
        }

    </style>
</head>
<nav>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="..\admin\login.php">Login Admin</a></li>
        <li><a href="comment.php">List Comment Project</a></li>
    </ul>
</nav>
<body>

    <div class="container">
        <h1>Projects</h1>

        <!-- Loop through each project and display it -->
        <?php
        require_once '../includes/db.php';
        require_once '../includes/functions.php';

        $projects = fetchProjects($conn);
        while ($project = $projects->fetch_assoc()) { ?>
            <section class="project">
                <h2><?php echo $project['title']; ?></h2>
                <p><?php echo $project['description']; ?></p>

                <!-- Comment form -->
                <form action="comment.php" method="POST" class="comment-form">
                    <input type="hidden" name="project_id" value="<?php echo $project['id']; ?>">
                    <input type="text" name="user_name" placeholder="Your Name" required>
                    <textarea name="comment" placeholder="Your Comment" required></textarea>
                    <button type="submit">Submit Comment</button>
                </form>
            </section>
        <?php } ?>

        <h1>Uploaded Images</h1>
        <div class="uploaded-images">
            <?php
            $images = scandir(directory: 'upload'); // Get all files in the upload directory
            foreach ($images as $image) {
                if ($image !== '.' && $image !== '..') { // Exclude current and parent directory references
                    echo '<img src="upload/' . $image . '" alt="' . $image . '" style="max-width: 100%; height: auto; margin-bottom: 10px;">';
                }
            }
            ?>
        </div>

        <h1>Contact Us</h1>

        <!-- Contact form -->
        <form action="contact.php" method="POST">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <textarea name="message" placeholder="Your Message" required></textarea>
            <button type="submit">Send Message</button>
        </form>
    </div>

    <script>
        // Optional JavaScript for simple interactions

        // Example of form validation or submission interactions
        document.querySelector('form').addEventListener('submit', function (event) {
            var nameField = document.querySelector('input[name="user_name"]');
            if (!nameField.value) {
                alert('Please enter your name.');
                event.preventDefault();
            }
        });

    </script>
</body>
</html>
