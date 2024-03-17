@extends('layouts.admin')
@section('title','定点の新規作成')
@section('content')
    <h1>定点投稿画面</h1>
    <img src="{{ secure_asset('image/map_split_impact_no.png')}}">
    <form action="{{ route('post_create') }}" method="post">
        
        @csrf
    
        @if (count($errors) > 0)
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
                        
        <ul>
            <li><p>MAP NAME</p></li>
            <li><p>SITE NAME</p></li>
        </ul>
        <ul>
            <li><p>IMPACT NO</p></li>
            <li><select name="impact_id">
                <option value="" disabled selected>着弾位置を選択</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
            </li>
        </ul>
        <ul>
            <li><p>STANDING POSITION</p></li>
            <li><input type="file" class="form-controle-file" name="stand_posi_img" placeholder="立ち位置の画像を選択"></li>
            <li><input type="text" class="form-control" name="stand_posi_txt" rows="50" value="{{old('stand_posi_txt')}}" placeholder="立ち位置の説明文を入力(50文字以内)"></li>
        </ul>
        <ul>
            <li><p>CURSOR POSITION</p></li>
            <li><input type="file" class="form-control-file" name="cursor_img"></li>
            <li><input type="text" class="form-control" name="cursor_txt" rows="50" value="{{old('cursor_txt')}}" placeholder="目印の説明文を入力(50文字以内)"></li>
        </ul>
        <ul>
            <li><p>TIME</p></li>
            <li><select name="time" >
                <option value="" disabled selected>着弾時間を選択</option>
                <option value="3秒">3秒</option>
                <option value="4秒">4秒</option>
                <option value="5秒">5秒</option>
                <option value="6秒">6秒</option>
                <option value="7秒">7秒</option>
                <option value="8秒">8秒</option>
                <option value="9秒">9秒</option>
                <option value="10秒">10秒</option>
                <option value="11秒">11秒</option>
                <option value="12秒">12秒</option>
                <option value="13秒">13秒</option>
                <option value="14秒">14秒</option>
                <option value="15秒">15秒</option>
            </li>
        </ul>
        <input type="submit" class="btn btn-primary" value="定点投稿">
    </form>
@endsection