<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectType extends Model
{
    //

    protected $guarded = [];

    public function stages()
    {
        return $this->hasMany('App\ProjectStage', 'project_type_id', 'id');
    }
}
