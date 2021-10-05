<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectStage extends Model
{
    //
    protected $guarded = [];

    public function type()
    {
        return $this->belongsto('App\ProjectType', 'project_type_id', 'id');
    }
}

