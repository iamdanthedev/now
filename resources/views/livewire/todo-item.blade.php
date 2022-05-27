<div class="todo-item">
    <div class="todo-item-tick">
        <input class="form-check-input" type="radio" wire:click="emitDone" {{ $done ? "checked" : "" }}>
    </div>

    <div class="todo-item-title">
        {{ $text }}
    </div>
</div>
