<?php

namespace App\Repositories;

use App\Models\tables;
use App\Repositories\BaseRepository;

/**
 * Class tablesRepository
 * @package App\Repositories
 * @version May 6, 2023, 8:52 am UTC
*/

class tablesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'capacity',
        'booked'
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
        return tables::class;
    }
}
