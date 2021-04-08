<x-jet-modal>
    <form>
        <div class="px-6 py-4">
            <div class="text-lg">
                Карго олгох
            </div>

            <div class="mt-1">

                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="grid grid-cols-12 gap-6">
                        <div class="col-span-6 sm:col-span-6">
                            <ul class="list-group">
                                <li class="list-group-item"><strong> Code:</strong> {{$code}} </li>
                                <li class="list-group-item"><strong> Илгээгчийн нэр:</strong> {{$shipper_name}} </li>
                                <li class="list-group-item"><strong> Илгээгчийн утас: </strong>{{$shipper_number}}</li>
                                <li class="list-group-item"><strong> Хүлээн авагчийн нэр: </strong>{{$receiver_name}}</li>
                                <li class="list-group-item"><strong> Хүлээн авагчийн утас: </strong>{{$receiver_number}}</li>
                                <li class="list-group-item"><strong> Тоо ширхэг / Жин: </strong>{{$item_count}} / {{$weight}}</li>
                                <li class="list-group-item"><strong> Үнийн дүн: </strong>{{$ship_price}}</li>
                                <li class="list-group-item"><strong> Тайлбар: </strong>{{$description}}</li>
                            </ul>
                        </div>
                        <div class="col-span-6 sm:col-span-6">
                            <h4 class="mb-4"> Хүлээж авсан</h4>
                            <div class="form-group">
                                <label>Нэр</label>
                                <input autocomplete="off" type="text" class="form-control" wire:model="recieved_name">
                                @error('recieved_name') <span class="text-red-500">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label>Утас</label>
                                <input autocomplete="off" type="number" class="form-control" wire:model="recieved_phone">
                                @error('recieved_phone') <span class="text-red-500">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label>Тайлбар:</label>
                                <textarea autocomplete="off" class="form-control" id="recieved_description"
                                    wire:model="recieved_description"></textarea>
                                @error('recieved_description') <span class="text-red-500">{{ $message }}</span>@enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="px-6 py-4 bg-gray-100 text-right">
            <a wire:click="closeModalOlgoh" class="ml-2 btn btn-primary shadow-none">
                Болих
            </a>
            <a wire:click.prevent="storeOlgoh()" class="ml-2 btn btn-success shadow-none">
                Хадгалах
            </a>
        </div>
    </form>
</x-jet-modal>