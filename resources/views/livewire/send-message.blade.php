<div>
    <form class="pt-3 flex" wire:submit.prevent="store({{ $chatID }})">
        <!-- <input type="hidden" wire:model="receiverId" value="{{ request()->userID }}"> -->
        <input type="text" class="border w-full p-3 px-4 rounded-md" wire:model="message" placeholder="Message">
        <button class="bg-purple-500 text-white px-6 py-2">Enviar</button>
    </form>
</div>