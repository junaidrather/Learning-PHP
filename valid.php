<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <h2 class="text-center">HTML Form Validation</h2>
            <form id="idhtmlval" action="./valid.php" method="post" class="col-sm-12">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="name">
                    <input type="text" class="form-control" id="email1" placeholder="Enter email" name="password">
                </div>

                <input type="submit" value="Save" class="btn btn-primary" >
            </form>
            </div>
        </div>
    </div>
    <pre>
    <?php
        print_r($_POST);
        extract($_POST);
        echo $name;
        if(strlen($name)<8){
            echo "Dont Fool me its is less then 8 chars";
        }
    ?>
    </pre>

    <script type="text/javascript">
        /* 
            TODO: dfjhskdfs 
            ! sdkfjhsdkfhskdf

        */

        //alert("Hi");
        // var form = $("#idhtmlval")[0];
        
        //  console.log('====================================');
        //  console.log(email.val());
        //  console.log('====================================');
        
        // var email = $("#email");

        // function checkLength(text){
        //     console.log()
        //     alert(text);
        // }
        // preventDefault();
        // function chk1(){
        //     var e= $('#email');
            
        //     if(e.val().length>8){
        //         form.submit();
        //         alert("Good");
        //     }else{
        //         form.focus();
        //         alert("BYE");
        //     }
        // }
    </script>
</body>
</html>