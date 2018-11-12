@extends('administration.master')

@section('content')
<div class="container">
    <h1 class="mt-3">Welcome!</h1>
    <hr>
    <h3>Users</h3>
    <div class="row">
        @foreach($roles as $role)
            <div class="col-md-3">
                <div class="border border-secondary p-3">
                <h1 class="text-center">{{ sizeof($role->users) }}</h1>
                <p class="text-center">{{ $role->name }}s</p>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection