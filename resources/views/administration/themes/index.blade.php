@extends('administration.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3">Themes</h1>
        </div>
        <div class="col-2">
            <a class="d-block mt-3" href="{{ route('themes.create') }}"><h1><i class="fas fa-plus-circle"></i></h1></a>
        </div>
    </div> 
    <hr>
    @if(session('success'))
        <div class="alert alert-success" role="alert">
            {{session('success')}}
        </div>
    @endif
    <div class="list-group">
    @forelse($themes as $theme)
        <div class="list-group-item list-group-item-action">
            <div class="row">
                <div class="col-10">
                    <span>{{ $theme->name }}</span>
                    @if($theme->is_default)
                    <span class="badge badge-secondary mx-2"><small> Default <i class="fas fa-palette"></i></small></span>
                    @endif
                    
                </div>
                <div class="col-2">
                    <a href="{{ route('themes.show', ['id'=>$theme->id]) }}"><i class="fas fa-fill-drip"></i></a>
                </div>
            </div>
        </div>
    @empty
        <div class="alert alert-warning" role="alert">
            No users found! Start adding some users here.
        </div>
    @endforelse
    {{ $themes->links() }}
    </div>
</div>
@endsection