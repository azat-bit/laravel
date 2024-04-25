<ul>
        @foreach ($list as $user)
            <li>{{ $user->name }} - {{ $user->email }}</li>
        @endforeach
    </ul>