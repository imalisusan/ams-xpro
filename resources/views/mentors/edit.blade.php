<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Mentor Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div>
                <form action="{{ route('mentors.update', $mentor->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    @include('mentors._form')
                </form>
            </div>
        </div>

    </div>
</x-app-layout>
