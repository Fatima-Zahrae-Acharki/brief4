<?php

namespace App\Http\Controllers;
use App\Models\task;
use Illuminate\Http\Request;

class testController extends Controller
{
    //
    public function test1 (Request $request){
        $brief = new task;
        $brief->firstname = $request->firstname;
        $brief->lastname = $request->lastname;
        $brief->email = $request->email;
        $brief->save();
        return response()->json($brief);
    }
    public function select(){
        $briefs = task::all();
        return response()->json($briefs);
    }

    public function destroy($id){
        $brief = task::find($id);
        $brief->delete();
        return response()->json($brief);
    }

    public function edit($id){
        $brief = task::find($id);
        return response()->json($brief);
    }

    public function update(Request $request,$id){
        $brief = task::find($id);
        $brief->firstname = $request->firstname;
        $brief->lastname = $request->lastname;
        $brief->email = $request->email;
        $brief->save();
        return $brief;
    }
}
