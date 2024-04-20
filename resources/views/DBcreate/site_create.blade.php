@extends('layouts.admin')
@section('title','DBサイトデータ追加')
@section('content')
    <h1>DB用サイトデータ入力画面</h1>
    <form action="{{ route('siteCreate') }}" method="post" enctype="multipart/form-data">
    
        @csrf
        
        @if (count($errors) > 0)
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    
        <ul>
            <ul>
                <li><p>MAP NAME</p></li>
                <li><select name="map_name">
                    <option value="" disabled selected>マップ選択</option>
                    @foreach($maps as $map)
                        <option value="{{ $map->map_name }}">{{ $map->map_name }}</option>
                    @endforeach</select>
                </li>
            </ul>
            <ul>
                <li><p>SITE NAME</p></li>
                <li><select name="site_name">
                    <option value="" disabled selected>サイト選択</option>
                    <option value="A" @if( old('site_name') === 'A' ) selected @endif>A</option>
                    <option value="B" @if( old('site_name') === 'B' ) selected @endif>B</option>
                    <option value="C" @if( old('site_name') === 'C' ) selected @endif>C</option></select>
                </li>
            </ul>
            <ul>
                <li><p>IMPACT ID</p></li>
                <li><select name="impact_id">
                    <option value="" disabled selected>サイト毎の着弾位置個数選択</option>
                    <option value="①" @if( old('impact_id') === '①' ) selected @endif>①</option>
                    <option value="②" @if( old('impact_id') === '②' ) selected @endif>②</option>
                    <option value="③" @if( old('impact_id') === '③' ) selected @endif>③</option>
                    <option value="④" @if( old('impact_id') === '④' ) selected @endif>④</option>
                    <option value="⑤" @if( old('impact_id') === '⑤' ) selected @endif>⑤</option>
                    <option value="⑥" @if( old('impact_id') === '⑥' ) selected @endif>⑥</option>
                    <option value="⑦" @if( old('impact_id') === '⑦' ) selected @endif>⑦</option>
                    <option value="⑧" @if( old('impact_id') === '⑧' ) selected @endif>⑧</option>
                    <option value="⑨" @if( old('impact_id') === '⑨' ) selected @endif>⑨</option>
                    <option value="⑩" @if( old('impact_id') === '⑩' ) selected @endif>⑩</option>
                    <option value="⑪" @if( old('impact_id') === '⑪' ) selected @endif>⑪</option>
                    <option value="⑫" @if( old('impact_id') === '⑫' ) selected @endif>⑫</option>
                    <option value="⑬" @if( old('impact_id') === '⑬' ) selected @endif>⑬</option>
                    <option value="⑭" @if( old('impact_id') === '⑭' ) selected @endif>⑭</option>
                    <option value="⑮" @if( old('impact_id') === '⑮' ) selected @endif>⑮</option></select>
                </li>
            </ul>
            <ul>
                <li><p>サイト画像</p></li>
                <li><input type="file" class="site_image" name="site_image" placeholder="サイトの画像を選択"></li>
            </ul>
        </ul>   
        <input type="submit" class="btn btn-primary" value="サイトデータを投稿">
    </form>
@endsection