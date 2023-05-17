<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class orderdetail
 * @package App\Models
 * @version May 16, 2023, 4:13 pm UTC
 *
 * @property \App\Models\Drink $drinkid
 * @property \App\Models\Order $orderid
 * @property integer $drinkid
 * @property integer $orderid
 * @property integer $quantity
 * @property number $subtotal
 */
class orderdetail extends Model
{


    public $table = 'orderdetail';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'drinkid',
        'orderid',
        'quantity',
        'subtotal'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'drinkid' => 'integer',
        'orderid' => 'integer',
        'quantity' => 'integer',
        'subtotal' => 'decimal:3'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'drinkid' => 'nullable|integer',
        'orderid' => 'nullable|integer',
        'quantity' => 'nullable|integer',
        'subtotal' => 'nullable|numeric'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function drinkid()
    {
        return $this->belongsTo(\App\Models\Drink::class, 'drinkid');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function orderid()
    {
        return $this->belongsTo(\App\Models\Order::class, 'orderid');
    }
}
