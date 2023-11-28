<?php

namespace App\Http\Controllers;

use App\Models\Musician;
use Illuminate\Http\Request;
use App\Models\Status;
use Illuminate\Support\Str;
class MusicianController extends Controller
{
   
    public function getList()
    {
        $stagename = Musician::all();
        return view('stagename.list', compact('stagename'));
    }

    
    public function getAdd()
    {
        return view('stagename.add');
    }

    
    public function postAdd(Request $request)
    {
        $orm = new Musician();
        $orm->typename = $request->typename;
        $orm->typename_slug = Str::slug($request->stagename, '-');
        $orm->save();

        return redirect()->route('stagename');

    }

    
    public function getUpdate($id)
    {
        $stagename = Musician::find($id);
        return view('stagename.update', compact('stagename'));
    }

 
    public function postUpdate(Request $request, $id)
    {
        $orm = Musician::find($id);
        $orm->stagename = $request->stagename;
        $orm->typebeat_slug = Str::slug($request->stagename, '-');
        $orm->save();
        
        return redirect()->route('stagename');
    }

   
    public function getDelete($id)
    {
        $orm = Musician::find($id);
        $orm->delete();

        return redirect()->route('stagename');
    }

   
}
