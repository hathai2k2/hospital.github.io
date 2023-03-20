@extends('layout.app')
@section('title','Manage Benhnhan');
@section('content')
    <h3>Thông tin bệnh nhân</h3>
    <div>
        <p>Mã bệnh nhân: {{$benhnhans->MaBN}}</p>
        <p>Tên bệnh nhân: {{$benhnhans->TenBN}}</p>
        <p>Địa chỉ: {{$benhnhans->Address}}</p>
    </div>
    <h3>Chỉnh sửa thông tin</h3>
    <form action="" method="post" style="max-width: 450px">
        <div class="mb-3">
            <label for="txtID" class="form-label">Mã phiếu</label>
            <input type="text" class="form-control" id="txtID" name="txtID" value="{{$phieus->MaPhieu}}" readonly>
        </div>
        <div class="mb-3">
            <label for="txtTenPhieu" class="form-label">Tên phiếu</label>
            <input type="text" id="txtTenPhieu" name="txtTenPhieu" class="form-control" value="{{$phieus->TenPhieu}}">
        </div>
        @csrf
        <button type="submit" class="btn btn-primary">Sửa</button>
    </form>
@endsection