<x-app-layout>
    <x-slot name="header_content">
        <h1>{{ __('Пост нэмэх') }}</h1>

        <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">User</a></div>
            <div class="breadcrumb-item"><a href="{{ route('post') }}">Шинэ хэрэглэгч нэмэх</a></div>
        </div>
    </x-slot>

    <div>
        <livewire:create-post action="createPost" />
    </div>
</x-app-layout>
