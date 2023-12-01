<!DOCTYPE html>
<html>
<head>
    <title>First CI Project</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style> 
        /* Reset some default browser styles */
        body, h1, h2, h3, p, ul, li {
            margin: 0;
            padding: 0;
        }

        /* Set a background color for the body */
        body {
            background-color: #FAF3DD; /* A light pastel yellow */
            font-family: 'Poppins', sans-serif; /* Use Poppins as the font */
        }

        /* Style the header */
        header {
            background-color: #FFAFCC; /* A soft pastel pink */
            color: #6D6875; /* A pastel purple for contrast */
            padding: 20px;
            text-align: center;
            /* max-height: 15vh; Adjust this value to match the footer's height */
        }

        header title { 
            font-size: 24px;
            font-weight: 600; /* Poppins semi-bold */
            color: #6D6875; /* Pastel purple */
        }

        /* Style the navigation menu */
        nav a {
            text-decoration: none;
            color: #6D6875; /* Pastel purple to match the header text */
            font-weight: bold;
            margin: 10px;
        }

        /* Style links on hover */
        nav a:hover {
            text-decoration: underline;
            color: #B5838D; /* A darker pastel pink for hover effect */
        }

    </style>
</head>
<body>

<header>
    <h1>Hello World CodeIgniter</h1>
    <nav>
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Contact</a>
    </nav>
</header>
