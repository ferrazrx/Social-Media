@extends('administration.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h1 class="mt-3">
                {{ isSet($role) ? $role->name : 'All Users' }}
            </h1>
        </div>
        <div class="col-md-4 mt-3">
            <form action="{{ route('users.search') }}" method="GET" >
                <div class="input-group">
                    <input type="text" class="form-control" name="term" placeholder="Search..." value='{{ isSet($term) ? $term : null }}''> 
                    <span class="input-group-btn">
                        <button class="btn btn-info">
                            <i class="fas fa-search text-white border"></i>
                        </button>
                    </span>
                </div>
            </form>
        </div>
        @can('create', App\User::class)
            <div class="col-md-2">
                <a class="d-block mt-3" href="{{ route('users.create') }}"><h1><i class="fas fa-plus-circle"></i></h1></a>
            </div>
        @endcan
    </div> 
    <hr>
    @if(session('success'))
        <div class="alert alert-success" role="alert">
            {{session('success')}}
        </div>
    @endif
    @if(isSet($term))
        <div class="alert alert-success" role="alert">
            The term "{{ $term }}" returned the results below:
        </div>
    @endif
    <div class="list-group">
    @forelse($users as $user)
        <div class="list-group-item list-group-item-action">
            <div class="row">
                <div class="col-10">
                    <span>{{ $user->name }}</span>
                    @foreach ($user->roles as $role)
                    <span class="badge badge-secondary mx-2"><small>{{ $role->name }}</small></span>
                    @endforeach
                </div>
                @can('update', $user)
                <div class="col-2">
                        <a href="{{ route('users.show', ['id'=>$user->id]) }}"><i class="fas fa-user-tag text-success"></i></a>
                        <form class="d-inline-block" method="POST" action="{{ route('users.destroy', ['id'=>$user->id]) }}" onSubmit="return confirm('Are you sure you want to delete {{ $user->name }}?')">
                            @csrf
                            @method('DELETE')
                                <button class="none"><i class="fas fa-user-minus text-danger"></i></button>
                        </form>
                        <a href="{{ route('users.edit', ['id'=>$user->id]) }}"><i class="fas fa-user-edit text-info"></i></a>
                </div>
                @endcan
            </div>
        </div>
    @empty
        <div class="alert alert-warning" role="alert">
            No users found! If you want, you can start adding some users <a href="{{ route('users.create') }}">here</a>.
        </div>
    @endforelse
        <div class="d-block mx-auto p-3">
            @if(isSet($role))
            {{ $users->appends(['role' => $role->code])->links() }}
            @elseif(isSet($term))
            {{ $users->appends(['term' => $term])->links() }}
            @endif
        </div>
    </div>
</div>
@endsection