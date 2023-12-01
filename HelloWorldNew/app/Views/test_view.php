<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title; ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f0f0f0;
            padding: 20px;
            margin: 0;
        }
        .isi {
            background-color: #FAF3DD; /* A pastel yellow shade */
            padding: 20px;
            border-radius: 8px; /* Added rounded corners for style */
        }
        h1 {
            color: #6D6875; /* A pastel purple shade */
            font-size: 24px;
            font-weight: 600; /* Poppins semi-bold */
            padding-bottom: 20px;
        }
        p {
            color: #B5838D; /* A pastel pink shade */
            font-size: 16px;
            line-height: 1.5;
            text-align: justify;
            margin: 0;
        }
    </style>
</head>
<body>
    <div class="isi">
        <h1><?=$title; ?></h1>
        <p><?=$content; ?></p>
    </div>
</body>
</html>
