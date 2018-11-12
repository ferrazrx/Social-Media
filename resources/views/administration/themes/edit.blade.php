@extends('administration.master')

@section('content')
<div class="container">
        <div class="col-md-12">
            <h1 class="mt-3">{{ __('Update User') }}</h1>
            <hr>
            <form method="POST" action="{{ route('users.update', ['id' => $user->id] ) }}">
                @csrf
                @method('PATCH')
                <div class="form-group row">
                    <label for="name" class="col-md-2 col-form-label text-md-right">{{ __('Name') }}</label>

                    <div class="col-md-10">
                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name', $user->name) }}" placeholder="John Doe" required autofocus >

                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-md-2 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                    <div class="col-md-4">
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email', $user->email) }}" placeholder="example@gmail.com" required>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <label for="role" class="col-md-2 col-form-label text-md-right">{{ __('Privilege') }}</label>

                    <div class="col-md-4">
                        <select class="form-control{{ $errors->has('role_code') ? ' is-invalid' : '' }}" name="role_code" required>
                            @forelse($roles as $role)
                                <option 
                                    value="{{ $role->code }}" 
                                    {{ old('role_code', $user->role->code) == $role->code ? 'selected': null }}>
                                    {{ $role->name }}
                                </option>
                            @empty
                                <option value="USR">Guest</option>
                            @endforelse
                        </select>
                        @if ($errors->has('role_code'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('role_code') }}</strong>
                            </span>
                        @endif
                    </div>
                    <input name="password" type="hidden" value="{{ $user->password }}" >
                    <input name="password_confirmation" type="hidden" value="{{ $user->password }}" >
                    <input name="update" type="hidden" value="info" >
                </div>
                <button type="submit" class="btn btn-primary d-block mx-auto mt-5">
                    {{ __('Update User') }}
                </button>
            </form>
            <hr>
            <h1 class="mt-3">{{ __('Update Password') }}</h1>
            <hr>
            <form method="POST" action="{{ route('users.update', ['id' => $user->id] ) }}">
                @csrf
                @method('PATCH')
                <input name="name" type="hidden" value="{{ $user->name }}" >
                <input name="update" type="hidden" value="password" >
                <input name="email" type="hidden" value="{{ $user->email }}" >
                <input name="role_code" type="hidden" value="{{ $user->role->code }}" >

                <div class="form-group row">
                        <label for="password" class="col-md-2 col-form-label text-md-right">{{ __('New Password') }}</label>
    
                        <div class="col-md-4">
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
    
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        <label for="password-confirm" class="col-md-2 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
    
                        <div class="col-md-4">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        </div>
                    </div>
                <button type="submit" class="btn btn-primary d-block mx-auto mt-5">
                    {{ __('Update Password') }}
                </button>
            </form>
    </div>
</div>
@endsection