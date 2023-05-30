<?php

namespace App\Repositories;

use App\Models\Kebele;
use InfyOm\Generator\Common\BaseRepository;

class KebeleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Kebele::class;
    }
}
