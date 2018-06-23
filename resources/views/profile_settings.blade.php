    <!-- Header -->
    @include('partials.header')
    <link rel="stylesheet" href="{{ asset('frontend/css/profile_settings.css') }}">
    
    <!-- Header Navbar
        ======================================= -->
    @include('partials.navbar')


    <!-- Posts
        ============================================ -->
    <main class="settings_wrapper">
        <div class="settings_wrapper_container">


            
            <!-- Left Side -->
            <div class="settings_left_side">
                <ul>
                    <li><a href="#" id="edit_profile_v">Edit Profile</a></li>
                    <li><a href="#" id="change_password_v">Change Password</a></li>
                </ul>
            </div>
            <!-- END Left Side -->

           
           <!-- Right Side  -->
           <div class="settings_right_side">
               
               <!-- Edit Profile
                   ======================================= -->
               <div class="edit_profile_view">
                   <div class="container">
                       
                       <!-- Header -->
                       <div class="view_header">
                           <div class="image_side">
                               <img src="http://via.placeholder.com/350x150" class="profile_image">
                           </div>
                           <div class="info_side">
                               <h4 class="name">{{ $user->username }}</h4>
                               <form action="" method="post" enctype="multipart/form-data">
                                  {{ csrf_field() }}
                                   <input type="file" name="new_photo">
                               </form>
                           </div>
                       </div>
                       <!-- END Header -->
                       
                       
                       <!-- Body -->
                       <div class="view_body">
                           
                           <form action="{{ route('profile.settings.edit') }}" method="post">
                               {{ csrf_field() }}
                               <div class="input-group">
                                   <label for="">Name</label>
                                   <input type="text" name="name" value="{{ $user->name }}">
                               </div>
                               
                               <div class="input-group">
                                   <label for="">Username</label>
                                   <input type="text" name="username" value="{{ $user->username }}">
                               </div>
                               
                               <div class="input-group">
                                   <label for="">Website</label>
                                   <input type="text" name="website" value="{{ $user->website }}">
                               </div>
                               
                               <div class="input-group">
                                   <label for="">Bio</label>
                                   <input type="text" name="bio" value="{{ $user->bio }}">
                               </div>
                               
                               <div class="input-group">
                                   <label for="">E-mail</label>
                                   <input type="email" name="email" value="{{ $user->email }}">
                               </div>
                               
                               <div class="input-group">
                                   <label for="">Gender</label>
                                   <select name="gender">
                                        <option value="male" {{ $user->gender == 'male' ? 'selected'  : '' }}>Male</option>
                                        <option value="female" {{ $user->gender == 'female' ? 'selected' : '' }}>Female</option>
                                        <option value="undefined">Undefined</option>
                                   </select>
                               </div>
                               
                               <div class="input-group">
                                   <label for=""></label>
                                   <button type="submit">Submit</button>
                               </div>
                               
                           </form>
                           
                       </div>
                       <!-- END Body -->
                       
                       
                   </div>
               </div>
               <!-- Edit Profile -->
               
               
               
               <!-- Change Password
                   ============================================= -->
               <div class="change_password_view" style="display:none;">
                   
                   <div class="view_body">
                       
                       
                       <form action="" method="post">
                               
                               <div class="input-group change_pass">
                                   <label for="">Old Password</label>
                                   <input type="password" name="old_password">
                               </div>
                               
                               <div class="input-group change_pass">
                                   <label for="">New Password</label>
                                   <input type="password" name="new_password">
                               </div>
                               
                               <div class="input-group change_pass">
                                   <label for="">Confirm Password</label>
                                   <input type="password" name="confirm_password">
                               </div>
                               
                               
                               <div class="input-group">
                                   <label for=""></label>
                                   <button type="submit">Submit</button>
                               </div>
                               
                           </form>
                       
                       
                   </div>
                   
               </div>
               
           </div>
           <!-- END Right Side  -->
            



        </div>
    </main>
    <!-- Posts -->




    <!-- Footer -->
    @include('partials.footer')
    <script>
        $(document).ready(function(){
            
            var edit_profile_button =$('#edit_profile_v');
            var change_password_button =$('#change_password_v');
            
            /* Show Edit Profile View */
            edit_profile_button.on('click', function(evt){
                evt.preventDefault();
                
                $('.change_password_view').css('display', 'none');
                $('.edit_profile_view').css('display', 'block');
                
            });
            
            /* Show Change Password View */
            change_password_button.on('click', function(evt){
                evt.preventDefault();
                
                $('.edit_profile_view').css('display', 'none');
                $('.change_password_view').css('display', 'block');
                
            });
            
            
        });
    </script>