<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model {

  protected $fillable = ['slug', 'title', 'body', 'keydescription', 'keywords', 'seotitle', 'category'];

  use HasFactory;
}
