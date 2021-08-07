<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('New Fee Statement Invoice') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            

            <div>
                <form action="{{ route('feeinvoices.store') }}" method="POST">
                    @csrf
                @include('feeinvoices._form')
                </form>
            </div>
        </div>

    </div>
</x-app-layout>
