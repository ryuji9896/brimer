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
                        <option value="{{ $map->id }}">{{ $map->map_name }}</option>
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
                    <option value="1" @if( old('impact_id') === '1' ) selected @endif>1</option>
                    <option value="2" @if( old('impact_id') === '2' ) selected @endif>2</option>
                    <option value="3" @if( old('impact_id') === '3' ) selected @endif>3</option>
                    <option value="4" @if( old('impact_id') === '4' ) selected @endif>4</option>
                    <option value="5" @if( old('impact_id') === '5' ) selected @endif>5</option>
                    <option value="6" @if( old('impact_id') === '6' ) selected @endif>6</option>
                    <option value="7" @if( old('impact_id') === '7' ) selected @endif>7</option>
                    <option value="8" @if( old('impact_id') === '8' ) selected @endif>8</option>
                    <option value="9" @if( old('impact_id') === '9' ) selected @endif>9</option>
                    <option value="10" @if( old('impact_id') === '10' ) selected @endif>10</option>
                    <option value="11" @if( old('impact_id') === '11' ) selected @endif>11</option>
                    <option value="12" @if( old('impact_id') === '12' ) selected @endif>12</option>
                    <option value="13" @if( old('impact_id') === '13' ) selected @endif>13</option>
                    <option value="14" @if( old('impact_id') === '14' ) selected @endif>14</option>
                    <option value="15" @if( old('impact_id') === '15' ) selected @endif>15</option></select>
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