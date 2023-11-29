@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">Thêm loại sản phẩm</div>
    <div class="card-body">
        <form action="{{ route('typebeat.add') }}" method="post">
            @csrf
            <div class="mb-3">
                <label class="form-label" for="typename">Tyepe name</label>
                <input type="text" class="form-control" id="typename" name="typename" required />
            </div>
            <button type="submit" class="btn btn-primary"><i class="fa-light fa-save"></i> Thêm vào CSDL</button>
        </form>
    </div>
</div>
@endsection