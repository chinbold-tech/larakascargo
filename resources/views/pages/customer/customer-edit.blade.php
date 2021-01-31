<x-app-layout>
    <x-slot name="header_content">
        <h1>{{ __('Edit Customer') }}</h1>

        <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Customer</a></div>
            <div class="breadcrumb-item"><a href="{{ route('customer') }}">Edit Customer</a></div>
        </div>
    </x-slot>

    <div>
        <livewire:create-customer action="updateCustomer" :customerId="request()->customerId" />
    </div>
</x-app-layout>
