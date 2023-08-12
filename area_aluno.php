<!DOCTYPE html>
<html>

<head>
    <title>Colegio Jhenis</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">



</head>

<body>


    <?php
     
     include "menu.php"
    
    ?>
    <div class="container-fluid">
        <div class="dropdown-menu">
            <form class="px-4 py-3">
                <div class="form-group">
                    <label for="exampleDropdownFormEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleDropdownFormEmail1"
                        placeholder="email@example.com">
                </div>
                <div class="form-group">
                    <label for="exampleDropdownFormPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleDropdownFormPassword1"
                        placeholder="Password">
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="dropdownCheck">
                    <label class="form-check-label" for="dropdownCheck">
                        Remember me
                    </label>
                </div>
                <button type="submit" class="btn btn-primary">Sign in</button>
            </form>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">New around here? Sign up</a>
            <a class="dropdown-item" href="#">Forgot password?</a>
        </div>
    </div>






    <?php
     
     include "rodape.php"
    
    ?>
    <script src="js/bootstrap.min.js">
    </script>
</body>

</html>