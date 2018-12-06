<?php

namespace App\models;

use function foo\func;
use Illuminate\Database\Eloquent\Model;


class colleagueModel extends Model
{
    protected $table = 'colleagues';

    public function branch()
    {
        return $this->belongsTo('App\models\branchModel');
    }

    public function terminals()
    {
        return $this->hasMany('App\models\terminalModel','colleague_id');
    }

    public function getAll ($branchId = null){

        $branchModel = new branchModel();

        $colleagues = $this::all()->each(function ($colleague) use($branchModel) {
            $colleague['branchName'] = $colleague->branch->code;
            $colleague['terminalsCount'] = 0;
            $colleagueId = $colleague->id;
            $colleague['branchesTerms'] =  $branchModel->all()->each(function ($item) use($colleagueId,$colleague){
                $item['terminals']= $item->terminals->where('colleague_id','=',$colleagueId);
                $colleague['terminalsCount'] += $item['terminals']->count();
                return $item;
            });
            return $colleague;
        });

        if (!empty($branchId)){
            $colleagues = $this::all()->where('branch_id','=',$branchId)->each(function ($colleague) use($branchModel) {
                $colleague['branchName'] = $colleague->branch->code;
                $colleague['terminalsCount'] = 0;
                $colleagueId = $colleague->id;
                $colleague['branchesTerms'] =  $branchModel->all()->each(function ($item) use($colleagueId,$colleague){
                    $item['terminals']= $item->terminals->where('colleague_id','=',$colleagueId);
                    $colleague['terminalsCount'] += $item['terminals']->count();
                    return $item;
                });
                return $colleague;
            });
        }

        return $colleagues;
    }
}
