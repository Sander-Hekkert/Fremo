 @php
        $usersArray = $users->toArray();
    @endphp

    <div class="d-flex flex-column align-items-center">

        @if(array_key_exists(2, $usersArray))
            <h2>Gebruikers</h2>
            @foreach($users[2] as $user) <!-- Loop door gebruikers met roles_id 2 -->
                <div class="card w-50 mb-3">
                    <div class="card-body d-flex justify-content-between align-items-start">
                        <div>
                            <h5 class="card-title">{{ $user->name }}</h5>
                            <p class="card-text">{{ $user->email }}</p>
                        </div>
                        <div>
                            <a href="{{ route('editUser', $user->id) }}" class="btn btn-primary">Profiel bewerken</a>
                            <form action="{{ route('deleteUser', $user->id) }}" method="POST" class="ml-2">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Profiel Verwijderen</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif

        @if(array_key_exists(2, $usersArray))
            <h2>Goedkeuren/Afkeuren</h2>
            @foreach($users[2] as $user) <!-- Loop door gebruikers met roles_id 2 -->
                <div class="card w-50 mb-3">
                    <div class="card-body d-flex justify-content-between align-items-start">
                        <div>
                            <h5 class="card-title">{{ $user->name }}</h5>
                            <p class="card-text">{{ $user->email }}</p>
                        </div>
                        <div>
                            <form action="{{ route('changeRole', $user->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-success">Accepteren</button>
                            </form>
                            <form action="{{ route('deleteUser', $user->id) }}" method="POST" class="ml-2">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Verwijderen</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>