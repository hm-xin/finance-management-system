<div class="max-w-md mx-auto p-6 bg-white rounded-xl shadow-md space-y-4">
    @if (session()->has('success'))
        <div class="text-green-600 font-semibold">
            {{ session('success') }}
        </div>
    @endif
        <h1>Add new Expense</h1>
    <form wire:submit.prevent="submit" x-data>
        <div class="flex w-full max-w-xs flex-col gap-1 text-neutral-600 dark:text-neutral-300">
            <x-input-label for="textInputDefault" class="w-fit pl-0.5 text-sm">Name</x-input-label>
            <x-text-input id="textInputDefault" type="text" class="w-full rounded-sm border border-neutral-300 bg-neutral-50 px-2 py-2 text-sm focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black disabled:cursor-not-allowed disabled:opacity-75 dark:border-neutral-700 dark:bg-neutral-900/50 dark:focus-visible:outline-white" name="name" placeholder="Enter your name" autocomplete="name" wire:model="name" id="name"/>
        </div>

        <div class="flex w-full max-w-xs flex-col gap-1 text-neutral-600 dark:text-neutral-300 mt-2">
            <x-input-label for="textInputDefault" class="w-fit pl-0.5 text-sm">Amount</x-input-label>
            <x-text-input id="textInputDefault" type="number" class="w-full rounded-sm border border-neutral-300 bg-neutral-50 px-2 py-2 text-sm focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black disabled:cursor-not-allowed disabled:opacity-75 dark:border-neutral-700 dark:bg-neutral-900/50 dark:focus-visible:outline-white" name="amount" placeholder="Enter Amount" wire:model="amount" id="amount"/>
        </div>
        <div class="flex w-full max-w-xs flex-col gap-1 text-neutral-600 dark:text-neutral-300 mt-2">
            <x-input-label for="textInputDefault" class="w-fit pl-0.5 text-sm">Description</x-input-label>
            <x-text-input id="textInputDefault" type="text" class="w-full rounded-sm border border-neutral-300 bg-neutral-50 px-2 py-2 text-sm focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black disabled:cursor-not-allowed disabled:opacity-75 dark:border-neutral-700 dark:bg-neutral-900/50 dark:focus-visible:outline-white" name="description" placeholder="Enter Description" wire:model="description" id="description"/>
        </div>

        <div class="flex items-center gap-4 mt-2">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            <x-action-message class="me-3" on="password-updated">
                {{ __('Saved.') }}
            </x-action-message>
        </div>
    </form>
</div>
