<div id="form-create">
    <x-jet-form-section :submit="$action" class="mb-4">
        <x-slot name="title">
            {{ __('Захиалга') }}
        </x-slot>

        <x-slot name="description">
            {{ __('тайлбар') }}
        </x-slot>

        <x-slot name="form">
            <div class="form-group col-span-3 sm:col-span-3">
                <x-jet-label for="shipper_name" value="{{ __('shipper_name') }}" />
                <x-jet-input id="shipper_name" type="text" class="mt-1 block w-full form-control shadow-none" wire:model.defer="order.shipper_name" />
                <x-jet-input-error for="order.shipper_name" class="mt-2" />
            </div>

            <div class="form-group col-span-3 sm:col-span-3">
                <x-jet-label for="shipper_number" value="{{ __('shipper_number') }}" />
                <x-jet-input id="shipper_number" type="text" class="mt-1 block w-full form-control shadow-none" wire:model.defer="order.shipper_number" />
                <x-jet-input-error for="order.shipper_number" class="mt-2" />
            </div>
            
            <div class="form-group col-span-3 sm:col-span-3">
                <x-jet-label for="shipper_address" value="{{ __('shipper_address') }}" />
                <x-jet-input id="shipper_address" type="text" class="mt-1 block w-full form-control shadow-none" wire:model.defer="order.shipper_address" />
                <x-jet-input-error for="order.shipper_address" class="mt-2" />
            </div>

            <div class="form-group col-span-3 sm:col-span-3">
                <x-jet-label for="reciever_name" value="{{ __('reciever_name') }}" />
                <x-jet-input id="reciever_name" type="text" class="mt-1 block w-full form-control shadow-none" wire:model.defer="order.reciever_name" />
                <x-jet-input-error for="order.reciever_name" class="mt-2" />
            </div>

            <div class="form-group col-span-3 sm:col-span-3">
                <x-jet-label for="receiver_number" value="{{ __('receiver_number') }}" />
                <x-jet-input id="receiver_number" type="number" class="mt-1 block w-full form-control shadow-none" wire:model.defer="order.receiver_number" />
                <x-jet-input-error for="order.receiver_number" class="mt-2" />
            </div>

            <div class="form-group col-span-3 sm:col-span-3">
                <x-jet-label for="reciever_address" value="{{ __('reciever_address') }}" />
                <x-jet-input id="reciever_address" type="text" class="mt-1 block w-full form-control shadow-none" wire:model.defer="order.reciever_address" />
                <x-jet-input-error for="order.reciever_address" class="mt-2" />
            </div>

            <div class="form-group col-span-3 sm:col-span-3">
                <x-jet-label for="description" value="{{ __('description') }}" />
                <x-jet-input id="description" type="text" class="mt-1 block w-full form-control shadow-none" wire:model.defer="order.description" />
                <x-jet-input-error for="order.description" class="mt-2" />
            </div>

            <div class="form-group col-span-3 sm:col-span-3">
                <x-jet-label for="item_count" value="{{ __('item_count') }}" />
                <x-jet-input id="item_count" type="number" class="mt-1 block w-full form-control shadow-none" wire:model.defer="order.item_count" />
                <x-jet-input-error for="order.item_count" class="mt-2" />
            </div>

            <div class="form-group col-span-3 sm:col-span-3">
                <x-jet-label for="weight" value="{{ __('weight') }}" />
                <x-jet-input id="weight" type="number" class="mt-1 block w-full form-control shadow-none" wire:model.defer="order.weight" />
                <x-jet-input-error for="order.weight" class="mt-2" />
            </div>

            <div class="form-group col-span-3 sm:col-span-3">
                <x-jet-label for="is_delivery" value="{{ __('is_delivery') }}" />
                <x-jet-input id="is_delivery" type="number" class="mt-1 block w-full form-control shadow-none" wire:model.defer="order.is_delivery" />
                <x-jet-input-error for="order.is_delivery" class="mt-2" />
            </div>

            <div class="form-group col-span-3 sm:col-span-3">
                <x-jet-label for="ship_price" value="{{ __('ship_price') }}" />
                <x-jet-input id="ship_price" type="number" class="mt-1 block w-full form-control shadow-none" wire:model.defer="order.ship_price" />
                <x-jet-input-error for="order.ship_price" class="mt-2" />
            </div>

            <div class="form-group col-span-3 sm:col-span-3">
                <x-jet-label for="payment_method" value="{{ __('payment_method') }}" />
                <x-jet-input id="payment_method" type="text" class="mt-1 block w-full form-control shadow-none" wire:model.defer="order.payment_method" />
                <x-jet-input-error for="order.payment_method" class="mt-2" />
            </div>

            <div class="form-group col-span-3 sm:col-span-3">
                <x-jet-label for="kr_cash" value="{{ __('kr_cash') }}" />
                <x-jet-input id="kr_cash" type="number" class="mt-1 block w-full form-control shadow-none" wire:model.defer="order.kr_cash" />
                <x-jet-input-error for="order.kr_cash" class="mt-2" />
            </div>

            <div class="form-group col-span-3 sm:col-span-3">
                <x-jet-label for="kr_bank_account" value="{{ __('kr_bank_account') }}" />
                <x-jet-input id="kr_bank_account" type="number" class="mt-1 block w-full form-control shadow-none" wire:model.defer="order.kr_bank_account" />
                <x-jet-input-error for="order.kr_bank_account" class="mt-2" />
            </div>

            <div class="form-group col-span-3 sm:col-span-3">
                <x-jet-label for="kr_bank_detail" value="{{ __('kr_bank_detail') }}" />
                <x-jet-input id="kr_bank_detail" type="text" class="mt-1 block w-full form-control shadow-none" wire:model.defer="order.kr_bank_detail" />
                <x-jet-input-error for="order.kr_bank_detail" class="mt-2" />
            </div>

            <div class="form-group col-span-3 sm:col-span-3">
                <x-jet-label for="kr_total" value="{{ __('kr_total') }}" />
                <x-jet-input id="kr_total" type="number" class="mt-1 block w-full form-control shadow-none" wire:model.defer="order.kr_total" />
                <x-jet-input-error for="order.kr_total" class="mt-2" />
            </div>

            <div class="form-group col-span-3 sm:col-span-3">
                <x-jet-label for="mn_cash" value="{{ __('mn_cash') }}" />
                <x-jet-input id="mn_cash" type="number" class="mt-1 block w-full form-control shadow-none" wire:model.defer="order.mn_cash" />
                <x-jet-input-error for="order.mn_cash" class="mt-2" />
            </div>

            <div class="form-group col-span-3 sm:col-span-3">
                <x-jet-label for="mn_bank_account" value="{{ __('mn_bank_account') }}" />
                <x-jet-input id="mn_bank_account" type="number" class="mt-1 block w-full form-control shadow-none" wire:model.defer="order.mn_bank_account" />
                <x-jet-input-error for="order.mn_bank_account" class="mt-2" />
            </div>

            <div class="form-group col-span-3 sm:col-span-3">
                <x-jet-label for="mn_bank_detail" value="{{ __('mn_bank_detail') }}" />
                <x-jet-input id="mn_bank_detail" type="text" class="mt-1 block w-full form-control shadow-none" wire:model.defer="order.mn_bank_detail" />
                <x-jet-input-error for="order.mn_bank_detail" class="mt-2" />
            </div>

            <div class="form-group col-span-3 sm:col-span-3">
                <x-jet-label for="mn_total" value="{{ __('mn_total') }}" />
                <x-jet-input id="mn_total" type="number" class="mt-1 block w-full form-control shadow-none" wire:model.defer="order.mn_total" />
                <x-jet-input-error for="order.mn_total" class="mt-2" />
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
