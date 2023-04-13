<?php

namespace App\Repositories;

use App\Traits\ApiResponse;
use Prettus\Repository\Eloquent\BaseRepository as Repository;
/**
 * Class BaseRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class BaseRepositoryEloquent extends Repository
{
    use ApiResponse;

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {

    }



    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {

    }

}
