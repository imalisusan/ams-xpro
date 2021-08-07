<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Fee Statement Invoice') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div>
                <form action="{{ route('feestatement.update', $feestatement->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    @include('feestatements._form_invoice')
                </form>
            </div>
        </div>

    </div>
</x-app-layout>
