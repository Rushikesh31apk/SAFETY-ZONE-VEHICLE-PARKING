<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About Us - Safety Zone Vehicle Parking System</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background: url('p.jpg') no-repeat center center fixed;
            background-size: cover;
            font-family: 'Arial', sans-serif;
            color: white;
            text-align: center;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            backdrop-filter: brightness(0.6);
        }
        .container {
            background: rgba(0, 0, 0, 0.5);
            margin: auto;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.7);
            transform: perspective(800px) rotateX(5deg) rotateY(5deg);
            transition: transform 0.5s;
            position: relative;
        }
        .container:hover {
            transform: perspective(800px) rotateX(0deg) rotateY(0deg) scale(1.05);
        }
        h1 {
            font-size: 40px;
            margin-bottom: 20px;
            text-shadow: 2px 2px 8px #000;
        }
        p {
            font-size: 18px;
            margin-bottom: 20px;
            line-height: 1.6;
        }
        .developers {
            margin-top: 20px;
            font-weight: bold;
            font-size: 20px;
        }
        /* Back button style */
        .back-button {
            position: absolute;
            top: 20px;
            left: 20px;
            padding: 10px 20px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            text-decoration: none;
        }
        .back-button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <div class="container">
        <button class="back-button" onclick="goBack()">← Back</button>

        <h1>Safety Zone Vehicle Parking System</h1>
        <p>
            Our project focuses on creating a safe, organized, and efficient vehicle parking solution.<br>
            It helps users find available parking spots easily and ensures the security of their vehicles.<br>
            Designed with user convenience and safety in mind!
        </p>
        <div class="developers">
            Developed by:<br>
            Rushikesh Narawade, Akash Birdadar, Vishal Khose
        </div>
    </div>

    <script>
        function goBack() {
            window.history.back();
        }
    </script>
</body>
</html>
