@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="middle-box text-center loginscreen animated fadeInDown">
            <div>

                    <div class="wbs">WBS</div>

                <h3>Welcome to WBS</h3>
                <p>Manage peoples report about Corruption, Gratification, or Conflict of Interest
                    <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
                </p>
                <p>Login in. To take your action.</p>
                <form class="m-t" role="form" method="POST" action="{{ route('admin.login.submit') }}">
                {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <input id="username" type="username" placeholder="Username" class="form-control" name="username" value="{{ old('username') }}" required autofocus>
                            @if ($errors->has('username'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                            @endif
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <input id="password" type="password" placeholder="Password" class="form-control" name="password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                    </div>


                    <div class="form-group">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                </label>
                            </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary block full-width m-b">Login</button>
                    </div>

                </form>
                <p class="m-t"> <small>Whistle Blowing System || DPMPTSP Prov Jateng &copy; 2018</small> </p>
            </div>
        </div>


    </div>
@endsection
