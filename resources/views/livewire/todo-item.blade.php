<div class="todo-item">
    <div class="todo-item-tick">

        @if($done)
{{--            <i class="bi bi-check2"></i>--}}
            <i class="bi bi-check-circle" wire:click="emitDone"></i>
        @else
            <i class="bi bi-circle" wire:click="emitDone"></i>
        @endif
    </div>

    <div class="todo-item-title" style="text-decoration: {{  $done ? 'line-through' : 'default' }}">
        {{ $text }}
    </div>
</div>
