<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contact list') }}
        </h2>
    </x-slot>

    <x-contacts-card>

        <!-- Success message -->
        @if (session()->has('message'))
        <div class="mt-3 mb-4 list-disc list-inside text-sm text-green-600">
            {{ session('message') }}
        </div>
        @endif

        <form action="{{ route('contacts.update', $contact->id) }}" method="post">
            @csrf
            @method('put')

            <!-- Last name -->
            <div>
                <x-input-label for="last_name" :value="__('Last name')" />

                <x-text-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name', $contact->last_name)" required autofocus />

                <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
            </div>
            <!-- First name -->
            <div class="mt-4">
                <x-input-label for="first_name" :value="__('First name')" />

                <x-textarea class="block mt-1 w-full" id="first_name" name="first_name">{{ old('first_name', $contact->first_name) }}</x-textarea>

                <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
            </div>
            <!-- Phone -->
            <div class="mt-4">
                <x-input-label for="phone" :value="__('Phone')" />

                <x-textarea class="block mt-1 w-full" id="phone" name="phone">{{ old('phone', $contact->phone) }}</x-textarea>

                <x-input-error :messages="$errors->get('phone')" class="mt-2" />
            </div>
            <!-- Email -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />

                <x-textarea class="block mt-1 w-full" id="email" name="email">{{ old('email', $contact->email) }}</x-textarea>

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-primary-button class="ml-3">
                    {{ __('Send') }}
                </x-primary-button>
            </div>
        </form>

    </x-contacts-card>
</x-app-layout>