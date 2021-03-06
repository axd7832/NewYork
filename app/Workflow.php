<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workflow extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'funding_type',
    ];

    public function workflow_steps()
    {
        return $this->hasMany('App\WorkflowStep');
    }
}
