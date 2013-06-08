<?php
/*
Template Name: Project List
*/

$post_type = 'projects';

$gridQuery=array(
  'post_type' => $post_type,
  'post_status' => 'publish',
  'posts_per_page' => -1,
  'caller_get_posts'=> 1
);

include('grid.php');
?>
