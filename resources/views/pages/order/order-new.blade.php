<x-app-layout>
    <x-slot name="header_content">
        <h1>{{ __('New Order +') }}</h1>

        <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Order</a></div>
            <div class="breadcrumb-item"><a href="{{ route('order') }}">New Order +</a></div>
        </div>
    </x-slot>

    <div>
        <livewire:create-order action="createOrder" />
    </div>
</x-app-layout>
