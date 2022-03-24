<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="css/authStyle.css" rel="stylesheet">
</head>
<body>
    <section class="w3l-mockup-form">
        <!-- /form -->
        <div class="workinghny-form-grid">
            <div class="main-mockup">
                <div class="w3l_form align-self">
                    <img src="/images/background.png" alt="">
                </div>
                <div class="content-wthree">
                <div class="testing">
                        <img src="/images/mcc.jpg" class="image2" alt="">
                    </div><br><br><br><br><br><br><br>
                    <h2>Sign In</h2>

                    <form action="/login-user" method="POST">
                        @if(Session::has('success'))
                        <div class="alert alert-success">{{ Session::get('success') }}</div>
                        @endif
                        <div></div>
                        @if(Session::has('fail'))
                        <div class="alert alert-danger">{{ Session::get('fail') }}</div>
                         @endif 
                        @csrf
                        <label for="email">Email</label><br>
                        <input type="email" class="email form-control" name="email" required>
                        <label for="password">Password</label><br>
                        <input type="password" class="password form-control" name="password" style="margin-bottom: 2px;" required>
                        <p><a href="forgot-password.php" style="margin-bottom: 15px; display: block; text-align: right;">Forgot Password</a></p>
                        <button name="submit" class="btn" type="submit">Login</button>
                    </form>
                    <div class="social-icons">
                        <p>Do not have an account?<a  href="registration"> Register. |</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- //form -->
</section>
</body>
</html>