<div>
    <div class="mx-auto max-w-md px-6 py-12 bg-white border-0 shadow-lg sm:rounded-3xl">
        <h1 class="text-2xl font-bold mb-8 text-center p-4">Create Product</h1>
        <form id="form" novalidate wire:submit="saveProduct">
            <div class="relative z-0 w-full mb-10">
                <input type="text" name="name" wire:model='name' placeholder=" " required
                    class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200" />
                <label for="name" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Product's
                    name</label>
                @error('name')
                    <span class="text-sm text-red-600" id="error">{{ $message }}</span>
                @enderror
            </div>

            <div class="relative z-0 w-full mb-10">
                <input type="quantity" name="quantity" wire:model='quantity' placeholder=" " required
                    class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200" />
                <label for="quantity" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Quantity</label>
                @error('quantity')
                    <span class="text-sm text-red-600" id="error">{{ $message }}</span>
                @enderror
            </div>

            <div class="relative z-0 w-full mb-10">
                <input type="file" name="image" placeholder=" " wire:model='image'
                    class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200" />
                <label for="image" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Image</label>
                @error('image')
                    <span class="text-sm text-red-600" id="error">{{ $message }}</span>
                @enderror
                @if ($image)
                    <img src="{{ $image->temporaryUrl() }}" class="mt-2 h-20 block" alt="">
                @endif
            </div>

            <div class="relative z-0 w-full mb-10">
                <input type="number" accept="image/png, image/jpg" name="price" placeholder=" " wire:model='price'
                    required
                    class="pt-3 pb-2 pl-5 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200" />
                <div class="absolute top-0 left-0 mt-3 ml-1 text-gray-400">$</div>
                <label for="price"
                    class="absolute duration-300 top-3 left-5 -z-1 origin-0 text-gray-500">Price</label>
                @error('price')
                    <span class="text-sm text-red-600" id="error">{{ $message }}</span>
                @enderror

            </div>

            <button id="button" type="button" wire:click='saveProduct'
                class="w-full px-6 py-3 mt-3 text-lg text-white transition-all duration-150 ease-linear rounded-lg shadow outline-none bg-pink-500 hover:bg-pink-600 hover:shadow-lg focus:outline-none">
                Save Item
            </button>
            <div wire:loading>
                Saving post...
            </div>
        </form>
    </div>
</div>
