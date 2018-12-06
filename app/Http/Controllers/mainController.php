<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\terminalModel;
use App\models\branchModel;
use App\models\colleagueModel;

class mainController extends Controller
{
    private $terminalModel;
    private $colleagueModel;
    private $branchModel;

    public function __construct (){
        $this->terminalModel = new terminalModel();
        $this->branchModel = new branchModel();
        $this->colleagueModel = new colleagueModel();
    }

    public function index(Request $request){

       $terminals =  $this->terminalModel->getAll();
       $branches = $this->branchModel->all();
       $filterVal = '0';


        if (isset($request->filter)){
            $colleagues = $this->colleagueModel->getAll($request->filter);
            $filterVal = $request->filter;
        }else{
            $colleagues = $this->colleagueModel->getAll();
        }

        return view('welcome',compact(['terminals','colleagues','branches','filterVal']));
    }

}
