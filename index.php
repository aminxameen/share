<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code Sharing Platform</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1, h2 {
            color: #333;
            text-align: center;
        }
        form {
            margin-bottom: 20px;
        }
        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            resize: vertical;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #45a049;
        }
        #fileList {
            background-color: #f2f2f2;
            padding: 20px;
            border-radius: 4px;
        }
        .file {
            margin-bottom: 10px;
            padding: 10px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .file h3 {
            margin-top: 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Code Sharing Platform</h1>

        <!-- Create New File Form -->
        <h2>Create New File</h2>
        <form id="createForm">
            <input type="text" name="filename" placeholder="Enter filename" required>
            <textarea name="filedata" placeholder="Enter file data" rows="10" required></textarea>
            <button type="submit">Share</button>
        </form>

        <!-- Shared Files -->
        <h2>Shared Files</h2>
        <div id="fileList">
            <?php include 'display_shared_files.php'; ?>
        </div>
    </div>

    <script>
        // AJAX to submit form data and update shared files list
        document.getElementById('createForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent form submission

            var formData = new FormData(this); // Get form data
            var xhr = new XMLHttpRequest(); // Create XMLHttpRequest object

            // Define AJAX parameters
            xhr.open('POST', 'share_file.php', true);
            xhr.onload = function() {
                if (xhr.status === 200) {
                    // On success, update shared files list
                    document.getElementById('fileList').innerHTML = xhr.responseText;
                    document.getElementById('createForm').reset(); // Clear form
                }
            };

            // Send form data via AJAX
            xhr.send(formData);
        });
    </script>
</body>
</html>
