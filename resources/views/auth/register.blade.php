@extends('layouts.admin')
@section('title','ユーザー登録ページ')
@section('content')
    <h1>ユーザー登録</h1>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <ul>
            <li><input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="ユーザー名">

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                
            </li>
            <li><input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="メールアドレス">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                
            </li>
            <li><input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="パスワード">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                
            </li>
            <li>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="パスワード(確認用)">
            </li>
            
            <button type="submit" class="btn btn-primary">
                    {{ __('登録') }}
                </button>
            </div>
        </div>
        </ul>
    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
