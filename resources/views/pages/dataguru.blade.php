@extends('layout')

@section('title', 'Data Guru page')

@section('content')
<table cellpadding=10 cellspacing=0 border=1>
                <tr>
                        <th>id</th>
                        <th>nip</th>
                        <th>namaguru</th>
                        <th>jk</th>
                        <th>mapel</th>
                        <th>walikelas</th>
                </tr>   
        @foreach($data as $dataguru)
        <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $dataguru->nip }}</td>  
                <td>{{ $dataguru->namaguru }}</td>
                <td>{{ $dataguru->jk }}</td>
                <td>{{ $dataguru->mapel }}</td>
                <td>{{ $dataguru->walikelas }}</td>
        </tr>   
@endforeach
</table>
@endsection