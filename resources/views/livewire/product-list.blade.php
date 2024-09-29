<div class="mt-9">
    <a href="{{ route('create') }}" wire:navigate.hover
        class="rounded-xl bg-indigo-500 ml-10 p-4 w-32 h-10 text-gray-200">Add Product</a>
    <table class="m-4 w-full text-sm  text-center  rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    #
                </th>
                <th scope="col" class="px-6 py-3">
                    Product
                </th>
                <th scope="col" class="px-16 py-3">
                    Image
                </th>
                <th scope="col" class="px-6 py-3">
                    Qty
                </th>
                <th scope="col" class="px-6 py-3">
                    Price
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @php
                $counter = 1;
            @endphp
            @foreach ($items as $item)
                <tr
                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-500 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td class="px-6 py-4 font-semibold">
                        {{ $counter++ }}
                    </td>
                    <td class="px-6 py-4 font-semibold">
                        {{ $item->name }}
                    </td>
                    <td class="p-4">
                        <img src="{{ asset('storage/' . $item->image) }}" class="w-16 md:w-32 max-w-full max-h-full"
                            alt="Apple Watch">
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex">
                            <button
                                class="inline-flex justify-center p-1 me-3 text-sm font-medium h-6 w-6 text-gray-500 bg-white border border-gray-300 rounded-full focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"
                                type="button">
                                <span class="sr-only">Quantity button</span>
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 18 2">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 1h16" />
                                </svg>
                            </button>
                            <div>
                                <input type="number" id="first_product" value="{{ $item->quantity }}"
                                    class="bg-gray-50 border border-gray-300 w-32 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block px-2.5 py-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="1" required />
                            </div>
                            <button
                                class="inline-flex justify-center h-6 w-6 p-1 ms-3 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-full focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"
                                type="button">
                                <span class="sr-only">Quantity button</span>
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 18 18">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 1v16M1 9h16" />
                                </svg>
                            </button>
                        </div>
                    </td>
                    <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                        {{ $item->price }}
                    </td>
                    <td class="px-6 py-4">
                        <a type="button" href="{{ route('edit', $item->id) }}" wire:navigate
                            class="font-medium text-red-600 dark:text-white hover:text-gray-500 hover:border-4 hover:border-x-amber-600 gap-5 pr-4">Edit</a>
                        <button type="button" wire:confirm="sure to delete this?"
                            wire:click="deleteProduct({{ $item->id }})"
                            class="font-medium text-red-600 dark:text-red-500 hover:text-white">Remove</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

