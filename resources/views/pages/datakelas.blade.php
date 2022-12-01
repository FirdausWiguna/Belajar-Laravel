@extends('layout')

@section('title', 'Data Kelas page')

@section('content')
<table cellpadding=10 cellspacing=0 border=1>
                <tr>
                        <th>id</th>
                        <th>namakelas</th>
                        <th>jurusan</th>
                        <th>namawalikelas</th>
                        <th>jumlahsiswa</th>
                </tr>   
        @foreach($data as $datakelas)
        <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $datakelas->namakelas }}</td>  
                <td>{{ $datakelas->jurusan }}</td>
                <td>{{ $datakelas->namawalikelas }}</td>
                <td>{{ $datakelas->jumlahsiswa }}</td>
        </tr>   
@endforeach
</table>
@endsection