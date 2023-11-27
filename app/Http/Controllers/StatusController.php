<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    
    public function getDanhSach()
    {
        $status = Status::all();
		return view('status.danhsach', compact('status'));
    }


    public function getThem()
    {
        return view('status.them');
    }

  
    public function postThem(Request $request)
    {
        
		$request->validate([
			'status' => ['required', 'string', 'max:191', 'unique:status'],
		]);
		
		$orm = new Status();
		$orm->status = $request->status;
		$orm->save();
    }

   
    public function getSua($id)
    {
        $status = Status::find($id);
		return view('status.sua', compact('status'));
    }

    
    public function postSua(Request $request, $id)
    {
        
		$request->validate([
			'status' => ['required', 'string', 'max:191', 'unique:status'],
		]);
		
		$orm = new Status();
		$orm->status = $request->status;
		$orm->save();
    }

    
    public function getXoa($id)
    {
        $orm = Status::find($id);
		$orm->delete();

		return redirect()->route('status');
    }
}
