<?php

namespace App\Http\Livewire;

use App\ViewModel\TodoListItem;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class TodoItem extends Component
{
    public int $todoId;
    public string $text;
    public bool $done;

    protected $listeners = ['todoListUpdated' => 'rerender'];

    private TodoListItem $todo;

    public function mount(int $todoId, string $text, bool $done) {
        Log::info("TodoItem {$todoId} mount");
        $this->todoId = $todoId;
        $this->text = $text;
        $this->done = $done;
    }

    public function render()
    {
        return view('livewire.todo-item');
    }

    public function emitDone() {
        $this->emitUp('todoDone', $this->todoId, !$this->done);
    }

    public function rerender() {
        Log::info('rerender');
        $this->emit('refreshComponent');
    }
}
