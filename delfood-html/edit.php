<!DOCTYPE html>


<html lang="en">

    
<head>
    <title>Notes And Password</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .button {
            background-color: #4CAF50;
            /* Green */
            border: none;
            color: white;
            padding: 16px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
        }

        .button1 {
            background-color: yellowgreen;
            color: black;
            border: 2px solid grey;
            border-radius: 50%;

        }

        .button1:hover {
            background-color: #4CAF50;
            color: black;
            box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
        }
    </style>
</head>


<?php 
//connecting to the Database
$servername="Localhost";
$username="root";
$password="";
$database="turnip-the-beat";

//Create a COnnection
$conn=mysqli_connect($servername,$username,$password,$database);
// Die if connection was not successful
if(!$conn){
    die("Sorry we failed to connection:", mysqli_connect_error());
}
else{
    echo "Connection was Succesfully<br>";
}

// Sql query to be executed
$sql = "INSERT INTO `login` (`user`, `pass`) VALUES ('hushree', '123')";
$result= mysqli_query($conn,$sql);

if($result){
    echo "The rcord has been inserted successfully !<br>";
}
else{
    echo "The record was not inserted successfully because of this error------>". mysqli_error($conn);
}
?>

?>
<div class="container-fluid ">
   
    <div
        style="background-image:url(images/hotel.jpg); background-size:cover; background-position: center; background-repeat: no-repeat;height: 745px;">
        <div class="container ">
           
            <div class="row">
                <div class="card"
                    style="height: 460px; top: 200px; width: 400px;left: 400px;border-radius: 20px; background: black;border: 2px solid grey;">
                    <img src="images/yu.jpg" style=" border-radius:50%;height: 50px;width:50px;margin-left: 170px;">
                    <div class="card-body text-light" style="text-align: center; margin-top: 10px;"><strong
                            style="color:grey;">
                            <h2>Turnip The Beat</h2>
                        </strong><br>


                        <form class="d-flex">
                            <fieldset style="text-align: left;">
                                <strong>

                                    <h4 style="text-align: center;color: grey;">LOGIN</h4>
                                </strong>
                                <input class="form-control me-2" type="Enter Mobile No." placeholder="Enter Username"
                                    aria-label="Enter Username">
                                <fieldset style="text-align: left;">
                                   <br><br>

                                    <input class="form-control me-2" type="Enter Password" placeholder="Enter Password"
                                        aria-label="Enter Password"><br>
                                    <!--<button type="button-active " value="Login" class="btn btn-danger"
                                        style="border-radius: 25px; width: 350px;" ><a href="" style="font-size:20px; 
                                    color: white; text-decoration: none ">Login</a>
                                    </button><br><br>-->

   
                                    <button class="button button1" style="border-radius: 25px; width: 350px; "><a
                                            href="second page.html">Login</button>
                                    <br>
                                    <!--INSERT INTO `login` (`user`, `pass`) VALUES ('hushree', '123');-->



                                    <!--<a href="page15.html" title="Change Username">
                                        <p style="margin-top: 10px;">Forget Username
                                    </a>-->

                                    <a href="" title="Change Password" style="margin-top: 10px; ">Forget
                                        Password</p></a>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</html>