<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container-fluid">
        <!-- Grey with black text -->
        <nav class="navbar navbar-expand-sm bg-light navbar-light">
        <ul class="navbar-nav">
            <li class="nav-item active">
            <a class="nav-link" href="./index.html">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="./database/index.php">Database</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="./form_practice.php">Form Practice</a>
            </li>
            <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
            </li>
        </ul>
        </nav>

        <div class="row">
            <div class="col-sm-6">
                <h2 class="text-center">Normal Post Form</h2>
                <form action="./index.php" method="post" class="col-sm-12">
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                    </div>
                    <div class="form-group form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="remember"> Remember me
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
            <div class="col-sm-6">
                <h2 class="text-center">Normal Get Form</h2>
                <form action="./index.php" method="get" class="col-sm-12">
                    <div class="form-group">
                        <label for="email">Number 1:</label>
                        <input type="text" class="form-control" id="n1" placeholder="Num 1" name="n1">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Number 2:</label>
                        <input type="text" class="form-control" id="n2" placeholder="Num 2" name="n2">
                    </div>
                    <button type="submit" class="btn btn-primary">Sum</button>
                </form>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-6">
                <?php
                    echo '<div class="card">
                    <div class="card-body">';
                    echo "Email: ".$_POST['email']."<br>";
                    echo "Pswd: ".$_POST['pswd'];

                    echo '</div>
                </div>';
                ?>
            </div>

            <div class="col-sm-6">
                <?php
                    $n1 = $_GET['n1'];
                    $n2 = $_GET['n2'];
                    echo '<div class="card">
                    <div class="card-body">';
                    echo "Num1: ".$_GET['n1']."<br>";
                    echo "Num2: ".$_GET['n2']."<br>";
                    echo "Sum: ".$n1." ".$n2;
                    echo '</div>
                </div>';
                ?>
            </div>
        </div>
    </div>
</body>
</html>