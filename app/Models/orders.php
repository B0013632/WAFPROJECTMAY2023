<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class orders
 * @package App\Models
 * @version May 6, 2023, 1:01 am UTC
 *
 * @property \App\Models\Customer $customer
 * @property \App\Models\Employee $employee
 * @property \App\Models\Table $table
 * @property integer $customer_id
 * @property integer $employee_id
 * @property string $order_description
 * @property integer $table_id
 * @property string $order_date
 * @property time $order_time
 * @property number $total
 */
class orders extends Model
{


    public $table = 'orders';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'customer_id',
        'employee_id',
        'order_description',
        'table_id',
        'order_date',
        'order_time',
        'total'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'customer_id' => 'integer',
        'employee_id' => 'integer',
        'order_description' => 'string',
        'table_id' => 'integer',
        'order_date' => 'date',
        'total' => 'decimal:2'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'customer_id' => 'nullable|integer',
        'employee_id' => 'nullable|integer',
        'order_description' => 'nullable|string|max:100',
        'table_id' => 'nullable|integer',
        'order_date' => 'nullable',
        'order_time' => 'nullable',
        'total' => 'nullable|numeric'
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
    public function employee()
    {
        return $this->belongsTo(\App\Models\Employee::class, 'employee_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function table()
    {
        return $this->belongsTo(\App\Models\Table::class, 'table_id');
    }
}
