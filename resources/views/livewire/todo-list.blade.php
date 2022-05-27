<div class="todo-list">
    @empty($items)
        <div>Add some todos..</div>
    @else
        <div>
            <div class="todo-list-show-all">
                @if($showAll)
                    <span wire:click.debounce="toggleShowCompleted">Hide completed</span>
                @else
                    <span wire:click.debounce="toggleShowCompleted">Show completed</span>
                @endif
            </div>

            @foreach($items as $item)
                <livewire:todo-item :todo="$item" :wire:key="$item->id"></livewire:todo-item>
            @endforeach
        </div>
    @endempty


    <div class="todo-input-wrapper">
        <input
            type="text"
            class="todo-input"
            id="todoInput"
            placeholder="Type and hit enter to save"
            wire:model.lazy="newText"
            wire:keydown.enter="createTodo">
    </div>
</div>
