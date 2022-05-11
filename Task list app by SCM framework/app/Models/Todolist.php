<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
 
class Todolist extends Model
{ 
	protected $table = 'todolist';
	protected $primaryKey = 'id';
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'name', 'description'
      ];
}