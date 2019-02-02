<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkflowStep extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'signoffs_required','step_number'
    ];

}
