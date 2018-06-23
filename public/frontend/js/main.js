$(document).ready(function(){
    
    var activities_dropdown_is_opened =false;
    
    /* Toggle Activities Dropdown */
    $('.open_activities_dropdown').on('click', function(evt){
        
        evt.preventDefault();
        
        if(activities_dropdown_is_opened){
           $('.activities_popup').fadeOut(300);
        }else{
            $('.activities_popup').fadeIn(300);
        }
        
    });
    /* END Toggle Activities Dropdown */
    
    
    
    
    
    
    
    
    
    
    
    
});