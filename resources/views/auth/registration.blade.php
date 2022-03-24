<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link href="css/authStyle.css" rel="stylesheet">
</head>
<body>
    <section  id="myDIV" class="w3l-mockup-form">
        <!-- /form -->
        <div class="workinghny-form-grid">
            <div class="main-mockup">
                <div class="w3l_form align-self">
                    <img src="/images/background.png" class="image1" alt="">
                </div>
                <div class="content-wthree">
                    <div class="testing">
                        <img src="/images/mcc.jpg" class="image2" alt="">
                    </div><br><br><br><br><br><br>
                    <h2>Sign Up</h2>
                    <p>Create your account now</p>
                
                    <form action="/register-user" method="POST">
                        @if(Session::has('success'))
                        <div class="alert alert-success">{{ Session::get('success') }}</div>
                        @endif
                        <div></div>
                        @if(Session::has('fail'))
                        <div class="alert alert-danger">{{ Session::get('fail') }}</div>
                         @endif 
                         {{-- @if(session()->has('success'))
                             <div>
                                 <p>{{ seesion('success') }}</p>
                             </div>
                         @endif --}}

                        @csrf
                        
                        <label for="name" class="">First Name</label>
                        <input type="text" class="name form-control" id="name" placeholder="Username"  name="name" value="{{ old('name') }}" required>
                        {{-- <span class="text-danger">@error('name'){{ $message }} @enderror</span> --}}

                        <label for="email">Email</label>
                        <input type="email" class="email form-control" id="email" placeholder="Email" name="email"  value="{{ old('email') }}" required>
                        {{-- <span class="text-danger">@error('email'){{ $message }} @enderror</span> --}}

                        <label for="password">Password</label>
                        <input type="password" class="Password password form-control" id="password" placeholder="Password"  value="{{ old('email') }}" name="password" required>
                        {{-- <span class="text-danger">@error('Password'){{ $message }} @enderror</span> --}}

                        {{-- <label for="repassword">Confirm Password</label>
                        <input type="password" class="Confirm-password form-control" placeholder="Confirm-password" name="Confirm-password" required> --}}
                        {{-- <span class="text-danger">@error('Confirm-password'){{ $message }} @enderror</span> --}}
                        
                        <button name="submit" class="btn" type="submit">Sign Up</button>
                    </form>
                    <div class="social-icons">
                        <p>or sign up with other accounts?</p>
                        <p>Already have an Account? <a  href="login">Sign In. |</a></p>
                    </div>
                </div>
            </div>
        </div>
    
</section>
</body>
</html>