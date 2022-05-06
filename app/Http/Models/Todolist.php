<?php
 
namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
class Todolist extends Model
{
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'name', 'description'
      ];
}