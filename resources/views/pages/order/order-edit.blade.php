<x-app-layout>
    <x-slot name="header_content">
        <h1>{{ __('Edit Order') }}</h1>

        <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Order</a></div>
            <div class="breadcrumb-item"><a href="{{ route('order') }}">Edit Order</a></div>
        </div>
    </x-slot>

    <div>
        <livewire:create-order action="updateOrder" :userId="request()->orderId" />
    </div>
</x-app-layout>
