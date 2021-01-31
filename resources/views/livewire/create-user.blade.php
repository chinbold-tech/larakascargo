<div id="form-create">
    <x-jet-form-section :submit="$action" class="mb-4">
        <x-slot name="title">
            {{ __('User') }}
        </x-slot>

        <x-slot name="description">
            {{ __('Lengkapi data berikut dan submit untuk membuat data user baru') }}
        </x-slot>

        <x-slot name="form">
            <div class="form-group col-span-6 sm:col-span-5">
                <x-jet-label for="firstname" value="{{ __('Firstname') }}" />
                <small>Ovgoo oruul</small>
                <x-jet-input id="firstname" type="text" class="mt-1 block w-full form-control shadow-none" wire:model.defer="user.firstname" />
                <x-jet-input-error for="user.firstname" class="mt-2" />
            </div>

            <div class="form-group col-span-6 sm:col-span-5">
                <x-jet-label for="lastname" value="{{ __('Lastname') }}" />
                <small>Neree oruul</small>
                <x-jet-input id="lastname" type="text" class="mt-1 block w-full form-control shadow-none" wire:model.defer="user.lastname" />
                <x-jet-input-error for="user.lastname" class="mt-2" />
            </div>

            <div class="form-group col-span-6 sm:col-span-5">
                <x-jet-label for="username" value="{{ __('Username') }}" />
                <small>User neree oruul</small>
                <x-jet-input id="username" type="text" class="mt-1 block w-full form-control shadow-none" wire:model.defer="user.username" />
                <x-jet-input-error for="user.lastname" class="mt-2" />
            </div>

            <div class="form-group col-span-6 sm:col-span-5">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" type="text" class="mt-1 block w-full form-control shadow-none" wire:model.defer="user.email" />
                <x-jet-input-error for="user.email" class="mt-2" />
            </div>

            @if ($action == "createUser")
            <div class="form-group col-span-6 sm:col-span-5">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <small>Minimal 8 karakter</small>
                <x-jet-input id="password" type="password" class="mt-1 block w-full form-control shadow-none" wire:model.defer="user.password" />
                <x-jet-input-error for="user.password" class="mt-2" />
            </div>

            <div class="form-group col-span-6 sm:col-span-5">
                <x-jet-label for="password_confirmation" value="{{ __('Konfirmasi Password') }}" />
                <small>Minimal 8 karakter</small>
                <x-jet-input id="password_confirmation" type="password" class="mt-1 block w-full form-control shadow-none" wire:model.defer="user.password_confirmation" />
                <x-jet-input-error for="user.password_confirmation" class="mt-2" />
            </div>
            @endif
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