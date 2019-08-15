<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>

<div class="row">
    <div class="col-md-12">
        <div class="row" id="login_window">
            <div class="col-md-4">

            </div>
            <div class="col-md-4">
                <div class="row text-center" id="login">
                    <h2>SIGN UP</h2><br><br>
                    <form action="includes/register_backend.php" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Choose a Username" name="username"><br>
                            <input type="password" class="form-control" placeholder="Choose a Password" name="password"><br><br>
                            <a href="index.php">Sign In</a><br/><br/>
                            <input type="submit" value="Sign Up" name="submit" class="form-control btn btn-success"><br>
                        </div>
                    </form>
                    <br><br>
                </div>
            </div>
            <div class="col-md-4">

            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="js/jquery-3.2.0.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>