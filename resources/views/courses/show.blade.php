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
                                <a href="{{ route('coursemarks.create') }}" class="px-5 bg-white py-2 border-blue-500 border text-blue-500 rounded transition
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

            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <!-- component -->
        <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 pr-10 lg:px-8">
            
            <div
                class="align-middle inline-block min-w-full shadow overflow-hidden bg-white shadow-dashboard px-8 pt-3 rounded-bl-lg rounded-br-lg">
                <table class="min-w" id="studentsTable"> <br>
                    <h1 class="font-semibold text-xl text-gray-800 leading-tight">Students Registered</h1> <br> <br>
                    <thead>
                        <tr>
                            <th
                                class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">
                                Student Name</th>
                            <th
                                class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                Module 1</th>
                            <th
                                class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                Module 2</th>
                            <th
                                class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                Total</th>
                            <th
                                class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                Actions</th>
                        </tr>
                    </thead>

                    <tbody class="bg-white"> </tbody>
                </table>
            </div>    
                <div class="my-4 work-sans">
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.5.0.js" integrity="sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc="
    crossorigin="anonymous"></script>

<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

<script type="text/javascript">
        $(document).ready(function() {
        var table = $('#studentsTable').DataTable({
            serverSide: true,
            ajax: "{{ route('courses.show', $course->id) }}",
            columns: [
                {
                    data: 'student_name',
                    name: 'student_name'
                },
                {
                    data: 'student_name',
                    name: 'student_name'
                },
                {
                    data: 'student_name',
                    name: 'student_name'
                },
                {
                    data: 'student_name',
                    name: 'student_name'
                },
                {
                    data: 'student_name',
                    name: 'student_name'
                },
            ],
            pagingType: "simple_numbers",
            pageLength: 20,
        }).columns.adjust().responsive;
        });
</script>
</x-app-layout>
