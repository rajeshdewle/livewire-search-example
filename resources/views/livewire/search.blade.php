<div>
    <input type="text" placeholder="Search users" class="border w-full mt-12 p-6 mw-xl mx-auto" wire:model="query"
        wire:keydown.arrow-down="down" wire:keydown.arrow-up="up" wire:keydown.enter="selectUser">

    <ul>
        @if (!empty($query))
        @if (count($users) >= 1)
        @foreach ($users as $user)
        <li class="p-2 hover:bg-blue-100 {{ $current === $loop->index ? 'bg-blue-100' : ''}}">
            <a href="/profile/{{ $user->id }}">{{ $user->name }}</a>
        </li>
        @endforeach
        @endif
        @endif
    </ul>
</div>