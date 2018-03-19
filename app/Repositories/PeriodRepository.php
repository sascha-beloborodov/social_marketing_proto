<?php

namespace App\Repositories;

use App\Models\Period;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PeriodRepository
 * @package App\Repositories
 * @version March 18, 2018, 1:32 pm UTC
 *
 * @method Period findWithoutFail($id, $columns = ['*'])
 * @method Period find($id, $columns = ['*'])
 * @method Period first($columns = ['*'])
*/
class PeriodRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Period::class;
    }
}
