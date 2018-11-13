<ul class="nav px-4 py-3 flex-column">
    <p>MAIN MENU</p>
    @can('view', App\User::class)
        <li class="nav-item">
            <a class="nav-link active" href="{{ route('users.index') }}">Privileges</a>
            <ul>
                @foreach ($roles as $role)
                    <li class="nav-item">
                    <a class="nav-link active" href="{{ route('users.index', ['role'=> $role->code]) }}">{{$role->name}} <span class="badge badge-primary text-white">{{ sizeof($role->users) }}</span></a>
                    </li>
                @endforeach
            </ul>
        </li>
    @endcan
    <li class="nav-item">
        <a class="nav-link" href="#">Posts</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('themes.index') }}">Themes</a>
    </li>
    <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
    </li>
</ul>

