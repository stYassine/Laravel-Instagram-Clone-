<nav class="upper-navbar">
    <div class="container">

      <div class="logged_in_buttons">
          <ul>
              <li><a href="#"><i class="fa fa-compass"></i></a></li>
              <li><a href="#" class="open_activities_dropdown"><i class="fa fa-heart-o"></i></a>
                  <div class="activities_popup">
                      
                      <!-- Empty Activities -->
                      <div class="empty_activities">
                          <i class="fa fa-heart-o"></i>
                          <p id="first_p">Activity On Your Posts</p>
                          <p id="second_p">When somone likes or comments on one of your posts, you'll see it here.</p>
                      </div>
                      <!-- END Empty Activities -->
                      
                  </div>
              </li>
              <li><a href="#"><i class="fa fa-user-o"></i></a></li>
          </ul>
      </div>
       
        <!-- logo side -->
        <div class="left-logo">
            <img src="{{ asset('frontend/images/logo.png') }}" alt="" class="brand-logo">
            <span class="logo-separator"></span>
            <h4>Instagram</h4>
        </div>

        <!-- Search -->
        <div class="search-form">
            <form action="">
                <span><i class="fa fa-search"></i></span>
                <input type="text" placeholder="Search">
            </form>
        </div>


        <!-- login & sign-up buttons -->
        <div class="right-buttons">
            <button id="login">Login In</button>
            <button id="sign-up">Sign Up</button>
        </div>

    </div>
</nav><!-- END Header Navbar -->