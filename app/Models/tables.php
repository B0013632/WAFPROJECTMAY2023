<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class tables
 * @package App\Models
 * @version May 6, 2023, 8:52 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $orders
 * @property \Illuminate\Database\Eloquent\Collection $reservations
 * @property integer $capacity
 * @property boolean $booked
 */
class tables extends Model
{


    public $table = 'tables';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'capacity',
        'booked'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'capacity' => 'integer',
        'booked' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'capacity' => 'nullable|integer',
        'booked' => 'required|boolean'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function orders()
    {
        return $this->hasMany(\App\Models\Order::class, 'table_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function reservations()
    {
        return $this->hasMany(\App\Models\Reservation::class, 'table_id');
    }
}
