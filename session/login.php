<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Form</title>
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-2"></div>
            <div class="col-8" >
                <h1 style="text-align: center">Login</h1>
                <form action="inc/checkLogin.php" method="post">
                    <div class="form-group">
                        <label class="form-label">Email</label>
                        <input class="form-control" type="email" name="email">
                        
                        
                    </div>
                    <br>
                    <div class="form-group">
                        <label class="form-label">Password</label>
                        <input class="form-control" type="password" name="password">
                        
                    </div>
                    <br>
                    <button class="btn btn-info">Save</button>
                </form>
            </div>
            <div class="col-2"></div>
        </div>
    </div>

<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>