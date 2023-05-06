<?php

namespace App\Repositories;

use App\Models\reservations;
use App\Repositories\BaseRepository;

/**
 * Class reservationsRepository
 * @package App\Repositories
 * @version May 6, 2023, 2:08 am UTC
*/

class reservationsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'table_id',
        'customer_id',
        'reservationDate',
        'reservationTime',
        'partySize',
        'specialRequests'
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
        return reservations::class;
    }
}
