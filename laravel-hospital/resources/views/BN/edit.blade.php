@extends('layout.app')
@section('title', 'Edit')
@section('content')
    <h1 class="text-left">Chinh sua ho so Benh Nhan</h1>
    
    <form action="" method="post" style="max-width: 450px">
        <div class="mb-3">
            <label for="txtID" class="form-label">Ten BN</label>
       <input type="text" class="form-control" id="txtID" name="txtID" value="{{ $benhnhans->MaBN}}" readonly>
       </div>
        <div class="mb-3">
             <label for="txtTenBN" class="form-label">Ten BN</label>
        <input type="text" class="form-control" id="txtTenBN" name="txtTenBN"value="{{ $benhnhans->TenBN}}" >
        </div>
       
        <div class="mb-3">
             <label for="txtAddress" class="form-label">Dia chi</label>
        <input type="text" class="form-control" id="txtAddress" name="txtAddress"value="{{ $benhnhans->Address}}" >
        </div>
    
    @csrf
    <button type="submit" class="btn btn-outline-info">Save</button>
</form>
@endsection