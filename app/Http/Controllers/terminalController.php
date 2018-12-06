<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\terminalModel;
class terminalController extends Controller
{
    public function index($id){

        $terminalModel = new terminalModel();
        $terminal = $terminalModel->getOne($id);
        return view('terminal',compact('terminal'));

    }

    public function delete (Request $request) {
        $terminalModel = terminalModel::find($request->terminalId);

        try {
            $terminalModel->delete();
        }catch (\Exception $e) {
            return 'false';
        }

        return 'true';
    }

    public function update (Request $request){


        $terminalModel = terminalModel::find($request->terminalId);

        $terminalModel->state_id = $request->stateId;


        try {
            $terminalModel->save();
        }catch (\Exception $e) {
            return 'false';
        }

        return 'true';

    }
}
