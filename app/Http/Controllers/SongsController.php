<?php

namespace App\Http\Controllers;

use App\Models\Musician;
use App\Models\Songs;
use App\Models\TypeBeat;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class SongsController extends Controller
{
    public function getList()
    {
        $songs = Songs::all();
        return view('songs.list', compact('songs'));
    }
    public function getAdd()
    {
        return view('songs.add');
    }
    public function postAdd(Request $request)
    {
        $orm = new Songs();
        $orm->typebeat_id=$request->typebeat_id;
        $orm->musician_id=$request->musician_id;
        $orm->songname = $request->songname;
        $orm->songname_slug = Str::slug($request->songname, '-');
        $orm->time = $request->time;
        $orm->recording= $request->recording;
        $orm->lyric=$request->lyric;
        $orm->save();
        return redirect()->route('songs');
    }
    public function getUpdate($id)
    {
        $songs = Songs::find($id);
        $typebeat = TypeBeat::all();
        $musician =Musician::all();
        return view('songs.update', compact('songs','typebeat','musician'));
    }
    public function postUpdate(Request $request, $id)
    {
        $orm = Songs::find($id);
        $orm->typebeat_id=$request->typebeat_id;
        $orm->musician_id=$request->musician_id;
        $orm->songname = $request->songname;
        $orm->songname_slug = Str::slug($request->songname, '-');
        $orm->time = $request->time;
        $orm->recording= $request->recording;
        $orm->lyric=$request->lyric;
        
        $orm->save();
        
        return redirect()->route('songs');
    }
  
   
    public function getDelete($id)
    {
        $orm = Songs::find($id);
        $orm->delete();
  
        return redirect()->route('songs');
    }
  
}
