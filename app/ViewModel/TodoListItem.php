<?php

namespace App\ViewModel;

class TodoListItem {
    public int $id;
    public string $text;
    public bool $done;

    public function __construct(int $id, string $text, bool $done)
    {
        $this->id = $id;
        $this->text = $text;
        $this->done = $done;
    }
}
