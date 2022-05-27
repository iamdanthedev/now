<x-layouts.app-layout>
    @auth
        <div>
            <div class="greeting">Hi, <strong>{{ Auth::user()->name }}</strong>!</div>

            <div>
                @livewire('todo-list')
            </div>
        </div>
    @else
        <x-signin-form />
    @endauth
</x-layouts.app-layout>
