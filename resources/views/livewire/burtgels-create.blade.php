<x-jet-modal>
    <form>
        <div class="px-6 py-4">
            <div class="text-lg">
                @if($burtgel_id != null) 
                    Карго бүртгэл засах
                @else
                    Карго шинээр бүртгэх
                @endif
            </div>

            <div class="mt-1">

                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="grid grid-cols-12 gap-6">
                        <div class="col-span-6 sm:col-span-6">
                        <div class="form-group">
                            <label>Илгээгчийн нэр</label>
                            <input autocomplete="off" type="text" class="form-control" wire:model="shipper_name">
                            @error('shipper_name') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        </div>
                        <div class="col-span-6 sm:col-span-6">
                            <label>Илгээгчийн утас</label>
                            <input autocomplete="off" type="number"
                                class="form-control"
                                id="shipper_number" wire:model="shipper_number">
                            @error('shipper_number') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="col-span-12 sm:col-span-12">
                            <label>Илгээгчийн хаяг</label>
                            <textarea autocomplete="off"
                                class="form-control"
                                id="shipper_address" wire:model="shipper_address" ></textarea>
                            @error('shipper_address') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="col-span-6 sm:col-span-6">
                            <label>Хүлээн авагчийн нэр</label>
                            <input autocomplete="off" type="text"
                                class="form-control"
                                id="receiver_name" wire:model="receiver_name">
                            @error('receiver_name') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="col-span-6 sm:col-span-6">
                            <label>Хүлээн авагчийн утас</label>
                            <input autocomplete="off" type="number"
                                class="form-control"
                                id="receiver_number" wire:model="receiver_number">
                            @error('receiver_number') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="col-span-12 sm:col-span-12">
                            <label>Хүлээн авагчийн хаяг</label>
                            <textarea autocomplete="off"
                                class="form-control"
                                id="receiver_address" wire:model="receiver_address" ></textarea>
                            @error('receiver_address') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="col-span-3 sm:col-span-3">
                            <label>Тоо ширхэг</label>
                            <input autocomplete="off" type="number"
                                class="form-control"
                                id="item_count" wire:model="item_count">
                            @error('item_count') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="col-span-3 sm:col-span-3">
                            <label>Жин</label>
                            <input autocomplete="off" type="number"
                                class="form-control"
                                id="weight" wire:model="weight">
                            @error('weight') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="col-span-2 sm:col-span-2">
                            <label>Хүргэлт</label>
                            <div class="selectgroup w-100">
                                <label class="selectgroup-item">
                                <input autocomplete="off" type="radio" wire:model="is_delivery" value="0" class="selectgroup-input">
                                <span class="selectgroup-button">No</span>
                                </label>
                                <label class="selectgroup-item">
                                <input autocomplete="off" type="radio" wire:model="is_delivery" value="1" class="selectgroup-input">
                                <span class="selectgroup-button">Yes</span>
                                </label>
                            </div>
                            @error('is_delivery') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="col-span-4 sm:col-span-4">
                            <label>Үнийн дүн</label>
                            <input autocomplete="off" type="number"
                                class="form-control"
                                id="ship_price" wire:model="ship_price">
                            @error('ship_price') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="col-span-12 sm:col-span-12">
                            <label>Дэлгэрэнгүй</label>
                            <textarea autocomplete="off"
                                class="form-control"
                                id="description" wire:model="description" ></textarea>
                            @error('description') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="px-6 py-4 bg-gray-100 text-right">
            <a wire:click="closeModal" class="ml-2 btn btn-primary shadow-none">
                Болих
            </a>
            <a wire:click.prevent="store()" class="ml-2 btn btn-success shadow-none">
                Хадгалах
            </a>
        </div>
    </form>
</x-jet-modal>