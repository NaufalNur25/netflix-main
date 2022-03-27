<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Netflix login – Watch TV Shows Online, Watch Movies Online</title>
    <meta name="description" content="Watch Netflix movies & TV shows online or stream right to your smart TV, game console, PC, Mac, mobile, tablet and more.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{'css/global.css'}}">
    <link rel="stylesheet" href="{{'css/landing-pages.css'}}">
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
                <img src="/images/fourflix-logo.png" height="50px" width="170px" alt="site logo main"></img>
            </a>
        </header>
        <section id="login-form-section">
            <!--Login form start-->

                <div class="loginContainer d-flex direction-column">
                    <h2 class="formtitle">
                        Register Account
                    </h2>
                    <form action="{{ route('register') }}" id="loginForm" class="d-flex direction-column" method="post" name="loginForm">
                        @csrf
                        <input type="text" name="name" id="email" class="email" placeholder="Name" :value="old('name')" required autofocus/><br>

                        <input type="text" name="email" id="email" class="email" placeholder="Email"  :value="old('name')"  required autofocus/>

                        <input type="password" name="password" id="password" placeholder="Password" required autocomplete="new-password"/>

                        <input type="password" name="password_confirmation" id="password" placeholder="Password" required/>

                        <button type="submit" class="button submitButton" id="signInButton">
                            Register
                        </button>

                      <!--  <div class="rememberMe">
                            <input type="checkbox" name="rememberMe" id="rememberMe" class="rememberMe">
                            <label for="rememberMe"><span class="login-remember-me-label-text">Remember me</span></label>
                        </div>-->

                        <p class="signUpText para">
                            Have an account? <span class="signUp"><a href="login">Sign In</a></span>
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
