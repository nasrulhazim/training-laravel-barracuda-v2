@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="card-header">Activation Account</div>
                <div class="card-body">
                    @if(isset($notice))
                        <div class="alert alert-warning">{{ $notice }}</div>
                    @endif
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('account.activation.resend') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Resend Activation E-mail
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection