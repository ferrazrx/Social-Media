@extends('administration.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3">Users</h1>
        </div>
        <div class="col-2">
            <a class="d-block mt-3" href="{{ route('users.create') }}"><h1><i class="fas fa-plus-circle"></i></h1></a>
        </div>
    </div> 
    <hr>
    @if(session('success'))
        <div class="alert alert-success" role="alert">
            {{session('success')}}
        </div>
    @endif
    <div class="list-group">
    @forelse($users as $user)
        <div class="list-group-item list-group-item-action">
            <div class="row">
                <div class="col-10">
                    <span>{{ $user->name }}</span>
                    <span class="badge badge-secondary mx-2"><small>{{ $user->role->name }}</small></span>
                </div>
                <div class="col-2">
                        <a href="{{ route('users.show', ['id'=>$user->id]) }}"><i class="fas fa-user-tag text-success"></i></a>
                        <form class="d-inline-block" method="POST" action="{{ route('users.destroy', ['id'=>$user->id]) }}" onSubmit="return confirm('Are you sure you want to delete {{ $user->name }}?')">
                            @csrf
                            @method('DELETE')
                                <button class="none"><i class="fas fa-user-minus text-danger"></i></button>
                        </form>
                        <a href="{{ route('users.edit', ['id'=>$user->id]) }}"><i class="fas fa-user-edit text-info"></i></a>
                </div>
            </div>
        </div>
    @empty
        <div class="alert alert-warning" role="alert">
            No users found! Start adding some users here.
        </div>
    @endforelse
    </div>
</div>
@endsection