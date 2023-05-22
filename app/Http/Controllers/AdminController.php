<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\history;
class AdminController extends Controller
{
    //
    public function add_history(Request $request){
        if(strlen($request->inp)>1){
            $data = new history;

            $data->expression = $request->inp;
            // echo "History added success";
            // echo var_dump($request->inp);

            $data->save();
        }
        return redirect()->back();
    }
}
