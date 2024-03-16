@extends('layouts.admin')
@section('title','ログインページ')
@section('content')
    <h1>ログイン</h1>
    <form method="POST" action="{{ route('login') }}">
        
        @csrf
    
        <ul>
            <li><input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="メールアドレス">
        
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                
            </li>
            <li><input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="パスワード">
    
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                
            </li>
        </ul>
        
        <ul><li><input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
        
                <label class="form-check-label" for="remember">
                    {{ __('ログイン状態を保持する') }}
                </label>
            
            </li>        
            <li><button type="submit" class="btn btn-primary">
                    {{ __('ログイン') }}
                </button>
                
            </li>
            <li><a class="btn btn-link" href="{{ route('register') }}">
                    {{ __('ユーザー登録はこちらから') }}
                </a>
            </li>
        </ul>
    </form>
@endsection
