<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class branchModel extends Model
{
    protected $table = 'branches';

    public function terminals()
    {
        return $this->hasMany('App\models\terminalModel','branch_id');
    }

    public function colleagues()
    {
        return $this->hasMany('App\models\colleagueModel','branch_id');
    }
}
