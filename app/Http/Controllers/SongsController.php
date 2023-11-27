<?php

namespace App\Http\Controllers;

use App\Models\Songs;
use Illuminate\Http\Request;

class SongsController extends Controller
{
    
    public function getDanhSach()
    {
        $songs = Songs::all();
        return view('songs.danhsach', compact('songs'));

    }

    
    public function getThem()
    {
        $typebeat = TypeBeat::all();
        $musician = Musician::all();
        return view('songs.them', compact('typebeat', 'musician'));

    }

   
    public function postThem(Request $request)
    {
        $request->validate([
            'typebeat_id' => ['required'],
            'musician_id' => ['required'],
            'tennhac' => ['required', 'string', 'max:191', 'unique:typebeat'],


        ]);
    }

   
    public function getSua($id)
    {
        $typebeat = TypeBeat::find($id);
        $typebeat = TypeBeat::all();
        $musician = Musician::all();
        return view('songs.sua', compact('songs','typebeat', 'musician'));
    }

  
    public function postSua(Request $request, $id)
    {
        $request->validate([
            'typebeat_id' => ['required'],
            'musician_id' => ['required'],
            'tennhac' => ['required', 'string', 'max:191', 'unique:typebeat'],


        ]);
    }

    
    public function getXoa($id)
    {
        $orm = Songs::find($id);
		$orm->delete();

		return redirect()->route('songs');
    }
}
