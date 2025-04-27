<?php

namespace App\Livewire;

use Livewire\Component;

class CreateEditExpense extends Component
{
    public $id, $name, $amount, $description;

    protected $rules = [
        'name' => 'required|string|max:255',
        'amount' => 'required|numeric|min:0',
        'description' => 'nullable|string|max:1000',
    ];

    public function mount($id = null)
    {
        if ($id) {
            // If ID is passed, fetch the expense for editing
            $expense = CreateEditExpense::find($id);

            if ($expense) {
                $this->id = $expense->id;
                $this->name = $expense->name;
                $this->amount = $expense->amount;
                $this->description = $expense->description;
            }
        }
    }

    public function submit()
    {
        $this->validate();

        // If $this->id exists, update the expense, otherwise create a new one
        CreateEditExpense::updateOrCreate(
            ['id' => $this->id], // If ID exists, update it, otherwise create a new one
            [
                'name' => $this->name,
                'amount' => $this->amount,
                'description' => $this->description,
            ]
        );

        session()->flash('message', $this->id ? 'Expense updated successfully.' : 'Expense created successfully.');
        
        $this->reset(); // Reset the form after submission
    }

    public function render()
    {
        return view('livewire.create-edit-expense');
    }
}
