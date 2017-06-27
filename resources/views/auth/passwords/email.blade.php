
@extends('cms.layout')

@section('content')

    <div class="container vertical-center">
        <div class="row">
            <div class="four columns offset-by-four">

                <h1>Reset Password</h1>

                <form class="form-horizontal" role="form" method="POST" action="{{ route('password.email') }}">
                    {{ csrf_field() }}

                    <label for="email">email</label>
                    <input id="email" type="email" class="u-full-width" name="email" value="{{ old('email') }}"required>

                    <button type="submit" class="button">send</button>

                    @if ($errors->has('email'))
                        <p><strong>{{ $errors->first('email') }}</strong></p>
                    @endif

                </form>

                @if (session('status'))
                    <p><strong>{{ session('status') }}</strong></p>
                @endif

            </div>
        </div>
    </div>

@endsection
