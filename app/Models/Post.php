<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Mongodb;
class Post extends Mongodb
{
    use HasFactory;
    protected $connection='mongodb';
    protected $collection = 'posts';
    protected $guarded = [];
}
