<?php 
namespace App\Models; 
use Illuminate\Database\Eloquent\Model as Model; 
class event extends Model 
{ 
    public $table = 'event'; 
    public $timestamps = false; 
    protected $casts = [ 
        'title' => 'string', 
        'start' => 'string', 
        'end' => 'string', 
        'specialRequest' => 'string' ,
		'reservation_id' => 'string',
		'table_id' => 'string' ,
    ]; 
}