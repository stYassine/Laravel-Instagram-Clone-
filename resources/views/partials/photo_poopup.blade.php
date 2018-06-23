<div class="p_p_wrapper">
    <div class="p_p_wrapper_container">
        
        <!-- Photo popup Sides -->
        <div class="p_p_sides">
            
            <!-- Image Side -->
            <div class="image_side">
                <img src="{{ asset($photo->path) }}" alt="">
            </div>
            <!-- END Image Side -->
            
            <!-- Image Right Side -->
            <div class="image_right_side">
                
                <!-- Header 
                    ============================== -->
                <div class="image_right_side_header">
                    <div class="image_cont">
                        <img src="{{ asset($photo->user->profile ? $photo->user->profile : 'uploads/avatars/avatar.jpg') }}" alt="">
                    </div>
                    <div class="text_cont">
                        <span><!--Android -->{{ $photo->user->name }}</span> 
                        <i class=""></i> 
                        <span id="dot"></span><a href="">Follow</a>
                        
                    </div>
                </div>
                <!-- END Header -->
                
                
                <!-- Body
                    ==============================  -->
                <div class="image_right_side_body">
                    <div class="comments_wrapper">
                        
                        @if(isset($comments))
                            @foreach($comments as $comment)
                                <div class="single_comment">
                                   <p>
                                    <span class="comment_author">{{ $comment->user->name }}</span>
                                    {{ $comment->body }}</p> 
                                </div>
                            @endforeach
                        @endif
                        
                    </div>
                </div>
                <!-- END Body -->
                
                <!-- Footer 
                    ============================== -->
                    <div class="image_right_side_footer">

                        <div class="comment_likes_count_cont">
                            <p>
                                <i class="fa fa-heart-o"></i>
                                <i class="fa fa-comment-o"></i>
                            </p>
                            <p class="likes_num">{{ $photo->likes->count() }} Likes</p>
                        </div>

                        <div class="new_comment_cont">
                           <form action="{{ route('photo.comment') }}" method="post">
                               {{ csrf_field() }}
                                <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                                <input type="hidden" name="photo_id" value="{{ $photo->id }}">                                
                                
                                <textarea name="body" id="" cols="30" rows="10"></textarea>
                                <button type="submit">Add</button>
                            </form>
                        </div>

                    </div>
                    <!-- END Footer -->
                
                
            </div>
            <!-- END Image Right Side -->
            
        </div>
        <!-- END Photo popup Sides -->
        
    </div>
</div>