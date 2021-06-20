<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('View Fee Structure') }}&nbsp;&nbsp;
        </h2>
        <iframe src="{{url('feestructures/'.$feestructure->file_path)}}" frameborder="0"></iframe>
    </x-slot>
</x-app-layout>