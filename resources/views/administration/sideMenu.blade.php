<ul class="nav px-4 py-3 flex-column">
    <p class="text-white">MAIN MENU</p>
    <li class="nav-item text-white">
        <a class="nav-link active text-white" href="{{ route('users.index') }}">Privileges</a>
        <ul>
            @foreach ($roles as $role)
                <li class="nav-item">
                <a class="nav-link active text-white" href="{{ route('users.index', ['role'=> $role->code]) }}">{{$role->name}} <span class="badge badge-primary text-white">{{ sizeof($role->users) }}</span></a>
                </li>
            @endforeach
        </ul>
    </li>
    <li class="nav-item">
        <a class="nav-link text-white" href="#">Posts</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-white" href="#">Themes</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-white disabled" href="#">Disabled</a>
    </li>
</ul>

