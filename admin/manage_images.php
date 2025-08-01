<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Images</title>
    <style>
        /* Reset basic styles */
        body, h1, form, input, button {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
        }

        /* General body styling */
        body {
            background-color: #f4f7fc;
            color: #333;
            line-height: 1.6;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Centered container */
        .container {
            background-color: #fff;
            border-radius: 12px;
            padding: 40px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px;
            text-align: center;
        }

        h1 {
            font-size: 32px;
            color: #4CAF50;
            margin-bottom: 20px;
        }

        /* Form styling */
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        input[type="file"] {
            margin-bottom: 20px;
            padding: 10px;
            font-size: 16px;
            border: 2px solid #ccc;
            border-radius: 8px;
            background-color: #f9f9f9;
            width: 100%;
            max-width: 400px;
        }

        button {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            padding: 15px 30px;
            font-size: 18px;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
            max-width: 400px;
            width: 100%;
        }

        button:hover {
            background-color: #45a049;
            transform: translateY(-3px);
        }

        button:active {
            transform: translateY(1px);
        }

        /* Responsive design */
        @media (max-width: 600px) {
            .container {
                padding: 20px;
                width: 90%;
            }

            h1 {
                font-size: 28px;
            }

            input[type="file"] {
                padding: 8px;
                font-size: 14px;
            }

            button {
                padding: 12px 25px;
                font-size: 16px;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Manage Images</h1>
        <form action="upload_image.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="image" required>
            <button type="submit"><a href="./public/index.php"></a>Upload</button>
        </form>
    </div>

    <script>
        // Optional JS for additional interactivity (hover effects handled by CSS)
        document.querySelectorAll('button').forEach(button => {
            button.addEventListener('mouseenter', function () {
                this.style.transition = "background-color 0.3s ease, transform 0.2s ease";
            });
        });
    </script>

</body>
</html>
