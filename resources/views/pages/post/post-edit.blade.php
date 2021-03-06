<x-app-layout>
    <x-slot name="header_content">
        <h1>{{ __('Пост засах') }}</h1>

        <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">User</a></div>
            <div class="breadcrumb-item"><a href="{{ route('user') }}">Edit User</a></div>
        </div>
    </x-slot>

    <div>
        <livewire:create-post action="updatePost" :postId="request()->postId" />
    </div>
</x-app-layout>
