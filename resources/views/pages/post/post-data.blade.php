<x-app-layout>
    <x-slot name="header_content">
        <h1>{{ __('Постууд') }}</h1>

        <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Post</a></div>
            <div class="breadcrumb-item"><a href="{{ route('post') }}">Data Post</a></div>
        </div>
    </x-slot>

    <div>
        <livewire:table.main name="post" :model="$post" />
    </div>
</x-app-layout>
