<?php

namespace App\Repositories;

use App\Models\orders;
use App\Repositories\BaseRepository;

/**
 * Class ordersRepository
 * @package App\Repositories
 * @version May 6, 2023, 1:01 am UTC
*/

class ordersRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'customer_id',
        'employee_id',
        'order_description',
        'table_id',
        'order_date',
        'order_time',
        'total'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return orders::class;
    }
}
