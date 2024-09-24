<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create  Product') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">

                <section>
                    <header>
                        <p class="mt-1 text-sm text-gray-600">
                            {{ __("Create product information.") }}
                        </p>
                    </header>
            <div>
                @if($errors->any())
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>


                @endif
            </div>
            <form method="post" action="{{route('product.store')}}" class="mt-6 space-y-6">
                @csrf 
                @method('post')

                <div>
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" placeholder="Name" required autofocus autocomplete="name" />
                            <x-input-error class="mt-2" :messages="$errors->get('name')" />
                        </div>

                        <div>
                            <x-input-label for="qty" :value="__('Quantity')" />
                            <x-text-input id="qty" name="qty" type="text" class="mt-1 block w-full" placeholder="10" required autofocus autocomplete="qty" />
                            <x-input-error class="mt-2" :messages="$errors->get('qty')" />
                        </div>

                        <div>
                            <x-input-label for="price" :value="__('Price')" />
                            <x-text-input id="price" name="price" type="text" class="mt-1 block w-full" placeholder="0.00" required autofocus autocomplete="price" />
                            <x-input-error class="mt-2" :messages="$errors->get('price')" />
                        </div>



                        <div>
                            <x-input-label for="description" :value="__('Description')" />
                            <x-text-input id="description" name="description" type="text" class="mt-1 block w-full" placeholder="Description" required autofocus autocomplete="description" />
                            <x-input-error class="mt-2" :messages="$errors->get('description')" />
                        </div>

                        <div class="flex items-center gap-4">
                            <x-primary-button>{{ __('Save  New Product') }}</x-primary-button>
                        </div>



            </form>


            </section>                
</div>
</div>
</div>
</div>
</x-app-layout>