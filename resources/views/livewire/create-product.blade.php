<div class="mt-16">
    <div class="mx-auto max-w-md px-6 py-12 bg-white border-0 shadow-lg sm:rounded-3xl">
        <h1 class="text-2xl font-bold mb-8 text-center p-4">Create Product</h1>
        <form id="form" novalidate wire:submit="saveProduct">
            <div class="relative z-0 w-full mb-10">
                <input type="text" name="name" wire:model='name' placeholder="Name..." required
                    class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200" />
                @error('name')
                    <span class="text-sm text-red-600" id="error">{{ $message }}</span>
                @enderror
            </div>

            <div class="relative z-0 w-full mb-10">
                <input type="quantity" wire:model='quantity' placeholder="Quantity.." required
                    class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200" />
                @error('quantity')
                    <span class="text-sm text-red-600" id="error">{{ $message }}</span>
                @enderror
            </div>

            <div class="relative z-0 w-full mb-10">
                <input type="file" accept="image/jpeg, image/png" name="image" placeholder="" wire:model='image'
                    class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200" />
                @error('image')
                    <span class="text-sm text-red-600" id="error">{{ $message }}</span>
                @enderror
                @if ($image)
                    <img src="{{ $image->temporaryUrl() }}" class="mt-2 h-20 block" alt="">
                @endif
                <div wire:loading wire:target="image">Uploading...</div>
            </div>

            <div class="relative z-0 w-full mb-10">
                <input type="number" accept="image/png, image/jpg" name="price" placeholder=" " wire:model='price'
                    required
                    class="pt-3 pb-2 pl-5 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200" />
                <div class="absolute top-0 left-0 mt-3 ml-1 text-gray-400">$</div>
                <label for="price"
                    @error('price')
                    <span class="text-sm text-red-600" id="error">{{ $message }}</span>
                @enderror
                    </div>

                    <button class="rounded-xl bg-indigo-500 p-4 w-32 hover:bg-gray-500 text-gray-200" id="button"
                        type="button" wire:click='saveProduct'>
                        Save Item
                    </button>
                    <button class="rounded-xl bg-indigo-500 p-4 w-32 hover:bg-gray-500 text-gray-200" id="button"
                        type="button" wire:click='saveProductGo'>
                        Save $ Go
                    </button>
                    <div wire:loading wire:target='saveProduct,saveProductGo'>
                        Saving product...
                    </div>
                    @if (session('success'))
                        <div>{{ session('success') }}</div>
                    @endif
        </form>
    </div>
</div>
