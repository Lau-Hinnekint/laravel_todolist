<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contact list') }}
        </h2>
    </x-slot>

    <x-contacts-card>
        <div class="text-center px-36">
            <h3 class="font-semibold text-xl text-gray-800 pt-2">@lang('Last name')</h3>
            <p>{{ $contact->last_name }}</p>
            <h3 class="font-semibold text-xl text-gray-800 pt-2">@lang('First name')</h3>
            <p>{{ $contact->first_name }}</p>
            <h3 class="font-semibold text-xl text-gray-800 pt-2">@lang('Phone')</h3>
            <p>{{ $contact->phone }}</p>
            <h3 class="font-semibold text-xl text-gray-800 pt-2">Email</h3>
            <p>{{ $contact->email }}</p>
            <h3 class="font-semibold text-xl text-gray-800 pt-2">@lang('Date creation')</h3>
            <p>{{ $contact->created_at->format('d/m/Y') }}</p>
            @if($contact->created_at != $contact->updated_at)
            <h3 class="font-semibold text-xl text-gray-800 pt-2">@lang('Last update')</h3>
            <p>{{ $contact->updated_at->format('d/m/Y') }}</p>
            @endif
        </div>
    </x-contacts-card>
</x-app-layout>