<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class terminalStateModel extends Model
{
    protected $table = 'terminal_states';

    public function terminals()
    {
        return $this->hasMany('App\models\terminalModel','state_id');
    }
}
