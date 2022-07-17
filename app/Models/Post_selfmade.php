<?php

namespace App\Models;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;


class Post
{
    public $title;
    public $ecxerpt;
    public $date;
    public $body;
    public $slug;
    public function __construct($title, $ecxerpt, $date, $body, $slug){
      $this->title = $title;
      $this->ecxerpt = $ecxerpt;
      $this->date = $date;
      $this->body = $body;
      $this->slug = $slug;
    }
    public static function find($slug){
      /*  if(!file_exists($path = resource_path("posts/{$slug}.html"))){
            throw new ModelNotFoundException();
        }
        return  cache()->remember("posts.{$slug}", 1200, fn()=> file_get_contents($path));
      */
      $post = static::all()->firstWhere('slug', $slug);
      if(!$post){
        throw new ModelNotFoundException();
      }
      return $post;
    }
    public static function all(){
      return cache()->rememberForever('posts.all', function(){
        return collect(File::files(resource_path('posts')))
        ->map(fn($file) => YamlFrontMatter::parseFile($file))
        ->map(fn($document) => new Post($document->title, $document->ecxerpt,
        $document->date, $document->body(), $document->slug))->sortBy('date');

      });
    }

}
