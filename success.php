<?php
// thankyou.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Thank You - Infinite Vision</title>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      background-color: #f4f6f8;
      color: #333;
      text-align: center;
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
      padding: 20px;
    }

    .thankyou-container {
      background: white;
      padding: 40px 20px;
      border-radius: 10px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
      max-width: 500px;
      width: 100%;
      animation: fadeIn 0.8s ease-in-out;
    }

    .thankyou-container h1 {
      font-size: 2em;
      color: #1e88e5;
      margin-bottom: 15px;
    }

    .thankyou-container p {
      font-size: 1.1em;
      margin-bottom: 25px;
    }

    .thankyou-container a {
      display: inline-block;
      background-color: #1e88e5;
      color: white;
      text-decoration: none;
      padding: 12px 24px;
      border-radius: 6px;
      transition: background 0.3s ease;
    }

    .thankyou-container a:hover {
      background-color: #1565c0;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
<body>

  <div class="thankyou-container">
    <h1>✅ Thank You!</h1>
    <p>Your strategy call booking has been received.<br>  
       Our team will contact you shortly to confirm the details.</p>
    <a href="index.php">⬅ Back to Home</a>
  </div>

</body>
</html>
