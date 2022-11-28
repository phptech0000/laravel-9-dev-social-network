<div class="mt-8">


    <div>
        <h1 class="text-gray-700 text-2xl">Amigos:</h1>

        @foreach($myFriends as $user)
        <div class="flex justify-between bg-gray-100 mt-4 p-4 shadow-lg">
            <a href="{{ route('user.posts', $user->id) }}" class="text-lg font-bold">{{ $user->username }}</a>
            <a href="{{ route('messages', $user->id) }}" class="bg-purple-500 text-white rounded p-2">Iniciar Chat</a>
            <!-- <a href="{{ route('make-friendship', $user->id) }}" class="bg-green-300 text-white p-2">Adicionar Amigo</a> -->
        </div>
        @endforeach
    </div>





</div>