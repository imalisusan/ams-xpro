<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Fee Structures') }}&nbsp;&nbsp;
        </h2>
    </x-slot>
    <div class="pt-10 sm:px-10 lg:px-20 border">
        {{-- <div class="personal-details float-top p-3" style="width: 20%">
            <p><strong>Student number: </strong><span class="float-right">1004</span></p>
            <p><strong>Name: </strong><span class="float-right">Jen deuki</span></p>
            <p><strong>Course Name: </strong><span class="float-right">BICS</span></p>
            <p><strong>Fee Balance: </strong><span class="float-right">0</span></p>
        </div> --}}
        @role('admin')
        <div class="center-block mr-4 text"style="width:20%"><a class=" border sm:p-1 lg:p-3 rounded bg-strath-blue " style="color:white" href="{{ route('feestructures.create')}}">Upload New Fee Structure</a></div>
        @endrole

        <div class="container bg-white shadow-md rounded center-block"style="width:75%" >
        @if(session()->has('message'))
        <div class="alert alert-success custom-alert">
            {{ session()->get('message') }}
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        </div>
        @endif
            <h1 class="text-center mt-5 " style="font-weight: bold ">{{ $defaultsem}} Semester</h1>
            <table class="table table-responsive text-center " style="width: 100%" >
               <thead style="background-color: #d4a95b">
               <tr>
                   <th style="padding: 1.5%" class="">Student Year</th>
                   <th>Action</th>
               </tr>
               </thead>
               <tbody>
                @if($firstyear)
               <tr name="firstyear"class="custom-table-hover">
                   <th scope="row" class="border border-dark"style="padding: 1%">1</td>
                   <td class="border border-dark ">
                    
                       <a class="p-2 px-4 link" href=" {{ route('feestructures.show',['feestructure'=>$firstyear->id]) }}">View</a>
                       <a class="p-2 px-4"href=" {{ route('feestructures.download',['file_path'=>$firstyear->file_path]) }}">Download</a>
                       @role('admin')
                       <a class="p-2 px-4"href=" {{ route('feestructures.edit',['feestructure'=>$firstyear->id]) }}">Edit</a>
                       <a class="p-2 px-4"onclick="return confirm('Are you sure?')"href=" {{ route('feestructures.delete',['feestructure'=>$firstyear->id]) }}">Delete</a>
                       @endrole
                    
                   </td>
               </tr>
               @endif
               @if($secondyear)
               <tr name="secondyear"class="custom-table-hover">
                <th scope="row" class="border border-dark"style="padding: 1%">2</td>
                <td class="border border-dark">
                 <h3 >
                    <a class="p-2 px-4" href=" {{ route('feestructures.show',['feestructure'=>$secondyear->id]) }}">View</a>
                    <a class="p-2 px-4"href=" {{ route('feestructures.download',['file_path'=>$secondyear->file_path]) }}">Download</a>
                    @role('admin')
                    <a class="p-2 px-4"href=" {{ route('feestructures.edit',['feestructure'=>$secondyear->id]) }}">Edit</a>
                    <a class="p-2 px-4"onclick="return confirm('Are you sure?')"href=" {{ route('feestructures.delete',['feestructure'=>$secondyear->id]) }}">Delete</a>
                    @endrole
                 </h3>
                </td>
                </tr>
                @endif
            @if($thirdyear)
            <tr name="thirdyear"class="custom-table-hover">
                <th scope="row" class="border border-dark"style="padding: 1%">3</td>
                <td class="border border-dark">
                 <h3 >
                    <a class="p-2 px-4" href=" {{ route('feestructures.show',['feestructure'=>$thirdyear->id]) }}">View</a>
                    <a class="p-2 px-4"href=" {{ route('feestructures.download',['file_path'=>$thirdyear->file_path]) }}">Download</a>
                    @role('admin')
                    <a class="p-2 px-4"href=" {{ route('feestructures.edit',['feestructure'=>$thirdyear->id]) }}">Edit</a>
                    <a class="p-2 px-4"onclick="return confirm('Are you sure?')"href=" {{ route('feestructures.delete',['feestructure'=>$thirdyear->id]) }}">Delete</a>
                    @endrole
                 </h3>
                </td>
            </tr>
            @endif
            @if($fourthyear)
            <tr name="fourthyear"class="custom-table-hover">
                <th scope="row" class="border border-dark"style="padding: 1%">4</td>
                <td class="border border-dark">
                 <h3 >
                    <a class="p-2 px-4" href=" {{ route('feestructures.show',['feestructure'=>$fourthyear->id]) }}">View</a>
                    <a class="p-2 px-4"href=" {{ route('feestructures.download',['file_path'=>$fourthyear->file_path]) }}">Download</a>
                    @role('admin')
                    <a class="p-2 px-4"href=" {{ route('feestructures.edit',['feestructure'=>$fourthyear->id]) }}">Edit</a>
                    <a class="p-2 px-4"onclick="return confirm('Are you sure?')" href=" {{ route('feestructures.delete',['feestructure'=>$fourthyear->id]) }}">Delete</a>
                    @endrole
                 </h3>
                </td>
            </tr>
            @endif
               </tbody>                   
            </table>
       </div>
       </div>
       
</x-app-layout>