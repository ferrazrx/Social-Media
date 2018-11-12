@extends('administration.master')

@section('content')
<div class="container">
    <div class="col-md-12">
        <h1 class="mt-3">{{ $theme->name }}
            @if($theme->is_default) 
                <span class="badge badge-secondary mx-2"><small> Default <i class="fas fa-palette"></i></small></span>
            @endif
        </h1>
        <hr>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            @if(session('success'))
                <div class="alert alert-success" role="alert">
                    {{session('success')}}
                </div>
            @endif
            <div class="form-group row px-3">
                <p>{{ $theme->description }}</p>
            </div>
            <hr>
            <p><small>URL: {{ $theme->url }}</small></p>
            <p><small>Last Modify By: {{ ucfirst($theme->getLastModifier()->name) }}</small></p>
            <p><small>Created By: {{ ucfirst($theme->getCreator()->name) }}</small></p>
            <hr>
            <form class="d-inline" method="POST" action="{{ route('themes.update', ['id'=> $theme->id ]) }}">
                @csrf
                @method('PATCH')
                @if($theme->is_default)
                <button class="btn btn-success" disabled>This theme is being used as default.</button>
                @else
                <button class="btn btn-success">Set Default</button>
                @endif
            </form>
            @if(!$theme->is_default)
            <form class="d-inline" method="POST" action="{{ route('themes.update', ['id'=> $theme->id ]) }}" onSubmit="return confirm('Are you sure you want to delete {{ $theme->name }} theme?')">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">Delete Theme</button>
            </form>
            @endif
    </div>
</div>
@endsection