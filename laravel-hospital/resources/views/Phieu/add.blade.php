@extends('layout.app')
@section('title','ADD Phieu xet nghiem');
@section('content')
<h3 class="text-left">Thong tin Benh nhan</h3>
<div class="text-left">
    <p>Ma Benh nhan: {{ $benhnhans->MaBN}}</p>
    <p>Ten: {{ $benhnhans->TenBN }} </p>
    <p>Dia Chi: {{ $benhnhans->Address }}</p>
</div>
<h1 class="text-center">Them Phieu xet nghiem</h1>
<form action="" method="post" style="max-width: 450px">
        
    <div class="mb-3">
        <label for="txtTenPhieu" class="form-label">Ten Phieu</label>
        <input type="text" class="form-control" id="txtTenPhieu" name="txtTenPhieu">
    </div>
    @csrf
    <button type="submit" class="btn btn-outline-info">Save</button>
</form>
@endsection