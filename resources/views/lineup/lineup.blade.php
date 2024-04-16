@extends('layouts.admin')
@section('title','記事一覧の閲覧ページ')
@section('content')
    <h1>定点一覧</h1>
    @foreach($posts as $lineups)
        <tr>
            <th>{{$lineups->id}}</th>
            <td>{{ $lineups->map_name}}</td>
            <td>{{ $lineups->site_name}}</td>
            <td>{{ $lineups->impact_id}}</td>
            <td>{{ $map->impact_id_image_path}}</td>
        </tr>
    @endforeach
@endsection