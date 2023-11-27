<?php

namespace App\Http\Controllers;

use App\Models\TypeBeat;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

//use function PHPSTORM_META\type;

class TypeBeatController extends Controller
{
   
    public function getDanhSach()
    {
        $typebeat = TypeBeat::all();
        return view('typebeat.danhsach', compact('typebeat'));
    }

    
    public function getThem()
    {
        return view('typebeat.them');
    }

    
    public function postThem(Request $request)
    {
        $orm = new TypeBeat();
        $orm->tennhac = $request->tennhac;
        $orm->tennhac_slug = Str::slug($request->tennhac, '-');
        $orm->save();

        return redirect()->route('typebeat');

    }

    
    public function getSua($id)
    {
        $typebeat = TypeBeat::find($id);
        return view('typebeat.sua', compact('typebeat'));
    }

 
    public function postSua(Request $request, $id)
    {
        $orm = TypeBeat::find($id);
        $orm->tennhac = $request->tennhac;
        $orm->tennhac_slug = Str::slug($request->tennhac, '-');
        $orm->save();
        
        return redirect()->route('typebeat');
    }

   
    public function getXoa($id)
    {
        $orm = TypeBeat::find($id);
        $orm->delete();

        return redirect()->route('typebeat');
    }
}
