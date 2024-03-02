<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code Sharing Platform</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            background-color: #111;
            color: #fff;
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        h1 {
            text-align: center;
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
        #fileList {
            margin-top: 20px;
            background-color: #222;
            padding: 10px;
            border-radius: 5px;
        }
        .file {
            margin-bottom: 10px;
            padding: 10px;
            background-color: #333;
            border-radius: 5px;
        }
        .file h3 {
            margin-top: 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Code Sharing Platform</h1>
        <button onclick="redirectToCreate()">Create New</button>
        <button onclick="importFile()">Import File</button>
        <button onclick="resetSession()">Reset Session</button>
        <div id="fileList">
            <?php include 'display_shared_files.php'; ?>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
