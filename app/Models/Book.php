<?php
  
namespace App\Models;
  
use Illuminate\Database\Eloquent\Model;
 
class Book extends Model
{// based on database sql   
    protected $fillable = [
        'title', 'author'
    ];
}