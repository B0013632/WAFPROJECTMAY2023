<?php

namespace App\Repositories;

use App\Models\drinks;
use App\Repositories\BaseRepository;

/**
 * Class drinksRepository
 * @package App\Repositories
 * @version May 16, 2023, 4:13 pm UTC
*/

class drinksRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'description',
        'alcohol',
        'price',
        'image'
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
        return drinks::class;
    }
}
