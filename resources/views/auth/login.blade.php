@extends('cms.layout')

@section('content')

    <div class="container vertical-center">
        <div class="row">
            <div class="four columns offset-by-four">

                <h1>Login</h1>

                <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}

                    <label for="email">email</label>
                    <input id="email" type="email" class="u-full-width" name="email" value="{{ old('email') }}" required autofocus>

                    <label for="password">password</label>
                    <input id="password" type="password" class="u-full-width" name="password" required>

                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                        </label>
                    </div>

                    <button type="submit" class="button">Login</button>

                    <a class="button" href="{{ route('password.request') }}">reset</a>

                    @if ($errors->has('error'))
                        <p><strong>{{ $errors->first('error') }}</strong></p>
                    @endif
                    @if ($errors->has('email'))
                        <p><strong>{{ $errors->first('email') }}</strong></p>
                    @endif
                    @if ($errors->has('password'))
                        <p><strong>{{ $errors->first('password') }}</strong></p>
                    @endif

                </form>

            </div>
        </div>
    </div>

@endsection
