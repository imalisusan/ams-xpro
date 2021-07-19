<x-app-layout>
    <x-slot name="header" >
        <div class="font-semibold text-s text-gray-800 leading-tight ">
            <a class="link text-blue-800 " href="{{ route('feestructures.index') }}">Fee Structures > </a>View</span>
        </div>
    </x-slot>
        <div class="container-fluid">
        <iframe src ="{{ asset('/storage/feestructures/'.$feestructure->file_path) }}" class="responsive-iframe" width="1345px" height="1200px"></iframe>
        </div>
    
    
</x-app-layout>