<?php
/*
Template Name: Service List
*/

$post_type = 'services';

$gridQuery=array(
  'post_type' => $post_type,
  'post_status' => 'publish',
  'posts_per_page' => -1,
  'caller_get_posts'=> 1
);

include('grid.php');
?>
