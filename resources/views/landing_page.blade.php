<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="./images/fav_icon.png" type="image/x-icon">
    <title>Insta Clone</title>
    <link rel="stylesheet" href="{{ asset('frontend/css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/landing_page.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    
    
    <!-- Header -->
    <header class="upper-header">

        <div class="left">
            <h4>Instagram</h4>
            <p>Find it for free on the Windows Store.</p>
        </div>

        <div class="right">
            <a href="#">GET</a>
        </div>

    </header>

    <!-- Main Section -->
    <main>

        <!-- Phones Section -->
        <div class="phones-section">
            <img src="{{ asset('frontend/images/38825c9d5aa2.png') }}" alt="">
        </div>

        <!-- Form Side -->
        <div class="form-section">

            <div class="form-wrapper">

                <h4 class="brand-name">Instagram</h4>
                <button id="login-with-fb"> <i class="fa fa-facebook-square"></i> Login With Facebook</button>

                <div class="separator">
                    <span class="line line-left"></span>
                    <span class="text">OR</span>   
                    <span class="line line-right"></span>
                </div>

                <form action="{{ route('register') }}" method="post">
                    {{ csrf_field() }}
                    <input type="email" placeholder="Mobile Number or Email" name="email">
                    <input type="text" placeholder="Full Name" name="fullname">
                    <input type="text" placeholder="Username" name="username">
                    <input type="password" placeholder="Password" name="password">
                    <button>Sign Up</button>

                </form>

                <p class="terms">By signing up, you agree to our <a href="">Terms & Privacy Policy</a>.</p>


            </div>

            <!-- have an account -->
            <div class="have-account-wrapper">
               <p>Have an account? <a href="#">Log in</a></p>
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