<?php 
function addview($post_ID){
   $count_key = 'post_views_count'; 

   $count = get_post_meta($post_ID, $count_key, true);
 
   if($count == ''){

       delete_post_meta($post_ID, $count_key);

      
       add_post_meta($post_ID, $count_key, '0');
       return $count . ' View';

  
   }else{
       $count++; 
      
       update_post_meta($post_ID, $count_key, $count);

       
       if($count == '1'){
       return $count . ' View';
       }
      
       else {
       return $count . ' Views';
       }
    }
    }
    add_shortcode( '[view_post]', addview);

