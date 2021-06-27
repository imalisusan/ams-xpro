<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Course Details') }}&nbsp;&nbsp;
          
            <form class="inline" action="{{  route('courses.destroy', $course->id) }}" method="POST">                        
                <a href="{{ route('courses.edit', $course->id)  }}" class="border-gray-300 text-left  leading-4 text-blue-500 tracking-wider">Edit</a>&nbsp;
                    @csrf
                    @method('DELETE')
                        
                        <input type="submit" value="Delete" class="bg-white   text-red-500 rounded transition duration-300  focus:outline-none place-self-center">
                        
            </form>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-md rounded px-8 flex flex-col">
                <section class=" text-gray-700 body-font">
                    <br><br>
                        <div class="relative" style=" float:right;">
                                <a href="{{ route('coursemarks.create', $course->id) }}" class="px-5 bg-white py-2 border-blue-500 border text-blue-500 rounded transition
                                duration-300 hover:bg-blue-700 hover:text-white focus:outline-none place-self-center" >Add Marks </a>
                        </div>
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight mt-8">
                     
                    </h2>
                    <div class="container px-5 py-8 mx-auto flex flex-wrap">
                        <div class="lg:w-1/2 w-full mb-10 lg:mb-0 rounded-lg overflow-hidden">

                            <div class="flex  mb-10 lg:items-start items-center">
                                <div class="flex-grow">
                                    <h2 class="text-gray-900 text-lg title-font font-medium mb-3 font-bold">Code</h2>
                                    <p class="leading-relaxed text-base">{{ $course->code }}
                                    </p>
                                </div>
                            </div>

                            <div class="flex  mb-10 lg:items-start items-center">
                                <div class="flex-grow">
                                    <h2 class="text-gray-900 text-lg title-font font-medium mb-3 font-bold">Name</h2>
                                    <p class="leading-relaxed text-base">{{ $course->name }}
                                    </p>
                                </div>
                            </div>

                            <div class="flex  mb-10 lg:items-start items-center">
                                <div class="flex-grow">
                                    <h2 class="text-gray-900 text-lg title-font font-medium mb-3 font-bold">Description
                                    </h2>
                                    <p class="leading-relaxed text-base">
                                        {{  $course->description }}
                                    </p>
                                </div>
                            </div>
                       
                        </div>

                        <div class="lg:w-1/2 w-full mb-10 lg:mb-0 rounded-lg overflow-hidden">
                            <div class="flex  mb-10 lg:items-start items-center">
                                <div class="flex-grow">
                                    <h2 class="text-gray-900 text-lg title-font font-medium mb-3 font-bold">Year
                                    </h2>
                                    <p class="leading-relaxed text-base">
                                        {{  $course->year }}
                                    </p>
                                </div>
                            </div>

                            <div class="flex  mb-10 lg:items-start items-center">
                                <div class="flex-grow">
                                    <h2 class="text-gray-900 text-lg title-font font-medium mb-3 font-bold">Credits
                                    </h2>
                                    <p class="leading-relaxed text-base">
                                        {{  $course->credits }}
                                    </p>
                                </div>
                            </div>

                            <div class="flex  mb-10 lg:items-start items-center">
                                <div class="flex-grow">
                                    <h2 class="text-gray-900 text-lg title-font font-medium mb-3 font-bold">Created on
                                    </h2>
                                    <p class="leading-relaxed text-base">
                                        {{ $course->created_at->calendar() }}
                                    </p>
                                </div>
                            </div>


                        </div>
                    </div>
                </section>
 
                <body>
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 min-w-full">
                        <!-- component -->
                        <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 pr-10 lg:px-8">
                            
                            <div
                                class="align-middle inline-block min-w-full shadow overflow-hidden bg-white shadow-dashboard px-8 pt-3 rounded-bl-lg rounded-br-lg">
                                <table class="min-w" id="marksTable"> 
                                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                                        Coursework Marks
                                    </h2><br>
                                    <thead>
                                        <tr>
                                           @foreach ($coursemodules as $coursemodule)
                                            <th
                                            class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">
                                            {{ $coursemodule->name }}</th>
                                           @endforeach
                                           <th
                                           class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                           Total</th>
                                        </tr>
                                    </thead>
        
                                    <tbody class="bg-white"> 

                                     @foreach ($coursemodules as $coursemodule)
                                        <td
                                        class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-black-500 tracking-wider">
                                        {{ $coursemodule->score }} /{{ $coursemodule->maximum_score }}</td>
                                     @endforeach

                                     <td
                                     class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-black-500 tracking-wider">
                                     {{ $total }}</td>
                                    </tbody>
                                </table>
                            </div>
                                
                                <div class="my-4 work-sans">
                                </div>
                            </div>
                        </div>
                    </div>


                    <br><br>`
                    <!--Attendance -->

                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 min-w-full">
                        <!-- component -->
                        <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 pr-10 lg:px-8">
                            
                            <div
                                class="align-middle inline-block min-w-full shadow overflow-hidden bg-white shadow-dashboard px-8 pt-3 rounded-bl-lg rounded-br-lg">
                                <table class="min-w" id="marksTable"> 
                                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                                        Attendance Records
                                    </h2><br>
                                    <thead>
                                        <tr>
                                        <th
                                           class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                           Date and Time</th>
                                            <th
                                           class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                           Total Hrs</th>
                                           <th
                                           class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                          Status</th>
                                           <th
                                           class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                           Actions</th>
                                        </tr>
                                    </thead>
                                    @foreach ($attendances as $attendance)
                                    <tbody class="bg-white">
                                        <td
                                        class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-black-500 tracking-wider">
                                        {{$attendance->date_time }}
                                        </td>

                                        <td
                                        class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-black-500 tracking-wider">
                                        {{$attendance->total_hours}}</td>

                                        <td
                                        class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-black-500 tracking-wider">
                                        {{$attendance->status}}</td>
                                        <td
                                        class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-black-500 tracking-wider">
                                        <a href="">Edit</a>
                                        <a href="">Delete</a>
                                        </td>
                                
                                    </tbody>
                                    @endforeach
                                </table>
                            </div>
                                
                                <div class="my-4 work-sans">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of Attendance-->
                </body>
            </div>
        </div>
    </div>
 
                
</x-app-layout>
