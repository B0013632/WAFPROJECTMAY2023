<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class reservations
 * @package App\Models
 * @version May 6, 2023, 2:08 am UTC
 *
 * @property \App\Models\Customer $customer
 * @property \App\Models\Table $table
 * @property integer $table_id
 * @property integer $customer_id
 * @property string $reservationDate
 * @property time $reservationTime
 * @property integer $partySize
 * @property string $specialRequests
 */
class reservations extends Model
{


    public $table = 'reservations';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'table_id',
        'customer_id',
        'reservationDate',
        'reservationTime',
        'partySize',
        'specialRequests'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'table_id' => 'integer',
        'customer_id' => 'integer',
        'reservationDate' => 'date',
        'partySize' => 'integer',
        'specialRequests' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'table_id' => 'nullable|integer',
        'customer_id' => 'nullable|integer',
        'reservationDate' => 'nullable',
        'reservationTime' => 'nullable',
        'partySize' => 'nullable|integer',
        'specialRequests' => 'nullable|string|max:255'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function customer()
    {
        return $this->belongsTo(\App\Models\Customer::class, 'customer_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function table()
    {
        return $this->belongsTo(\App\Models\Table::class, 'table_id');
    }
}
