<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banking System</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/viewcustomer.css">
</head>
<body style="background-image : url(https://www.nttdata.com/sg/en/-/media/nttdataapac/ndsg/industries/banking-and-financial-services/industries-banking-header-2732x1536_2.jpg)">
    <div class="main-container">
        <div class="nav-content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.php">The Bank of Maharashtra</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                <li class="nav-item ">
                    <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="aboutus.php">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="contactus.php">Contact</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Service </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="transfermoney.php">Transfer Money</a>
                    <a class="dropdown-item" href="transactionhistory.php">Transaction History</a>
                    <a class="dropdown-item" href="userdetails.php">View Customer</a>
                    </div>
                </li>
                </ul>
            </div>
            </nav>
        </div>
        <?php 
            include 'dbconnect.php';
            $sql = "SELECT * FROM users";
            $result = mysqli_query($con,$sql);
        ?>
        <div class="container">
            <h1>Transfer Money</h1>
            <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered">
                        <thead>
                            <tr>
                            <th scope="col" class="text-center py-2">Id</th>
                            <th scope="col" class="text-center py-2">Name</th>
                            <th scope="col" class="text-center py-2">E-Mail</th>
                            <th scope="col" class="text-center py-2">Balance</th>
                            <th scope="col" class="text-center py-2">Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                            while($rows=mysqli_fetch_assoc($result)){
                        ?>
                        <tr>
                            <td class="py-2"><?php echo $rows['id'] ?></td>
                            <td class="py-2"><?php echo $rows['name']?></td>
                            <td class="py-2"><?php echo $rows['email']?></td>
                            <td class="py-2"><?php echo $rows['balance']?></td>
                            <td><a href="userdetails.php?id= <?php echo $rows['id'] ;?>"><button type="button" class="btn btn-success">Transact</button></a></td> 
                        </tr>
                        <?php
                            }
                        ?>
                        </tbody>
                    </table>
                    </div>
                </div>
            </div> 
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 

</body>
</html>