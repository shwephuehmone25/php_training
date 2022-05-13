<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
 
class Employee extends Model
{ 
	protected $table = 'employee';
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