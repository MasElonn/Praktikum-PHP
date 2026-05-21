<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/bootstrap.js"></script>
    <style>
        body {
            background-color: azure;
        }
    </style>
    <title>Login</title>
</head>
<body>

    <div class="container p-5 ">
        <div class="card card-body w-auto " >


            <h1 class="text-center fw-bolder text-primary ">Login</h1>
            <?php
                if(isset($_GET['error'])) {
                    if($_GET['error'] == '1'){
                        echo '<div class="alert alert-danger" role="alert">Username atau Password salah</div>';
                    }
                }
            ?>
            <div class="check-alert" id="alert"></div>
            <form action="loginMultiProces.php" method="post">
                <div>
                    <label for="username" class="form-label" style="font-size: small" >Username</label>
                    <input id="username" type="text" name="username" class="form-control" placeholder="Username">
    
                    <label for="password" class="form-label" style="font-size: small" >Password</label>
                    <input id="password" type="password" name="password" class="form-control" placeholder="Password">
                   
                </div>
                <button id="submit" class="btn btn-primary m-2" type="submit" name="login">Login</button>
            </form>
           
        </div>
    </div>
    <script>
        const alertPlaceholder = document.getElementById('alert')
        const appendAlert = (message, type) => {
            const wrapper = document.createElement('div')
            wrapper.innerHTML = [
                `<div class="alert alert-${type} alert-dismissible" role="alert">`,
                `   <div>${message}</div>`,
                '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
                '</div>'
            ].join('')

            alertPlaceholder.append(wrapper)
        }

    </script>
   

</body>
</html>