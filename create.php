<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New File</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            background-color: #111;
            color: #fff;
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        h1 {
            text-align: center;
        }
        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            background-color: #333;
            border: none;
            color: #fff;
        }
        button {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }
        button:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Create New File</h1>
        <form action="share_file.php" method="post">
            <input type="text" name="filename" placeholder="Enter filename" required>
            <textarea name="filedata" placeholder="Enter file data" rows="10" required></textarea>
            <button type="submit">Share</button>
        </form>
    </div>
</body>
</html>
