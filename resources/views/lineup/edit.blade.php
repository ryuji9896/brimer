@extends('layouts.admin')
@section('title','記事の編集')
@section('content')
    <h1>定点編集画面</h1>
    <img src="{{ secure_asset('image/map_split_impact_no.png')}}">
    <ul>
        <li><p>MAP NAME</p></li>
        <li><p>SITE NAME</p></li>
    </ul>
    <ul>
        <li><p>IMPACT NO</p></li>
        <li><input type="text" name="impact_no" list="no" placeholder="着弾位置を選択">
        <datalist id="no">
            <option>①</option>
            <option>②</option>
            <option>③</option>
            <option>④</option>
            <option>⑤</option>
        </datalist>
        </li>
    </ul>
    <ul>
        <li><p>STANDING POSITION</p></li>
        <li><input type="file" class="form-controle-file" name="standing_position_image"></li>
        <li><input type="text" class="form-control" name="standing_position" rows="50" value="{{old('standing_position')}}" placeholder="立ち位置の説明文を入力(50文字以内)"></li>
    </ul>
    <ul>
        <li><p>CURSOR POSITION</p></li>
        <li><input type="file" class="form-control-file" name="cursor_position_image"></li>
        <li><input type="text" class="form-control" name="cursor_position" rows="50" value="{{old('cursor_position')}}" placeholder="目印の説明文を入力(50文字以内)"></li>
    </ul>
    <ul>
        <li><p>TIME</p></li>
        <li><input type="text" name="time" list="time(s)" placeholder="着弾時間を入力">
        <datalist id="time(s)">
            <option>約3秒</option>
            <option>約4秒</option>
            <option>約5秒</option>
            <option>約6秒</option>
            <option>約7秒</option>
            <option>約8秒</option>
            <option>約9秒</option>
            <option>約10秒</option>
            <option>約11秒</option>
            <option>約12秒</option>
            <option>約13秒</option>
            <option>約14秒</option>
            <option>約15秒</option>
        </datalist>
        </li>
    </ul>
    <input type="submit" class="btn btn-primary" value="定点更新">
@endsection