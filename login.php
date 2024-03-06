<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Login</title>
  <style>
    .label {
      display: flex !important;
      padding: 7px;
      background-color: #F0FFFF;
      border: 3px;
      border-radius: 2px;
      border-color: black !important;
      position: relative;
      justify-content: center;
      align-items: center;
    }

    h1 {
      margin-top: 120px !important;
      text-align: center;
      margin-bottom: 40px !important;
      color: black !important;
    }

    .btn {
      margin-left: 50px;
      margin-top: 20px;
    }

    .container {
      background-color: white;
      display: flex;
      flex-direction: column;
      align-items: center !important;
      justify-content: center !important;

    }
  </style>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body class="container">
  <h1>Login</h1>
  <form action="proses_login.php" method="post">
    <table>
      <tr>
        <td></td>
        <td center><input type="text" name="username" class="label" placeholder="Username"></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="password" name="password" class="label" placeholder="Password"></td>
      </tr>

      <tr>
        <td></td>
        <td><input type="submit" value="L o g i n" class="btn btn-primary"></td>
      </tr>
      <tr>
        <td></td>
        <td><a href="register.php" class="btn btn-outline-secondary">Register</a>
      </tr>
    </table>
  </form>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>