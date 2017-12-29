<?php


/**
 *
 */
class Post
{

  public $title;
  public $published;

  public function __construct($title, $published)
  {
    // sign $this
    $this->title = $title;
    $this->published = $published;
  }

}

// setup a collection of posts

$posts = [
  new post('My First Post', true),
  new post('My Second Post', true),
  new post('My Third Post', true),
  new post('My Fourth Post', false)
];

// $publishedPosts = array_filter($posts, function($post) {
//   return $post->published;
// });
//
// $unpublishedPosts = array_filter($posts, function($post) {
//   return ! $post->published;
// });
//
// var_dump($publishedPosts);


$modified = array_map(function($post){
  $post->published = true;
  return $post;
}, $posts);

//var_dump($modified);

// $titles = array_map(function($post) {
//
//   return $post->title;
//
// }, $posts);

$titles = array_column($posts, 'title');  // you can't access title if it is protected => must be public

var_dump($titles);
