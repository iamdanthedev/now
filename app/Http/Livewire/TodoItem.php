<?php

namespace App\Http\Livewire;

use App\ViewModel\TodoListItem;
use Livewire\Component;

class TodoItem extends Component
{
    public int $todoId;
    public string $text;
    public bool $done;

    private TodoListItem $todo;

    public function mount(TodoListItem $todo) {
        $this->todoId = $todo->id;
        $this->text = $todo->text;
        $this->done = $todo->done;
    }

    public function render()
    {
        return view('livewire.todo-item');
    }

    public function emitDone() {
        $this->emitUp('todoDone', $this->todoId, !$this->done);
    }
}
