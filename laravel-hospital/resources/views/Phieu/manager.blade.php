@extends('layout.app')
@section('title','Manage Phieu xet nghiem');
@section('content')
<h3 class="text-left">Thong tin Benh nhan</h3>
<div class="text-left">
    <p>Ma Benh nhan: {{ $benhnhans->MaBN }}</p>
    <p>Ten: {{ $benhnhans->TenBN }} </p>
    <p>Dia Chi: {{ $benhnhans->Address }}</p>
    <a href="/manager/BN/{{$benhnhans->MaBN}}/Phieu/add" class="btn btn-outline-primary">Them Phieu</a>
</div>
<h1 class="text-center">Thong tin Phieu xet nghiem</h1>
<table class="table">
    <thead>
        <tr class="table-warning">
        <th>Ma Phieu</th>
        <th>Ten Phieu</th>
        <th class="text-center">Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($benhnhans->rPhieu as $phieu)
            <tr>
                <td>{{$phieu->MaPhieu}}</td>
                <td>{{$phieu->TenPhieu}}</td>
                <td class="text-center">
                    <a href="/manager/BN/{{ $benhnhans->MaBN }}/Phieu/edit/{{$phieu->MaPhieu}}"class="btn btn-outline-warning">EDIT</a>
                    <a href="/manager/BN/{{ $benhnhans->MaBN }}/Phieu/delete/{{$phieu->MaPhieu}}"class="btn btn-outline-danger">DELETE</a>
                </td>
            </tr>
        @empty
            <h4>Khong co ban ghi nao</h4>
        @endforelse
    </tbody>
</table>
@endsection