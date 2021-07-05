<x-app-layout>
    <header>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center object-contain">
                {{ __('STUDENT EXAM CARD') }}
            </h2>
        </x-slot>
    </header>

    <div class="py-12 ">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg h-80">{{ __("Exam card is here.") }}</div>
        </div>
    </div>
</x-app-layout>
