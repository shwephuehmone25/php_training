<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
 
class Employee extends Model
{ 
  //table name
	protected $table = 'employee';
  //primary key
	protected $primaryKey = 'id';
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'name', 'address','salary'
      ];
}