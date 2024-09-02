<html>
<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
    <h1>Login for Jokes</h1>
    <?php
    include "db_connect.php";
    ?>
    <form class="form-horizontal" action="process_login.php" method="post">
        <fieldset>
            <legend>Please login</legend>
            <div class="form-group">
                <label class="col-md-4 control-label" for="username">Username</label>
                <div class="col-md-5">
                    <input id="username" type="text" name="username" placeholder="your name" class="form-control input-md" required="">
                    <p class="help-block">Enter your username</p>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="password">Password</label>
                <div class="col-md-5">
                    <input id="password" type="password" name="password" placeholder="password" class="form-control input-md" required="">
                    <p class="help-block">Enter your password</p>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="confirm_password">Confirm Password</label>
                <div class="col-md-5">
                    <input id="confirm_password" type="password" name="confirm_password" placeholder="confirm password" class="form-control input-md" required="">
                    <p class="help-block">Re-enter your password</p>
                </div>
            </div>
            <div class="form-group">
                <label for="submit" class="col-md-4 control-label"></label>
                <div class="col-md-4">
                    <button id="submit" name="submit" class="btn btn-primary">Login</button>
                </div>
            </div>
        </fieldset>
    </form>

    <?php
    $mysqli->close();
    ?>
</body>
</html>
