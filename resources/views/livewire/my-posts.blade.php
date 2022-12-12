<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

            <div class="p-6 bg-white border-b border-gray-200">

                <livewire:button-previous-page :currentRoute="route('my.posts') " />

                @if (count($posts) > 0)
                <h1>
                    <div wire:poll>
                        @foreach ($posts as $post)
                        @php
                        $images = App\Models\Image::where('post_id', $post->id)->get();
                        @endphp
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pt-5">
                            <div class="bg-white  overflow-hidden shadow-sm sm:rounded-lg">
                                <div class="p-6 bg-white border-b border-gray-200">
                                    <div class="grid gap-5 break-all">
                                        <div class="text-lg ">
                                            <!-- {!! $post->body !!} -->
                                            <b>{{$post->title}}</b>
                                        </div>
                                        <!-- place-items-center -->
                                        <!-- <div class="grid grid-cols-2 gap-">
                        @if(count($images) > 0)
                        @foreach($images as $image)
                        <img src="{{ asset('storage/' . $image->image) }}" alt="" class="w-[300px] h-[290px]">
                        @endforeach

                        @endif

                      </div> -->
                                        <div class="flex justify-between">
                                            <a href="{{ route('messages', $post->user->id) }}" class="text-sm">{{ ucfirst($post->user->username) }}</a>
                                            <span class="text-lg font-thin">{{ $post->created_at->diffForHumans() }}</span>
                                        </div>

                                        <div class="flex justify-between">
                                            <div class="flex space-x-6">
                                                <svg wire:click="addLikeToPost({{ $post->id }})" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 cursor-pointer  @if ($post->userLikedPost()) text-blue-500 @endif">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.633 10.5c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 012.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 00.322-1.672V3a.75.75 0 01.75-.75A2.25 2.25 0 0116.5 4.5c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 01-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 00-1.423-.23H5.904M14.25 9h2.25M5.904 18.75c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 01-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 10.203 4.167 9.75 5 9.75h1.053c.472 0 .745.556.5.96a8.958 8.958 0 00-1.302 4.665c0 1.194.232 2.333.654 3.375z" />
                                                </svg> {{ $post->likes->count() }}

                                                <a href="{{ route('single.post', $post->id) }}">
                                                    <i class="fa-regular fa-eye" style="font-size: 20px;"></i>

                                                </a>
                                            </div>
                                            <div class="flex space-x-4">
                                                <a href="#" class="text-yellow-500 text-lg font-bold">Editar</a>
                                                <a href="#" class="text-red-700 text-lg font-bold">Deletar</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>




                </h1>
                @else
                <h2 class="text-2xl">Nenhum Post</h2>

                @endif
            </div>

        </div>

    </div>
</div>