<div class="mt-8">


    <div>

        @if(count($sections) > 0)
        @foreach($sections as $section)
        <div class="flex justify-between bg-gray-100 mt-4 p-4 shadow-lg">
            <a href="#" class="text-lg font-bold">{{ $section->name }}</a>
            <a href="{{ route('section.posts', $section->id) }}" class="bg-purple-500 text-white rounded p-2">Ver Posts desse Tópico</a>
        </div>
        @endforeach
        @else
        <h2>Nenhum tópico encontrado....</h2>
        @endif
    </div>





</div>