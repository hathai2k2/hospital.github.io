@extends('layout.app')

@section('title', 'Home page')
@section('content')
    <h1 class="text-center">Thong tin Benh Nhan</h1>
    <div class="text-left">
    <a href="/manager/BN/add" class="btn btn-outline-primary">Them Benh Nhan moi</a>
    </div>
    <table class="table">
        <thead>
            <tr class="table-warning">
            <th>Ma Benh nhan</th>
            <th>Ten </th>
            <th>Dia Chi</th>
            <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($benhnhans as $benhnhan)
                <tr>
                    <td>{{ $benhnhan->MaBN }}</td>
                    <td>{{ $benhnhan->TenBN }}</td>
                    <td>{{ $benhnhan->Address }}</td>
                    <td class="text-center">
                        <div class="btn-group" role="group" aria-label="Basic outlined example">
                            <a href="/manager/BN/edit/{{ $benhnhan->MaBN }}"class="btn btn-outline-warning">EDIT</a>
                            <a href="/manager/BN/delete/{{ $benhnhan->MaBN }}"class="btn btn-outline-danger">DELETE</a>
                            <a href="/manager/BN/{{ $benhnhan->MaBN }}/Phieu"class="btn btn-outline-info">Thong tin</a>
                            <a href="/manager/BN/{{$benhnhan->MaBN}}/Phieu/add"class="btn btn-outline-success">Them Phieu</a>
                          </div>
                    </td>
                </tr>
            @empty
                <h1>Khong co ban ghi nao</h1>
            @endforelse
        </tbody>
    </table>
@endsection