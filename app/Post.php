<?php
  namespace App;

  use Illuminate\Database\Eloquent\Model;


  class Post extends Model
  {

      // Post->posts
      protected $table = 'posts';

      protected $fillable = ['tittle','description','url'];


  }

?>
