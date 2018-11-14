@extends('administration.master')

@section('content')
<div class="container">
        <div class="col-md-12">
            <h1 class="mt-3">{{ __('Create New Theme') }}</h1>
            <hr>
            <form method="POST" action="{{ route('themes.store') }}">
                @csrf
                <div class="form-group row">
                    <label for="name" class="col-md-2 col-form-label text-md-right">{{ __('Name') }}</label>

                    <div class="col-md-10">
                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="Theme..." required autofocus >

                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="local_url" class="col-md-2 col-form-label text-md-right">{{ __('Local URL') }}</label>

                    <div class="col-md-4">
                        <input id="local_url" type="text" class="form-control{{ $errors->has('local_url') ? ' is-invalid' : '' }}" name="local_url" value="{{ old('local_url') }}" placeholder="img/default/default.min.css">

                        @if ($errors->has('local_url'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('local_url') }}</strong>
                            </span>
                        @endif
                    </div>
                    <label for="cdn_url" class="col-md-2 col-form-label text-md-right">{{ __('CDN URL') }}</label>
                    <div class="col-md-4">
                        <input id="cdn_url" type="text" class="form-control{{ $errors->has('cdn_url') ? ' is-invalid' : '' }}" name="cdn_url" value="{{ old('cdn_url') }}" placeholder="http://img/default/default.min.css">
                        @if ($errors->has('cdn_url'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('cdn_url') }}</strong>
                            </span>
                        @endif
                    </div>
            
                </div>

                <div class="form-group row">
                    <label for="description" class="col-md-2 col-form-label text-md-right">{{ __('Description') }}</label>
                    <div class="col-md-10">
                        <textarea class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" id="description" name="description" placeholder="Brief description...">{{ old('description')}}</textarea>
                    </div>
                </div>
        
                <button type="submit" class="btn btn-primary d-block mx-auto mt-5">
                    {{ __('Create Theme') }}
                </button>
            </form>
    </div>
</div>
@endsection