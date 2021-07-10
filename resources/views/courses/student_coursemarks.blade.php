<!-- Student Coursework Marks -->
@role('student')
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
                    @endrole
                     <!--End of Coursework marks Student View -->