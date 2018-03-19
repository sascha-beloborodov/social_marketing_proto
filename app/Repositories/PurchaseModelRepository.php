<?php

namespace App\Repositories;

use App\Models\PurchaseModel;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PurchaseModelRepository
 * @package App\Repositories
 * @version March 18, 2018, 1:34 pm UTC
 *
 * @method PurchaseModel findWithoutFail($id, $columns = ['*'])
 * @method PurchaseModel find($id, $columns = ['*'])
 * @method PurchaseModel first($columns = ['*'])
*/
class PurchaseModelRepository extends BaseRepository
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
        return PurchaseModel::class;
    }
}
