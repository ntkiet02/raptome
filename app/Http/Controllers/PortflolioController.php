<?php

namespace App\Http\Controllers;

use App\Models\Portflolio;
use Illuminate\Http\Request;
use App\Models\Status;
use App\Models\Portflolio_detail;

class PortflolioController extends Controller
{
    public function getDanhSach()
	{
		$portflolio = Portflolio::orderBy('created_at', 'desc')->get();
		return view('portflolio.danhsach', compact('portflolio'));
	}
	
	public function getThem()
	{
		// Đặt hàng bên Front-end
	}
	
	public function postThem(Request $request)
	{
		// Xử lý đặt hàng bên Front-end
	}
	
	public function getSua($id)
	{
		$portflolio = Portflolio::find($id);
		$status = Status::all();
		return view('portflolio.sua', compact('portflolio', 'status'));
	}
	
	public function postSua(Request $request, $id)
	{
		
		
		$orm = portflolio::find($id);
		$orm->status_id = $request->status_id;
		$orm->save();
		
		// Sau khi sửa thành công thì tự động chuyển về trang danh sách
		return redirect()->route('portflolio');
	}
	
	public function getXoa($id)
	{
		$orm = Portflolio::find($id);
		$orm->delete();
		
		$chitiet = Portflolio_detail::where('portflolio_id', $orm->id)->delete();
		
		// Sau khi xóa thành công thì tự động chuyển về trang danh sách
		return redirect()->route('portflolio');
	}
}
