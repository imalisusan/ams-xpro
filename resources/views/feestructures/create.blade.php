<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Fee Structure') }}&nbsp;&nbsp;
                  
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
            @if(session()->has('message'))
                <div class="alert alert-success custom-alert">
                    {{ session()->get('message') }}
                    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                </div>
        @endif
            <div class="bg-white shadow-md border rounded sm:px-6 lg:px-8 flex flex-col py-8">
                <div ><h1 style="font-weight:bold; font-size:larger; color:#3353a3">Create New Fee Structure</h1></div>
                <h2 class="place-self-center" style="font-weight: bold; color:#d4a95b ">Details of the Fee Structure</h2>

                <form action="{{ route('feestructures.store') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    
                    <div class="form-group">
                        <x-label for="Student Year"></x-label>
                        <select name="student_year" placeholder="Select a year" class="form-select block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-2 px-2 rounded form-control" required>
                            <option value="">Select a year</option>
                            <option value="1" >1</option>
                            <option value="2" >2</option>
                            <option value="3" >3</option>
                            <option value="4" >4</option>
                        </select>
                    </div>
                <div class=" form-group row mt-5 ">
                    <div class="form-group  float-left mb-20 mr-2" style="width: 40%">
                        <x-label for="Semester"></x-label>
                        <input  type="text" name="semester" placeholder="Enter the Semester"class="form-control block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-2 px-2 rounded " required>
                        <small id="semHelp" class="form-text " style="color:grey">example: MAY 2021</small>
                    </div>
                    <div class="form-group  float-left mr-2 "style="width: 29%">
                        <x-label for="Semester Start Date"></x-label>
                        <input  type="date" name="sem_start"class="form-control w-full rounded" required>
                    </div>
                    <div class="form-group  float-left"style="width: 29%" >
                        <x-label for="Semester End Date"></x-label>
                        <input  type="date" name="sem_end"class="form-control w-full rounded"required>
                    </div>
                    </div><br><br>
                    <div class="mt-10 form-group p-5">
                    {{-- <x-label for="Select File"></x-label>
                           <input type="file" name="file" id="file"> --}}
                    <h2 class="place-self-center" style="font-weight: bold; color:#d4a95b ">Upload Fee Structure</h2><br>
                           <div class="text-center p-5"><input class="form-control form-control-lg w-full h-full border"style="font-size:large; border-color:#3353a3" id="file" type="file" name="file" /></div>
                    </div><br><br>
                    <div class="container text-right form-group">
                        <button type="submit" class="button-bg-strath-blue px-5 bg-#3353a3 place-self-center py-2 border rounded transition
                        duration-300 focus:outline-none">Upload Fee Structure</button>
                    </div>
                </form>
                
                
            </div>
        </div>
    </div>
</x-app-layout>