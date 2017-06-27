@extends('cms.layout')

@section('content')

<div class="container vertical-center">
    <div class="row">
        <div class="four columns offset-by-four">

            <h1>Reset Password</h1>

            <form class="form-horizontal" role="form" method="POST" action="{{ route('password.request') }}">
                {{ csrf_field() }}

                <input type="hidden" name="token" value="{{ $token }}">

                <label for="email">E-Mail Address</label>
                <input id="email" type="email" class="u-full-width" name="email" value="{{ $email or old('email') }}" required autofocus>

                <label for="password">Password</label>
                <input id="password" type="password" class="u-full-width" name="password" required>

                <label for="password-confirm">Confirm Password</label>
                <input id="password-confirm" type="password" class="u-full-width" name="password_confirmation" required>

                <button type="submit" class="button">Reset Password</button>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                @if ($errors->has('password_confirmation'))
                    <p><strong>{{ $errors->first('password_confirmation') }}</strong></p>
                @endif

                @if ($errors->has('password'))
                    <p><strong>{{ $errors->first('password') }}</strong></p>
                @endif

                @if ($errors->has('email'))
                    <p><strong>{{ $errors->first('email') }}</strong></p>
                @endif

            </form>
        </div>
    </div>
</div>

@endsection
