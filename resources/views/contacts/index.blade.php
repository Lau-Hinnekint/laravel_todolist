<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @lang('Contact list')
        </h2>
    </x-slot>

    <x-contacts-add>
        <h2 class="text-center"> @lang("Add contact") </h2>

        <form id="contactForm" action="{{ route('contacts.create') }}" method="post">
            @csrf
            @method('get')

            <div class="flex w-full">
                <!-- Last name -->
                <div class="mt-4 px-4">
                    <x-input-label for="last_name" :value="__('Last name')" />
                    <x-text-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')" required autofocus />
                    <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
                </div>

                <!-- First name -->
                <div class="mt-4 px-4">
                    <x-input-label for="first_name" :value="__('First name')" />
                    <x-text-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" :value="old('first_name')" required autofocus />
                    <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
                </div>

                <!-- Phone -->
                <div class="mt-4 px-4">
                    <x-input-label for="phone" :value="__('Phone')" />
                    <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required autofocus />
                    <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                </div>

                <!-- Email -->
                <div class="mt-4 px-4">
                    <x-input-label for="email" value="Email" />
                    <x-text-input id="email" class="block mt-1 w-full" type="text" name="email" :value="old('email')" required autofocus />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div id="addContact" class="mt-auto py-1">
                    <x-primary-button>
                        {{ __('Add') }}
                    </x-primary-button>
                </div>
            </div>

        </form>

        <div id="successMessage" style="display: none; color: green;">Contact ajouté avec succès!</div>
        <div id="errorMessage" style="display: none; color: red;">Le contact n'a pas pu être ajouté</div>
    </x-contacts-add>

    <x-contacts-card>
        <table>
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-2 py-2 text-xs text-gray-500">#</th>
                    <th class="px-2 py-2 text-xs text-gray-500">@lang('Last name')</th>
                    <th class="px-2 py-2 text-xs text-gray-500">@lang('First name')</th>
                    <th class="px-2 py-2 text-xs text-gray-500">@lang('Phone')</th>
                    <th class="px-2 py-2 text-xs text-gray-500">Email</th>
                    <th class="px-2 py-2 text-xs text-gray-500"></th>
                    <th class="px-2 py-2 text-xs text-gray-500"></th>
                    <th class="px-2 py-2 text-xs text-gray-500"></th>
                </tr>
            </thead>
            <tbody class="bg-white">
                @foreach($contacts as $contact)
                <tr class="whitespace-nowrap">
                    <td class="px-4 py-4 text-sm text-gray-500">{{ $contact->id }}</td>
                    <td class="px-4 py-4">{{ $contact->last_name }}</td>
                    <td class="px-4 py-4">{{ $contact->first_name }}</td>
                    <td class="px-4 py-4">{{ $contact->phone }}</td>
                    <td class="px-4 py-4">{{ $contact->email }}</td>
                    <x-link-button href="{{ route('contacts.show', $contact->id) }}">
                        @lang('Show')
                    </x-link-button>
                    <x-link-button href="{{ route('contacts.edit', $contact->id) }}">
                        @lang('Edit')
                    </x-link-button>
                    <x-link-button onclick="event.preventDefault(); document.getElementById('destroy{{ $contact->id }}').submit();">
                        @lang('Delete')
                    </x-link-button>
                    <form id="destroy{{ $contact->id }}" action="{{ route('contacts.destroy', $contact->id) }}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
                </tr>
                @endforeach
            </tbody>
        </table>
    </x-contacts-card>

</x-app-layout>