<?php

namespace App\Repositories;

use App\Models\ContentType;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ContentTypeRepository
 * @package App\Repositories
 * @version March 18, 2018, 1:33 pm UTC
 *
 * @method ContentType findWithoutFail($id, $columns = ['*'])
 * @method ContentType find($id, $columns = ['*'])
 * @method ContentType first($columns = ['*'])
*/
class ContentTypeRepository extends BaseRepository
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
        return ContentType::class;
    }
}
