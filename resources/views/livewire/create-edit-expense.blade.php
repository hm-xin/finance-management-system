<div class="max-w-md mx-auto p-6 bg-white rounded-xl shadow-md space-y-4">
    {{-- @if (session()->has('success'))
        <div class="text-green-600 font-semibold">
            {{ session('success') }}
        </div>
    @endif --}}

    <form wire:submit.prevent="submit" x-data>
        <div class="flex w-full max-w-xs flex-col gap-1 text-neutral-600 dark:text-neutral-300">
            <label for="textInputDefault" class="w-fit pl-0.5 text-sm">Name</label>
            <input id="textInputDefault" type="text" class="w-full rounded-sm border border-neutral-300 bg-neutral-50 px-2 py-2 text-sm focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black disabled:cursor-not-allowed disabled:opacity-75 dark:border-neutral-700 dark:bg-neutral-900/50 dark:focus-visible:outline-white" name="name" placeholder="Enter your name" autocomplete="name"/>
        </div>

        <div class="flex w-full max-w-xs flex-col gap-1 text-neutral-600 dark:text-neutral-300">
            <label for="textInputDefault" class="w-fit pl-0.5 text-sm">Name</label>
            <input id="textInputDefault" type="text" class="w-full rounded-sm border border-neutral-300 bg-neutral-50 px-2 py-2 text-sm focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black disabled:cursor-not-allowed disabled:opacity-75 dark:border-neutral-700 dark:bg-neutral-900/50 dark:focus-visible:outline-white" name="name" placeholder="Enter your name" autocomplete="name"/>
        </div>

        <x-primary-button type="submit" class="mt-4 w-full bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700 transition">
            Submit
        </x-primary-button>
    </form>
</div>
