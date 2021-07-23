<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-md rounded px-8 flex flex-col">
                <section class=" text-gray-700 body-font">
                    <div class="container px-5 py-8 mx-auto flex flex-wrap">
                        <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 pr-10 lg:px-8">
                            <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 pr-10 lg:px-8">
                                <div
                                    class="align-middle rounded-tl-lg rounded-tr-lg inline-block w-full py-4 overflow-hidden bg-white shadow-lg px-12">
                                    <div class="flex justify-between">

                                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                                            {{ __('Mentoring Sessions with ') }} Mentor Name
                                        </h2>
                                    </div>
                                </div>
                                <div
                                    class="align-middle rounded-tl-lg rounded-tr-lg inline-block w-full py-4 overflow-hidden bg-white shadow-lg px-12">
                                    <div class="flex justify-between">

                                       @role('mentor')
                                       <a type="button" href="#"
                                            class="px-5 py-2 border-blue-500 border text-blue-500 rounded transition duration-300 hover:bg-blue-700 hover:text-white focus:outline-none place-self-center">Add
                                            Session</a>
                                       @endrole


                                    </div>
                                </div>
                                <div
                                    class="align-middle inline-block min-w-full shadow overflow-hidden bg-white shadow-dashboard px-8 pt-3 rounded-bl-lg rounded-br-lg">
                                    <table class="min-w-full">
                                        <thead>
                                            <tr>
                                                <th
                                                    class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">
                                                    Date</th>
                                                <th
                                                    class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                                    Time Taken</th>
                                                <th
                                                    class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                                    Comments</th>
                                                <th class="px-6 py-3 border-b-2 border-gray-300"></th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white">
                                            @foreach ($sessions as $session)
                                                <tr>
                                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                                        <div class="flex items-center">
                                                            <div>
                                                                <div class="text-sm leading-5 text-gray-800">
                                                                    {{ $session->date_time }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                                        <div class="flex items-center">
                                                            <div>
                                                                <div class="text-sm leading-5 text-gray-800">
                                                                    {{ $session->total_hours }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                                        <div class="flex items-center">
                                                            <div>
                                                                <div class="text-sm leading-5 text-gray-800">
                                                                    {{ $session->status }}
                                                                </div>
                                                       </div>
                                                        </div>
                                                    </td>

                                                    
                                                    <td
                                                        class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-500 text-sm leading-5">
                                                        <a href="{{ route('student.profile') }}"
                                                            class="mr-2 px-5 py-2 border-blue-500 border text-blue-500 rounded transition duration-300 hover:bg-blue-700 hover:text-white focus:outline-none">View

                                                        </a>
                                                        @role('mentor')
                                                            <a href="{{ route('student.profile') }}"
                                                                class="mr-2 px-5 py-2 border-blue-500 border text-blue-500 rounded transition duration-300 hover:bg-blue-700 hover:text-white focus:outline-none">Update

                                                            </a>
                                                        @endrole


                                                    </td>
                                                </tr>

                                            @endforeach

                                        </tbody>
                                    </table>
                                    <div class="my-4 work-sans">
                                     
                                    </div>

                                </div>
                            </div>
                </section>
            </div>
        </div>
    </div>