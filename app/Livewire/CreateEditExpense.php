<?php

namespace App\Livewire;

use Livewire\Component;

class CreateEditExpense extends Component
{

    public $name, $amount;

    protected $rules = [
        'name' => 'required|string|max:255',
        'amount' => 'required|numeric|min:0',
    ];
    public function submit(){
        $this->validate();

        // Save the expense to the database
        \App\Models\Expense::create([
            'name' => $this->name,
            'amount' => $this->amount,
        ]);

        // Reset the form fields
        $this->reset(['name', 'amount']);

        // Optionally, you can emit an event or redirect after saving
        session()->flash('message', 'Expense created successfully.');
    }

    public function render()
    {
        return view('livewire.create-edit-expense');
    }
}
