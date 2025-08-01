<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman User</title>
    <style>
        /* Global Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4; /* Latar belakang halaman */
        }

        /* Navbar Styles */
        .navbar {
            background-color: #333; /* Warna background navbar */
            overflow: hidden;
            padding: 10px 20px;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            padding: 14px 20px;
            display: inline-block;
            font-size: 16px;
        }

        .navbar a:hover {
            background-color: #ddd; /* Warna latar saat hover */
            color: black;
        }

        /* Container for content */
        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
        }

        /* Project Section */
        .project {
            margin-bottom: 20px;
            border: 1px solid #ccc;
            padding: 10px;
            border-radius: 5px;
            background-color: #fff; /* Memberikan latar belakang putih pada setiap project */
        }

        .project img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
        }

        /* Form Styles (Comment and Contact) */
        .form-comment, .form-contact {
            margin-top: 15px;
            padding: 15px;
            border: 1px solid #ccc;
            background-color: #f9f9f9;
            border-radius: 5px;
        }

        .form-contact {
            max-width: 600px;
            margin: 20px auto;
        }

        /* Input Fields and Textarea */
        input, textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 14px;
        }

        /* Button Styles */
        button {
            background-color: #333; /* Warna tombol */
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #555; /* Warna tombol saat hover */
        }

        /* Heading Styles */
        h2 {
            text-align: center;
            color: #333;
            font-size: 24px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <div class="navbar">
        <a href="./index.php">Home</a>
        <a href="#contact">Contact</a>
    </div>

    <!-- Main Container -->
    <div class="container">
        <!-- Project List (Optional) -->
        <div class="project">
            <h2>Project 1</h2>
            <img src="https://via.placeholder.com/600x300" alt="Project Image">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non urna nec metus consequat tincidunt.</p>
        </div>

        <!-- Contact Form -->
        <div id="contact">
            <h2>Hubungi Kami</h2>
            <form class="form-contact" action="send_contact.php" method="POST">
                <input type="text" name="name" placeholder="Nama Anda" required>
                <input type="email" name="email" placeholder="Email Anda" required>
                <textarea name="message" placeholder="Pesan Anda" required></textarea>
                <button type="submit">Kirim</button> 
            </form> 
        </div> 
    </div>

</body>
</html>
