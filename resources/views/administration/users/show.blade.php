@extends('administration.master')

@section('content')
<div class="container">
    <div class="col-md-12">
        <h1 class="mt-3">{{ $user->name }}</h1>
        <hr>
            @if(session('success'))
                <div class="alert alert-success" role="alert">
                    {{session('success')}}
                </div>
            @endif
            <div class="form-group row">
                <label for="name" class="col-md-2 col-form-label text-md-right">{{ __('Name') }}</label>

                <div class="col-md-10">
                    <input id="name" type="text" class="form-control" value="{{ $user->name }}" placeholder="John Doe" disabled>
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-md-2 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                <div class="col-md-4">
                    <input id="email" type="email" class="form-control"  value="{{ $user->email }}" placeholder="example@gmail.com" disabled>
                </div>
                <label for="role" class="col-md-2 col-form-label text-md-right">{{ __('Privilege') }}</label>

                <div class="col-md-4">
                    <select class="form-control" name="role_code" disabled>
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
                </div>
            </div>
            <hr>
            <p><small>Created at: {{ $user->created_at }}</small></p>
            <p><small>Created by: {{ ucfirst($user->wasCreatedBy->name) }}</small></p>
            <p><small>Last modified at: {{ $user->updated_at }}</small></p>
            <p><small>Last modified by: {{ ucfirst($user->wasUpdatedBy->name) }}</small></p>
    </div>
</div>
@endsection