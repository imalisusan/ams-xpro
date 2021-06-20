<x-app-layout>
    <x-slot name="header" >
        
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('View Fee Structure') }}&nbsp;&nbsp;
        </h2>
        <div class="container container-fluid">
        <iframe src ="{{ asset('/storage/feestructures/'.$feestructure->file_path) }}" class="responsive-iframe"width="1200px" height="600px"></iframe>
        </div>
    </x-slot>
</x-app-layout>