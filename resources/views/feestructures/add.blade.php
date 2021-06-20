<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Fee Structure') }}&nbsp;&nbsp;
                  
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-md rounded px-8 flex flex-col">
                <h2 class="place-self-center">Upload a Fee Structure</h2>

                <form action="{{ route('feestructures.store') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div>
                        <x-label for="Semester"></x-label>
                        <input type="text" name="semester">
                    </div>
                    <div>
                        <x-label for="Student Year"></x-label>
                        <select name="student_year" placeholder="Select a year" class="form-select block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded">
                            <option>Select a year</option>
                            <option value="1" >1</option>
                            <option value="2" >2</option>
                            <option value="3" >3</option>
                            <option value="4" >4</option>
                        </select>
                    </div>
                    <div>
                        <x-label for="Semester Start Date"></x-label>
                        <input type="date" name="sem_start">
                    </div>
                    <div>
                        <x-label for="Semester End Date"></x-label>
                        <input type="date" name="sem_end">
                    </div>
                    <div>
                    <x-label for="Select File"></x-label>
                           <input type="file" name="file" id="file"> 
                    </div>
                    @include('feestructures.fileupload')
                    <div class="md:flex place-self-center">
                        <button type="submit" class="px-5 bg-white py-2 border-blue-500 border text-blue-500 rounded transition
                        duration-300 hover:bg-blue-700 hover:text-white focus:outline-none">Save</button>
                    </div>
                </form>
                
                
            </div>
        </div>
    </div>
</x-app-layout>