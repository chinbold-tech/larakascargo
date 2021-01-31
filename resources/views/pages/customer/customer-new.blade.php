<x-app-layout>
    <x-slot name="header_content">
        <h1>{{ __('New Customer') }}</h1>

        <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Customer</a></div>
            <div class="breadcrumb-item"><a href="{{ route('customer') }}">New Customer</a></div>
        </div>
    </x-slot>

    <div>
        <livewire:create-customer action="createCustomer" />
    </div>
</x-app-layout>
