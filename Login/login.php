<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login And Registeration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-6 left">
                <h2> Login </h2>
                <form action="check.php" method="POST" >
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="uname" class="form-control" placeholder="User Name" required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                </div>
                <button type="submit" class="btn btn-primary"> Login </button>
                </form>
            </div>
            <div class="col-md-6 right">
                <h2> Register </h2>
                <form action="register.php" method="POST">
                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" name="uname" class="form-control" placeholder="Username" required>
                </div>
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Name" required>
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                </div>
                <div class="form-group">
                    <label for="">Phone Number</label>
                    <input type="text" name="phnum" class="form-control" placeholder="Phone Number" required>
                </div>
                <button type="submit" class="btn btn-primary"> Register </button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>