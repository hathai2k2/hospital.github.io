@extends('layout.app')
@section('title', 'ADD ')
@section('content')
    <h1 class="text-left">Them Benh Nhan</h1>
    <form action="" method="post" style="max-width: 450px">
        <div class="mb-3">
            <label for="txtTenBN" class="form-label">Ten BN</label>
       <input type="text" class="form-control" id="txtTenBN" name="txtTenBN">
       </div>
        <div class="mb-3">
            <label for="txtAddress" class="form-label">Dia chi</label>
       <input type="text" class="form-control" id="txtAddress" name="txtAddress">
       </div>
    @csrf
    <button type="submit" class="btn btn-outline-info">Save</button>
</form>
@endsection