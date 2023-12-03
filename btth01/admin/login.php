<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
    <h3 class="text-uppercase">Form đăng nhập</h3>
    <form action="process_login.php" method="post">
    Username: <input type="text" class="form-control" name="username">
    Email: <input type="email" class="form-control" name="email">
    Password: <input type="password" class="form-control" name="password">
    <input type="submit" class="btn btn-block btn-info">
    </form>
    </div>
</body>
</html>