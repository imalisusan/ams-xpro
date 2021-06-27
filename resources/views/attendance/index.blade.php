<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Attendance') }} 
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if ($message = Session::get('success'))
            <x-alert type="success" class="border border-t-0  rounded-b bg-green-500 bg-opacity-25 px-4 py-3 text-green-700" />
            @else
                <x-alert type="danger" class="border border-t-0  rounded-b bg-red-500 bg-opacity-25 px-4 py-3 text-red-700" />
            @endif
            
            <!-- component -->
            <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 pr-10 lg:px-8">
                <div
                    class="align-middle rounded-tl-lg rounded-tr-lg inline-block w-full py-4 overflow-hidden bg-white shadow-lg px-12">
                    <div class="flex justify-between">
                        
                        <a type="button" href="{{ route('attendance.create') }}"
                            class="px-5 py-2 border-green-500 border text-green-500 rounded transition duration-300 hover:bg-green-700 hover:text-white focus:outline-none place-self-center">
                            Add Attendance</a>
                       
                    </div>
                </div>
                <div
                    class="align-middle inline-block min-w-full shadow overflow-hidden bg-white shadow-dashboard px-8 pt-3 rounded-bl-lg rounded-br-lg">
                    <body>
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 min-w-full"> 
                           
                           <table class="min-w" id="marksTable"> 
                           
                               <thead>
                                   <tr>
                                       <th
                                       class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">
                                       Course Code</th>
                                       <th
                                       class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">
                                       Coursename</th>
                                       <th
                                      class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                      Total Hours</th>
                                      <th
                                      class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                      Absent Classes</th>
                                      <th
                                      class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                      Absent Hours</th>
                                      <th
                                      class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                      Percentage Absent</th>
                                   </tr>
                               </thead>

                               
   
                               <tbody class="bg-white"> 

                                @foreach ($courses as $course)
                                <tr>
                                   <td
                                   class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-black-500 tracking-wider">
                                   {{ $course->code }}</td>
                                   <td
                                   class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-black-500 tracking-wider">
                                   {{ $course->name }}</td>
                                   <td
                                   class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-black-500 tracking-wider">
                                   {{ $course->total_hours }} hrs </td>
                                   <td
                                   class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-black-500 tracking-wider">
                                   {{ $course->year }}</td>
                                   <td
                                   class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-black-500 tracking-wider">
                                   {{ $course->year }} hrs</td>
                                   <td
                                   class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-black-500 tracking-wider">
                                   {{ $course->year }}  % </td>
                               </tr>

                                @endforeach
                               </tbody>
                           </table>
       
                           
                           <div class="my-4 work-sans">
                           </div>
                       </div>
               </div>
           </body>
                    </body>
                    <div class="my-4 work-sans">
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
