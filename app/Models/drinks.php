<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class drinks
 * @package App\Models
 * @version May 16, 2023, 4:13 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $orderdetails
 * @property string $name
 * @property string $description
 * @property number $alcohol
 * @property number $price
 * @property string $image
 */
class drinks extends Model
{


    public $table = 'drinks';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'name',
        'description',
        'alcohol',
        'price',
        'image'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'description' => 'string',
        'alcohol' => 'decimal:3',
        'price' => 'decimal:3',
        'image' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'nullable|string|max:30',
        'description' => 'nullable|string|max:30',
        'alcohol' => 'nullable|numeric',
        'price' => 'nullable|numeric',
        'image' => 'nullable|string|max:30'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function orderdetails()
    {
        return $this->hasMany(\App\Models\Orderdetail::class, 'drinkid');
    }
}
