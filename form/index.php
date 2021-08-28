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
                <h1>title form</h1>
                <form action="" method="get">
                    <div class="form-group">
                        <label class="form-label">First Name</label>
                        <input class="form-control" type="text" name="first name">
                        <?php 
                            if( !isset($_GET['first_name'])  || (strlen($_GET['first_name']) <=0 ) ){
                                echo "<p style='color :red'>This filed is required</p>";
                            }
                        ?>
                        
                    </div>
                    <br>
                    <div class="form-group">
                        <label class="form-label">last Name</label>
                        <input class="form-control" type="text" name="last name">
                        
                    </div>
                    <br>
                    <button class="btn btn-info">Save</button>
                </form>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
    <?php
    // " strlen() " tol ta3 la chaine de caractere

    if(isset($_GET['first_name'] ) && isset($_GET['last_name'])){
        echo "<h1> your name is : ".$_GET['first_name']." ".$_GET['last_name']."</h1>"; 
    }
    ?>

<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>