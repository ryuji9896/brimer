@extends('layouts.admin')
@section('title','マイページ')
@section('content')
    <h1>マイページ</h1>
    <ul>
        <li><p>USER NAME</p></li>
        <li><p>ブリム仙人(←DBから取得)</p></li>
        <input type="submit" class="btn btn-primary" value="更新">
    </ul>
    <h2>過去の投稿</h2>
    <ul>
        <li><p>MAP NAME</p></li>
        <li><p>SITE NAME</p></li>
    </ul>
    <ul>
        <li><p>STANDING POSITION</p></li>
        <li><img src="{{ secure_asset('image/standing_position1.png')}}">(↑DBから取得)</li>
        <li><p>植木鉢の横に立つ(←DBから取得)</p></li>
    </ul>
    <ul>
        <li><p>CORSOR POINT</p></li>
        <li><img src="{{ secure_asset('image/corsor_point1.png')}}">(↑DBから取得)</li>
        <li><p>頭上の葉っぱの間にカーソルを合わせる(←DBから取得)</p></li>
    </ul>
    <ul>
        <li> <input type="submit" class="btn btn-primary" value="定点編集"></li>
        <li><p>IMPACT TIME</p></li>
        <li><p>7s(←DBから取得)</p></li>
    </ul>
@endsection