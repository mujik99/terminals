<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;

class terminalModel extends Model
{
    protected $table = 'terminals';


    public function state()
    {
        return $this->belongsTo('App\models\terminalStateModel');
    }
    public function branch()
    {
        return $this->belongsTo('App\models\branchModel');
    }
    public function colleague()
    {
        return $this->belongsTo('App\models\colleagueModel');
    }



    public function getOne ($id){
        $terminal = $this::find($id);
        $terminal['branchName'] = $terminal->branch->code;
        $terminal['stateName'] = $terminal->state->state_name;
        $terminal['colegName'] = $terminal->colleague->last_name . ' ' . $terminal->colleague->name;
        $terminal['states'] = $terminal->state->all();
        return $terminal;
    }

    public function getAll (){

        $terminals = $this::all()->each(function ($item) {
            $item['branchName'] = $item->branch->code;
            $item['stateName'] = $item->state->state_name;
            $item['colegName'] = $item->colleague->last_name;
            return $item;
        });
        return $this->paginate($terminals,10);
    }


    public function paginate($items, $perPage = 15, $page = null, $options = [])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }

}
