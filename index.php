<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" media="screen" title="no title">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">


    <title>Login</title>
    <style>
        body {
            background-color: silver;
            height: 500;
        }

        #card {
            background: #ffffff;
            border-radius: 0px;
            height: 410px;
            margin-left: 480px;
            margin-top: 100px;
            width: 450px;
        }

        #card-content {
            padding: 0px;
        }

        #card-title {
            padding-top: 8px;
            text-align: center;
        }

        #form {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            border-spacing: 10px;
            font-weight: bold;
            padding-top: 10px;
        }

        #submit-btn {
            background: #4CAF50;
            border: none;
            border-radius: 10px;
            color: white;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-weight: bold;
            letter-spacing: 1px;
            height: 42.3px;
            width: 415px;
            margin-left: 2px;
        }
    </style>
</head>

<body>

    <div id="card">
        <div id="card-content">
            <div id="card-title">
                <img src="Gambar/1.png" style="width: 120px;">
            </div>
        </div>

        <div id="form">
            
            <form class="col-12" action="" method="post" name="form">

                <div class="form-group">
                    <i class="fa fa-user-circle" aria-hidden="true"></i>
                    <label for="id">user</label>
                    <input type="text" class="form-control" name="user" placeholder="--masukan email anda disini--" required>
                </div>
                <div class="form-group">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                    <label for="name">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="--masukan password anda disini--" required>
                </div>
                <input id="submit-btn" type="submit" name="submit" value="LOGIN" />
            </form>
        </div>
    </div>

    <?php
    session_start();
        // Check if form is submitted
        if (isset($_POST['submit'])) {
            // Admin credentials
            $admin_user = "admin"; // Replace with actual admin username
            $admin_pass = "admin123"; // Replace with actual admin password

            // Get user input
            $user = $_POST['user'];
            $password = $_POST['password'];

            // Validate login
            if ($user === $admin_user && $password === $admin_pass) {
                // Successful login
                echo "<script>alert('Login successful. Welcome, Admin!'); window.location.href='website.php';</script>";
            } else {
                // Failed login
                echo "<script>alert('Login failed. Invalid username or password.');</script>";
            }
        }
    ?>

</body>

</html>
