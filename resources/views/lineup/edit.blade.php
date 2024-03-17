@extends('layouts.admin')
@section('title','定点の編集')
@section('content')
    <h1>定点編集画面</h1>
    <img src="{{ secure_asset('image/map_split_impact_no.png')}}">
    <form action="{{ route('post_edit') }}" method="post">
        @csrf
    <ul>
        <li><p>MAP NAME</p></li>
        <li><p>SITE NAME</p></li>
    </ul>
    <ul>
        <li><p>IMPACT NO</p></li>
        <li><input type="text" name="impact_id" list="no" placeholder="着弾位置を選択">
        <datalist id="no">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
        </datalist>
        </li>
    </ul>
    <ul>
        <li><p>STANDING POSITION</p></li>
        <li><input type="file" class="form-controle-file" name="stand_posi_img"></li>
        <li><input type="text" class="form-control" name="stand_posi_txt" rows="50" value="{{old('stand_posi_txt')}}" placeholder="立ち位置の説明文を入力(50文字以内)"></li>
    </ul>
    <ul>
        <li><p>CURSOR POSITION</p></li>
        <li><input type="file" class="form-control-file" name="cursor_img"></li>
        <li><input type="text" class="form-control" name="cursor_txt" rows="50" value="{{old('cursor_txt')}}" placeholder="目印の説明文を入力(50文字以内)"></li>
    </ul>
    <ul>
        <li><p>TIME</p></li>
        <li><input type="text" name="time" list="time(s)" placeholder="着弾時間を入力">
        <datalist id="time(s)">
            <option>3秒</option>
            <option>4秒</option>
            <option>5秒</option>
            <option>6秒</option>
            <option>7秒</option>
            <option>8秒</option>
            <option>9秒</option>
            <option>10秒</option>
            <option>11秒</option>
            <option>12秒</option>
            <option>13秒</option>
            <option>14秒</option>
            <option>15秒</option>
        </datalist>
        </li>
    </ul>
    <input type="submit" class="btn btn-primary" value="定点更新">
@endsection