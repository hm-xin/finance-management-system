<?php

namespace App\Livewire;

use Livewire\Component;

class CreateEditExpense extends Component
{

    public $name, $amount, $description;

    protected $rules = [
        'name' => 'required|string|max:255',
        'amount' => 'required|numeric|min:0',
        'description' => 'nullable|string|max:1000',
    ];
    public function submit(){
        $this->validate();

        // Save the expense to the database
        \App\Models\Expense::create([
            'name' => $this->name,
            'amount' => $this->amount,
            'description' => $this->description,
        ]);
        // Reset the form fields
        $this->reset(['name', 'amount', 'description']);

        // Optionally, you can emit an event or redirect after saving
        session()->flash('message', 'Expense created successfully.');
    }

    public function render()
    {
        return view('livewire.create-edit-expense');
    }
}
