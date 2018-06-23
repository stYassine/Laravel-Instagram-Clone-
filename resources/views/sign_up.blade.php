<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="./images/fav_icon.png" type="image/x-icon">
    <title>Sign In</title>
    <link rel="stylesheet" href="{{ asset('frontend/css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/sign_in.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    
    
    

    <!-- Main Section -->
    <main>

        <!-- Form Side -->
        <div class="form-section">

            <div class="form-wrapper">

                <h4 class="brand-name">
                    <img src="{{ asset('frontend/images/Instagram_logo_text.png') }}" alt="">
                </h4>
                <button id="login-with-fb"> <i class="fa fa-facebook-square"></i> Login With Facebook</button>

                <div class="separator">
                    <span class="line line-left"></span>
                    <span class="text">OR</span>   
                    <span class="line line-right"></span>
                </div>

                <form action="">

                    <input type="text" placeholder="Mobile Number or Email">
                    <input type="text" placeholder="Full Name">
                    <input type="text" placeholder="Username">
                    <input type="text" placeholder="Password">
                    <button>Sign Up</button>

                </form>

                <p class="terms">By signing up, you agree to our <a href="">Terms & Privacy Policy</a>.</p>


            </div>

            <!-- have an account -->
            <div class="have-account-wrapper">
               <p>Have an account? <a href="{{ route('login') }}">Log in</a></p>
            </div><!-- END have an account -->

            <!-- Get The App -->
            <div class="get-the-app-wrapper">

                <p>Get The App.</p>

                <div class="images-wrapper">
                    <img src="{{ asset('frontend/images/appple_store.png') }}" alt="">
                    <img src="{{ asset('frontend/images/google_play.png') }}" alt="">
                    <img src="{{ asset('frontend/images/windows_app.png') }}" alt="">
                </div>

            </div>
            <!-- END Get The App -->

        </div>


    </main>


    <!-- Footer -->
    <footer>

        <ul class="sites-links">
            <li><a href="#">ABOUT US</a></li>
            <li><a href="#">SUPPORT</a></li>
            <li><a href="#">BLOG</a></li>
            <li><a href="#">PRESS</a></li>
            <li><a href="#">API</a></li>
            <li><a href="#">JOBS</a></li>
            <li><a href="#">PRIVACY</a></li>
            <li><a href="#">TERMS</a></li>
            <li><a href="#">DIRECTORY</a></li>
            <li><a href="#">PROFILES</a></li>
            <li><a href="#">HASHTAGS</a></li>
            <li><a href="#">LANGUAGE</a></li>
        </ul>

        <p class="instagram-brand">© 2018 INSTAGRAM</p>

    </footer>
    <!-- END Footer -->



    <script></script>
</body>
</html>