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
        @if ($message = Session::get('success'))
            <x-alert type="success" class="border border-t-0  rounded-b bg-green-500 bg-opacity-25 px-4 py-3 text-green-700" />
            @else
                <x-alert type="danger" class="border border-t-0  rounded-b bg-red-500 bg-opacity-25 px-4 py-3 text-red-700" />
            @endif
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg h-80">
            <br> 
            <a type="button"  href="{{route('examcards.download' )}}"  style="float:left; margin-left:2%;   "
                            class="px-5 py-2 border-green-500 border text-green-500 rounded transition duration-300 hover:bg-white-700 hover:text-green focus:outline-none place-self-center"> 
                            Download Exam Card</a> <br>   <br>  <br>  <br>

            <h2 class=" text-xl text-gray-800 leading-tight" style="float:right; margin-left:2%;">
            Please Note:  <br> <br>
     		* All your fee balance needs to be cleared for you to be eligible to sit for ordinary exams  <br>
     		* You will not be eligible to sit for an exam if your attendance for the unit is less than two thirds of the total hours
   	       
                                 </h2>
            </div> <br>

           
        </div>
    </div>
</x-app-layout>
