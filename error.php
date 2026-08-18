<?php
http_response_code(500);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>500 - Server Error</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f2f5;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
        .box {
            background: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            text-align: center;
            max-width: 450px;
        }
        .emoji {
            font-size: 80px;
            display: inline-block;
            margin-bottom: 10px;
        }
        h1 {
            font-size: 50px;
            color: #e74c3c;
            margin: 0;
        }
        h2 {
            color: #555;
            font-weight: normal;
            margin: 5px 0 15px 0;
        }
        p {
            color: #777;
            line-height: 1.6;
            margin-bottom: 25px;
        }
        a {
            display: inline-block;
            background: #3498db;
            color: #fff;
            padding: 10px 25px;
            text-decoration: none;
            border-radius: 5px;
        }
        a:hover {
            background: #2980b9;
        }
        .detail {
            color: #999;
            font-size: 13px;
            margin-top: 15px;
            font-style: italic;
        }
    </style>
</head>
<body>
    <div class="box">
        <span class="emoji">:(</span>
        <h1>Error 500</h1>
        <h2>Oops! Something went wrong</h2>
        <p>We're sorry, but we're having some trouble.<br>Please try again later.</p>
        <p class="detail">This seems more serious than usual.</p>
        <a href="index.php">Go to Homepage</a>
    </div>
</body>
</html>