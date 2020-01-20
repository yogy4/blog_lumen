<?php
namespace App;
// bila menggunakan eloquent maka uncomment di bootstrap/app.php $app->withEloquent()
use Illuminate\Database\Eloquent\Model;

class Post extends Model {
    protected $table = 'posts';
    protected $fillable = ['title', 'body'];
}