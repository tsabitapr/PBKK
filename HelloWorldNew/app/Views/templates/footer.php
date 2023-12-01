<!DOCTYPE html>
<html>
<head>
    <title>Hello World CodeIgniter</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style> 
        /* Add CSS to style the footer with Poppins font and pastel colors */
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
        }

        footer {
            background-color: #FFAFCC; /* Soft pastel pink */
            color: #6D6875; /* Pastel purple text color for contrast */
            padding: 20px;
            position: absolute;
            bottom: 0;
            width: 100%;
            /* max-height: 15vh; Adjust this value to fit your design */
            overflow: hidden;
            box-sizing: border-box; /* Ensures padding is included in the width */
        }

        footer .container {
            text-align: left;
            /* max-height: 100%; */
        }

        footer h3 {
            font-size: 24px;
            margin-top: 10px;
            font-weight: 600; /* Poppins semi-bold */
        }

        footer p {
            font-size: 16px;
            margin: 5px;
        }

        /* Separate Contact Person and Follow Me sections */
        footer .row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            
        }

        /* Style Follow Me section on the right */
        footer .col-md-6:last-child {
            text-align: right;
        }

        footer a {
            text-decoration: none;
            color: #B5838D; /* A darker pastel pink for links */
            font-weight: bold;
            margin: 5px;
        }

        footer a:hover {
            text-decoration: underline;
            color: #A0A0A0; /* Grey for hover effect */
        }

    </style>
</head>
<body>
<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h3>Contact Person</h3>
        <p>Tsabita Putri Ramadhany - 5025211130</p>
        <p>Informatics Engineering</p>
        <p>Surabaya, Indonesia</p>
        <p>Email: 5025211130@student.its.ac.id</p>
        <p>Email: bitharamadhany@gmail.com</p>
      </div>

      <div class="col-md-6">
        <h3>Follow Me</h3>
            <a href="#">Linkedin</a>
            <a href="#">Twitter</a>
            <a href="#">Instagram</a>
      </div>
    </div>
  </div>
</footer>
</body>
</html>
