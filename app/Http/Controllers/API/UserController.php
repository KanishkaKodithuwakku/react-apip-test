<?php

namespace App\Http\Controllers\API;
use App\Models\participant;
use App\Models\quiz;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {
        $quiz = quiz::all();
        return response()->json(['quiz'=>$quiz,]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name'=>'required',
            'number'=>'required',
        ]);

        if($validator->fails())
        {
            return response()->json([
                'status'=> 422,
                'validate_err'=> $validator->messages(),
            ]);
        }
        else
        {
            $participant = new participant;
            $participant->name = $request->input('name');
            $participant->number = $request->input('number');
            $participant->save();

            return response()->json([
                'status'=> 200,
                'message'=>'PLAY THE GAME',
            ]);
        }

    }
}
