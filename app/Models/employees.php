<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class employees
 * @package App\Models
 * @version May 6, 2023, 7:36 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $orders
 * @property string $firstname
 * @property string $surname
 * @property string $employeetype
 * @property string $dateofbirth
 * @property string $pps
 * @property boolean $full_time
 */
class employees extends Model
{


    public $table = 'employees';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'firstname',
        'surname',
        'employeetype',
        'dateofbirth',
        'pps',
        'full_time'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'firstname' => 'string',
        'surname' => 'string',
        'employeetype' => 'string',
        'dateofbirth' => 'date',
        'pps' => 'string',
        'full_time' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'firstname' => 'nullable|string|max:30',
        'surname' => 'nullable|string|max:30',
        'employeetype' => 'nullable|string|max:12',
        'dateofbirth' => 'nullable',
        'pps' => 'nullable|string|max:12',
        'full_time' => 'required|boolean'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function orders()
    {
        return $this->hasMany(\App\Models\Order::class, 'employee_id');
    }
}
