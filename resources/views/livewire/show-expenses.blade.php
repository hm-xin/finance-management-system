<div x-data="{ checkAll : false }" class="overflow-hidden w-full overflow-x-auto rounded-sm border border-neutral-300 dark:border-neutral-700">
    <table class="w-full text-left text-sm text-neutral-600 dark:text-neutral-300">
        <thead class="border-b border-neutral-300 bg-neutral-50 text-sm text-neutral-900 dark:border-neutral-700 dark:bg-neutral-900 dark:text-white">
            <tr>
                {{-- for more input --}}
                <th scope="col" class="p-4">
                    <label for="checkAll" class="flex items-center text-neutral-600 dark:text-neutral-300 ">
                        <div class="relative flex items-center">
                            <input type="checkbox" x-model="checkAll" id="checkAll" class="before:content[''] peer relative size-4 appearance-none overflow-hidden rounded border border-neutral-300 bg-white before:absolute before:inset-0 checked:border-black checked:before:bg-black focus:outline-2 focus:outline-offset-2 focus:outline-neutral-800 checked:focus:outline-black active:outline-offset-0 dark:border-neutral-700 dark:bg-neutral-900 dark:checked:border-white dark:checked:before:bg-white dark:focus:outline-neutral-300 dark:checked:focus:outline-white" />
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" stroke="currentColor" fill="none" stroke-width="4" class="pointer-events-none invisible absolute left-1/2 top-1/2 size-3 -translate-x-1/2 -translate-y-1/2 text-neutral-100 peer-checked:visible dark:text-black">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/>
                            </svg>
                        </div>
                    </label>
                </th>
                <th scope="col" class="p-4">ID</th>
                <th scope="col" class="p-4">Name</th>
                <th scope="col" class="p-4">Amount</th>
                <th scope="col" class="p-4">Description</th>
                <th scope="col" class="p-4">Date Added</th>
                <th scope="col" class="p-4">Action</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-neutral-300 dark:divide-neutral-700">
            
                @foreach ($expenses as $expense)
                <tr>
                    <td class="p-4">
                        <label for="user2335" class="flex items-center text-neutral-600 dark:text-neutral-300 ">
                            <div class="relative flex items-center">
                                <input type="checkbox" id="user2335" class="before:content[''] peer relative size-4 appearance-none overflow-hidden rounded border border-neutral-300 bg-white before:absolute before:inset-0 checked:border-black checked:before:bg-black focus:outline-2 focus:outline-offset-2 focus:outline-neutral-800 checked:focus:outline-black active:outline-offset-0 dark:border-neutral-700 dark:bg-neutral-900 dark:checked:border-white dark:checked:before:bg-white dark:focus:outline-neutral-300 dark:checked:focus:outline-white" :checked="checkAll" />
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" stroke="currentColor" fill="none" stroke-width="4" class="pointer-events-none invisible absolute left-1/2 top-1/2 size-3 -translate-x-1/2 -translate-y-1/2 text-neutral-100 peer-checked:visible dark:text-black">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/>
                                </svg>
                            </div>
                        </label>
                    </td>
                    <td class="p-4"> {{ $expense->id}} </td>
                    <td class="p-4"> {{$expense->name}} </td>
                    <td class="p-4"> {{$expense->amount}} </td>
                    <td class="p-4"> {{$expense->description}} </td>
                    <td class="p-4"> {{$expense->created_at}} </td>
                    <td class="p-4"><a href="{{ route('createEditExpense', $expense->id) }}" type="button" class="cursor-pointer whitespace-nowrap rounded-sm bg-transparent p-0.5 font-semibold text-black outline-black hover:opacity-75 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 active:opacity-100 active:outline-offset-0 dark:text-white dark:outline-white">Edit</a></td>
                </tr>
                    
                @endforeach
        </tbody>
    </table>
</div>
