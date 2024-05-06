<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>

<?php
    $conn = mysqli_connect('localhost','root','','crud')

    if (isset($_POST['submit'])){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];

        "INSERT INTO user () VALUES ()";

    }

?>
    
    

    <div class="container">
        <div class="row">
            <div class="col-sm-3"></div>
        <div class="col-sm-6 pt-5 pb-5" >
            <h2>Registration Form</h2><br>
            <form action="#" method="POST" >
                <div class="border" class="border border-alert pt-2 pb-2">
                First Name: <br>
                <input type="text" name="firstname"><br><br>
                Last Name: <br>
                <input type="text" name="lastname"><br><br>
                Email: <br>
                <input type="email" name="email"><br><br>
                </div>
                <input type="submit" name="submit" value="submit" class="btn btn-success">
                
            </form>
            
        </div>
        <div class="col-sm-3"></div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>