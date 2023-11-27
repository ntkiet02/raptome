<?php

namespace App\Http\Controllers;

use App\Models\Musician;
use Illuminate\Http\Request;
use App\Models\Status;
use Illuminate\Support\Str;
class MusicianController extends Controller
{
  
    public function getDanhSach()
    {
        $musician = Musician::all();
		return view('musician.danhsach', compact('musician'));
    }

   
    public function getThem()
    {
        return view('musician.them');
    }

    
    public function postThem(Request $request)
    {
        $orm = new Musician();
		$orm->tennhacsi = $request->tennhacsi;
		$orm->tennhacsi_slug = Str::slug($request->tennhacsi, '-');
		$orm->save();
		

		return redirect()->route('musician');
    }

    public function getSua($id)
	{
		$musician = Musician::find($id);
		return view('musician.sua', compact('musician'));
	}
	
	public function postSua(Request $request, $id)
	{
	
		$orm = Musician::find($id);
		$orm->tennhacsi = $request->tennhacsi;
		$orm->tennhacsi_slug = Str::slug($request->tennhacsi, '-');
		$orm->save();
		
	
		return redirect()->route('musician');
	}
	
	public function getXoa($id)
	{
		$orm = Musician::find($id);
		$orm->delete();
		
		
		return redirect()->route('musician');
	}
}
