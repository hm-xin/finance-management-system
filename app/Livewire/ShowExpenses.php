<?php

namespace App\Livewire;

use App\Models\Expense;
use Livewire\Component;

class ShowExpenses extends Component
{
    public $expenses;

    public function render()
    {
        $this->expenses = Expense::all();
        return view('livewire.show-expenses', compact('expenses'));
    }
}
