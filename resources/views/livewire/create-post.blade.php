<div id="form-create">
    <x-jet-form-section :submit="$action" class="mb-4" enctype="multipart/form-data">
        <x-slot name="title">
            {{ __('Post') }}
        </x-slot>

        <x-slot name="description">
            {{ __('Post оруулах хэсэг') }}
        </x-slot>

        <x-slot name="form">
            <div class="form-group col-span-6 sm:col-span-5">
                <x-jet-label for="title" value="{{ __('Гарчиг') }}" />
                <x-jet-input id="title" type="text" class="mt-1 block w-full form-control shadow-none" wire:model.defer="post.title" />
                <x-jet-input-error for="post.title" class="mt-2" />
            </div>

            {{-- <div class="form-group col-span-6 sm:col-span-5">
                <x-jet-label for="content" value="{{ __('Текст') }}" />
                <x-jet-input id="content" type="text" class="mt-1 block w-full form-control shadow-none" wire:model.defer="post.content" />
                <x-jet-input-error for="post.content" class="mt-2" />
            </div> --}}

            <div class="form-group col-span-6 sm:col-span-5">
                <x-jet-label for="featured_image" value="{{ __('Зураг') }}" />
                <x-jet-input id="featured_image" type='file' class="" wire:model="featured_image" />
                <x-jet-input-error for="post.featured_image" class="mt-2" />
                @error('featured_image') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group col-span-6 sm:col-span-5">
                <div wire:ignore>
                    <trix-editor
                        class="formatted-content"
                        x-ref="trix"
                        wire:model.debounce.999999ms="post.content"
                        wire:key="content"
                    ></trix-editor>
                </div>
            </div>

{{-- 
            <div class="form-group col-span-6 sm:col-span-5 ">
                <x-jet-label for="is_featured" value="{{ __('is_featured') }}" />
                <x-jet-input id="is_featured" type="radio" value="1" class="col-md-2 btn btn-outline-success w-full form-control shadow-none"  wire:model.defer="post.is_featured" />
                <x-jet-input id="is_featured" type="radio" value="0" class="col-md-2 btn btn-outline-danger w-full form-control shadow-none" wire:model.defer="post.is_featured" />          
                <x-jet-input-error for="post.is_featured" class="mt-2" />
            </div> --}}



            {{-- <div class="form-group col-span-6 sm:col-span-5">
                <x-jet-label for="is_published" value="{{ __('Харагдац') }}" />
                <x-jet-input id="is_published" type="radio" value="1" class="col-md-2 btn btn-outline-success w-full form-control shadow-none"  wire:model.defer="post.is_published" />
                <x-jet-input id="is_published" type="radio" value="0" class="col-md-2 btn btn-outline-danger w-full form-control shadow-none" wire:model.defer="post.is_published" />          
                <x-jet-input-error for="post.is_published" class="mt-2" />
            </div> --}}

            
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