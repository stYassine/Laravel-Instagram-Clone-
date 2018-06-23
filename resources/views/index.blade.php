    <!-- Header -->
    @include('partials.header')
    
    <!-- Header Navbar
        ======================================= -->
    @include('partials.navbar')



    <!-- Profile Info
        ============================================== -->
    <section class="profile_info">
        <div class="container">


        <div class="image_side">
            <img src="{{ asset('frontend/images/profile_image.jpg') }}" alt="">
        </div>
        
        <div class="info_side">

            <!-- profile name & follow button -->
            <div class="upper">
                <h4 id="profile-name">{{ $user->name }}</h4>
                <span id="verified-sign"> <i class="fa fa-check"></i> </span>
                
                @if(!$auth_user_following_this_profile)
                <form action="{{ route('follow') }}" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="profile_id" value="{{ $user->id }}">
                    <input type="hidden" name="follower_id" value="{{ Auth::id() }}">                    
                    <button type="submit" id="follow-btn">Follow</button>
                </form>
                @else
                <form action="{{ route('unfollow') }}" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="profile_id" value="{{ $user->id }}">
                    <input type="hidden" name="follower_id" value="{{ Auth::id() }}">  
                    <button type="submit" id="unfollow-btn">UnFollow</button>
                </form>
                @endif
                <a href="{{ route('profile.settings') }}" id="edit_profile">Edit Profile</a>
                
            </div>
            <!-- END profile name & follow button -->
            
            <!-- posts & followers & following  -->
            <div class="numbers">
                <span id="posts"><strong>{{ $user->photos->count() }}</strong> Posts</span>
                <span id="followers"><strong>{{ $followers->count() }}</strong> Followers</span>
                <span id="following"><strong>{{ $following->count() }}</strong> Following</span>
            </div>

            <!-- END posts & followers & following  -->

            <!-- profile description -->
            <div class="description">
                <p>Android A grid of sweet treats and #AndroidAdventures. Mountain View, CA.</p>
            </div>
            <!-- END profile description -->

        </div>
        
        </div>
    </section>
    <!-- END Profile Info -->


    <!-- Posts
        ============================================ -->
    <main class="posts_wrapper">
        <div class="posts_wrapper_container">
            

           @if(isset($photos))
               @foreach($photos as $photo)
            <!-- single post -->
            <div class="single_post" data-id="{{ $photo->id }}">
                <img src="{{ asset($photo->path) }}" alt="" class="thumbnail_image">
                <div class="overlay_container">
                    <p> <span> <i class="fa fa-heart"></i> {{ $photo->likes->count() }}</span> <span> <i class="fa fa-comment"></i> {{ $photo->comments->count() }}</span> </p>
                </div>
            </div>
            <!-- END single post -->
                @endforeach
            @endif
            

        </div>
    </main>
    <!-- Posts -->




    <!-- Footer -->
    @include('partials.footer')
    <script>
        $(document).ready(function(){
            
            /* Open Photos Popup */
            $('.single_post').on('click', function(evt){
                
                var post_id =$(this).attr('data-id');
                
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                
                $.ajax({
                    url: '/showPopup',
                    method: 'POST',
                    data: {
                        id: post_id
                    },
                    success: function(response){
                        console.log(response);
                        $('.posts_wrapper_container').append(response);
                        
                        /// call close popup method to be able to close the popup
                        close_popup();
                        
                    },
                    error: function(err){
                        console.log(err);
                    }
                });
                    
            });
            /* END Photos Popup */
            
            
            
            function close_popup(){
                
                /// Close Photo Popup When Click on dark overlay
                $('.p_p_wrapper').on('click', function(evt){

                    if(evt.target.className == "p_p_wrapper"){

                        $('.p_p_wrapper').css('display', 'none');
                        $('.p_p_wrapper').remove();

                    }

                });
                /// END Close Photo Popup When Click on dark overlay
                
            }
            
            
            
        });
    </script>