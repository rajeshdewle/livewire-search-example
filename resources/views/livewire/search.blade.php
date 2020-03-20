<div>
    <input type="text" placeholder="Search users" class="border w-full mt-12 p-6 mw-xl mx-auto" wire:model="query">

    <ul>
        @if (!empty($query))
            @if (count($users) >= 1)
                @foreach ($users as $user)
                    <li class="p-2">{{ $user->name }}</li>
                @endforeach
            @endif
        @endif
    </ul>
</div>