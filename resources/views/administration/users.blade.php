@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row row-eq-height">
        <div class="col-md-3">
            @include('administration.navigation')
        </div>
        <div class="col-md-9">
            <div class="list-group">
            @forelse($users as $user)
                <a href="#" class="list-group-item list-group-item-action">
                    <span>{{ $user->name }}</span>
                    <span class="badge badge-secondary mx-2"><small>{{ $user->role->name }}</small></span>
                </a>
            @empty
                <div class="alert alert-warning" role="alert">
                    No users found! Start adding some users here.
                </div>
            @endforelse
            </div>
        </div>
    </div>
</div>
@endsection