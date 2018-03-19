<?php

namespace App\Repositories;

use App\Models\Social;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class SocialRepository
 * @package App\Repositories
 * @version March 18, 2018, 1:34 pm UTC
 *
 * @method Social findWithoutFail($id, $columns = ['*'])
 * @method Social find($id, $columns = ['*'])
 * @method Social first($columns = ['*'])
*/
class SocialRepository extends BaseRepository
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
        return Social::class;
    }
}
