<x-app-layout>

    <!-- component -->
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg p-20 justify-center rounded-lg">
        <a id="button" type="button" wire:navigate.hover href="{{ route('create') }}"
            class="m-4 px-6 py-3 mt-3 text-lg hover:bg-zinc-500 text-white transition-all duration-150 ease-linear rounded-lg shadow outline-none bg-sky-500 hover:shadow-lg focus:outline-none">Add</a>

            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
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
                  {{-- @php
                    $count=1;
                  @endphp --}}
                  @foreach ($items as $item)
                    <livewire:ItemList :item="$item" :key="$item->id"/>
                  @endforeach
                </tbody>
            </table>

    </div>

</x-app-layout>
