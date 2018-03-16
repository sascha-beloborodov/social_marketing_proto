<?php

namespace App\Repositories;

use App\Models\Post;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PostRepository
 * @package App\Repositories
 * @version March 16, 2018, 1:48 am UTC
 *
 * @method Post findWithoutFail($id, $columns = ['*'])
 * @method Post find($id, $columns = ['*'])
 * @method Post first($columns = ['*'])
*/
class PostRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'period_id',
        'url',
        'content_type_id',
        'reach',
        'impressions',
        'clicks',
        'likes',
        'shares',
        'comments',
        'group_in',
        'site_visits',
        'purchase_intentions',
        'transactions',
        'model_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Post::class;
    }
}
