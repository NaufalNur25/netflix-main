<!DOCTYPE html>
<html class="no-js">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Netflix login – Watch TV Shows Online, Watch Movies Online</title>
    <meta name="description" content="Watch Netflix movies & TV shows online or stream right to your smart TV, game console, PC, Mac, mobile, tablet and more.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/global.css')}}">
    <link rel="stylesheet" href="{{ asset('css/landing-pages.css') }}">
</head>

<body>
    <style>
        body::before{
            background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.8) 0%, rgba(0, 0, 0, 0.2) 60%, rgba(0, 0, 0, 0.9) 100%),url('/images/background.jpg');

        }
    </style>

    <main style="padding: 0px 10px;">
        <header class="d-flex space-between middle-align">
           <a href="/">
            <img src="/images/fourflix-logo.png" height="50px" width="170px" alt="site logo main" style="margin: auto;"></img>
        </a>
        </header>
        <section id="login-form-section">
            <!--Login form start-->

                <div class="loginContainer d-flex direction-column">
                    <h2 class="formtitle">
                        Sign In
                    </h2>
                    <form action="{{ route('login') }}" id="loginForm" class="d-flex direction-column" method="post" name="loginForm">
                        @csrf
                        <input type="text" name="email" id="email" class="email" placeholder="Email" onchange="validateEmail()" :value="old('email')" required/>
                        <p id="errorEmail">Please enter a valid email address or phone number.</p>

                        <input type="password" name="password" id="password" placeholder="Password" required/>
                        <p id="errorPassword">Your password must contain between 4 and 60 characters.</p>

                        <button type="submit" class="button submitButton" id="signInButton" disabled="disabled">
                            Sign In
                        </button>
                        <p class="signUpText para">
                            New to Fourflix? <span class="signUp"><a href="register">Sign up Now</a></span>
                        </p>
                    </form>
                </div>

            <!--Login form End-->
        </section>
    </main>

    <script>
        //function to validate email address on input text change and enable submit button if it's true
        document.getElementById('errorEmail').style.display = "none";
        document.getElementById('errorPassword').style.display = "none";
        function validateEmail() {
            let email = document.getElementById('email').value;
            let re = /\S+@\S+\.\S+/;
            let result = re.test(email);
            if (result) {
                document.getElementById('errorEmail').style.display = "none";
                document.getElementById('signInButton').disabled = false;
               // document.getElementById("email-form").submit();
            }
            else {
                document.getElementById('errorEmail').style.display = "block";
                document.getElementById('signInButton').disabled = true;
            }
        }
    </script>
</body>

</html>
