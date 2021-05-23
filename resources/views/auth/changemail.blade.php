@extends('layouts.app')

@section('content')
<br><br><br><br><br><br><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Change Email') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('mail.update') }}" aria-label="{{ __('Reset Password') }}">
                        @csrf


                        <div class="form-group row">
                            <label for="oldpass" class="col-md-4 col-form-label text-md-right">{{ __('Old Password') }}</label>

                            <div class="col-md-6">
                                <input id="oldpass" type="mail" class="form-control{{ $errors->has('oldmail') ? ' is-invalid' : '' }}" name="oldpass" value="{{ $oldpass ?? old('oldpass') }}" required autofocus>

                                @if ($errors->has('oldmail'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('oldmail') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="mail" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="mail" type="mail" class="form-control{{ $errors->has('mail') ? ' is-invalid' : '' }}" name="mail" required>

                                @if ($errors->has('mail'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('mail') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="mail-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm mail') }}</label>

                            <div class="col-md-6">
                                <input id="mail-confirm" type="mail" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset mail') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
