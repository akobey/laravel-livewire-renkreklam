<div>
    <x-slot name="title">
        {{ __('Kullanıcı Paneli') }}
    </x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Kullanıcı Düzenle') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6">

                    <form wire:submit.prevent="create">
                        @csrf

                        <div class="border border-gray-200 p-4">

                            <div class="mb-4">
                                <x-jet-label for="name" value="{{ __('Adı') }}"/>
                                <x-jet-input wire:model="name" class="block w-full mt-1" type="text" name="name"/>
                                @error('name') <p>{{ $message }}</p>@enderror
                            </div>

                            <div class="mb-4">
                                <x-jet-label for="email" value="{{ __('Email') }}"/>
                                <x-jet-input wire:model="email" class="block w-full mt-1" type="text" name="email"/>
                                @error('email') <p>{{ $message }}</p>@enderror
                            </div>

                            <div class="mb-4">
                                <x-jet-label for="password" value="{{ __('Parola') }}"/>
                                <x-jet-input wire:model="password" class="block w-full mt-1" type="password" name="password"/>
                                @error('password') <p>{{ $message }}</p>@enderror
                            </div>

                            <div class="mb-4">
                                <x-jet-label for="password_confirmation" value="{{ __('Parola Doğrula') }}"/>
                                <x-jet-input wire:model="password_confirmation" class="block w-full mt-1" type="password" name="password_confirmation"/>
                                @error('password_confirmation') <p>{{ $message }}</p>@enderror
                            </div>

                        </div>


                        <x-jet-button class="mt-12">
                            {{ __('Kaydet') }}
                        </x-jet-button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
