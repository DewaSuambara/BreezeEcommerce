<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit User') }}
        </h2>
    </x-slot>

{{-- {{ $user }} --}}
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- component -->
            <div class="mx-auto w-full max-w-[550px] bg-white">
                <form class="py-6 px-9" action="{{ route('admin.users.update', $user->id) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="mb-5">
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input id="name" class="block mt-2 w-full" type="text" name="name"
                            :value="old('name', $user->name)" autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <div class="mb-5">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-2 w-full" type="text" name="email" :value="old('email', $user->email)"
                            autocomplete="email" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div class="flex justify-center">

                        <a href="{{ route('admin.users.index') }}" class="hover:shadow-form w-full rounded-md bg-[#000000] py-3 px-8 text-center text-base font-semibold text-white outline-none mx-2 ">Batal</a>

                        <button type="submit"
                            class="hover:shadow-form w-full rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none mx-2">
                            Update
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>