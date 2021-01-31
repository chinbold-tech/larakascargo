<div id="form-create">
    <x-jet-form-section :submit="$action" class="mb-4">
        <x-slot name="title">
            {{ __('Customer') }}
        </x-slot>

        <x-slot name="description">
            {{ __('Lengkapi data berikut dan submit untuk membuat data customer baru') }}
        </x-slot>

        <x-slot name="form">
            <div class="form-group col-span-6 sm:col-span-5">
                <x-jet-label for="firstname" value="{{ __('Firstname') }}" />
                <small>Ovgoo oruul</small>
                <x-jet-input id="firstname" type="text" class="mt-1 block w-full form-control shadow-none" wire:model.defer="customer.firstname" />
                <x-jet-input-error for="customer.firstname" class="mt-2" />
            </div>

            <div class="form-group col-span-6 sm:col-span-5">
                <x-jet-label for="lastname" value="{{ __('Lastname') }}" />
                <small>Neree oruul</small>
                <x-jet-input id="lastname" type="text" class="mt-1 block w-full form-control shadow-none" wire:model.defer="customer.lastname" />
                <x-jet-input-error for="customer.lastname" class="mt-2" />
            </div>

            <div class="form-group col-span-6 sm:col-span-5">
                <x-jet-label for="number" value="{{ __('Number') }}" />
                <small>Number neree oruul</small>
                <x-jet-input id="number" type="text" class="mt-1 block w-full form-control shadow-none" wire:model.defer="customer.number" />
                <x-jet-input-error for="customer.number" class="mt-2" />
            </div>
            
            <div class="form-group col-span-6 sm:col-span-5">
                <x-jet-label for="address" value="{{ __('Address') }}" />
                <small>Addressee  oruul</small>
                <x-jet-input id="address" type="text" class="mt-1 block w-full form-control shadow-none" wire:model.defer="customer.address" />
                <x-jet-input-error for="customer.address" class="mt-2" />
            </div>

            <div class="form-group col-span-6 sm:col-span-5">
                <x-jet-label for="description" value="{{ __('description') }}" />
                <small>descriptionoo  oruul</small>
                <x-jet-input id="description" type="text" class="mt-1 block w-full form-control shadow-none" wire:model.defer="customer.description" />
                <x-jet-input-error for="customer.description" class="mt-2" />
            </div>

            <div class="form-group col-span-6 sm:col-span-5">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" type="text" class="mt-1 block w-full form-control shadow-none" wire:model.defer="customer.email" />
                <x-jet-input-error for="customer.email" class="mt-2" />
            </div>

        </x-slot>

        <x-slot name="actions">
            <x-jet-action-message class="mr-3" on="saved">
                {{ __($button['submit_response']) }}
            </x-jet-action-message>

            <x-notify-message on="saved" type="success" :message="__($button['submit_response_notyf'])" />

            <x-jet-button>
                {{ __($button['submit_text']) }}
            </x-jet-button>
        </x-slot>
    </x-jet-form-section>
</div>
