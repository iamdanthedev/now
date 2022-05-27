<?php

namespace App\Http\Livewire;

use App\Models\Todo;
use App\ViewModel\TodoListItem;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class TodoList extends Component
{
    public $items = [];
    public string $newText = "";
    public bool $showAll = false;

    protected $listeners = ['todoDone' => 'setTodoDone'];


    public function mount() {
    }

    public function render()
    {
        Log::info("RENDERRRRRRRRRRRR");

        $todos = $this->showAll ? Todo::all() : Todo::where(['done' => false])->get();
        $this->items = [];

        foreach ($todos as $todo) {
            $this->items[] = new TodoListItem($todo->id, $todo->text, $todo->done);
        }

        Log::info($todos);

        $this->emit('todoListUpdated');

        return view('livewire.todo-list');
    }

    public function createTodo() {
        if (trim($this->newText) == "") {
            return;
        }

        $todo = Todo::create([
            'user_id' => Auth::user()->id,
            'text' => $this->newText,
            'done' => false,
            'created_at' => Carbon::now(),
        ]);

        $this->newText = "";

        Log::info("created todo");
        Log::info($todo);

        $this->emit('refreshComponent');
    }

    public function setTodoDone($todoId, $done) {
        Log::info("Set Todo Done");
        Log::info($todoId);

        Todo::where('id', $todoId)->update(['done' => $done]);
        $this->emit('refreshComponent');
    }

    public function toggleShowCompleted() {
        $this->showAll = !$this->showAll;
        $this->emit('refreshComponent');
    }
}
