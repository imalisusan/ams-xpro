 <!-- Lecturer Coursework Marks -->
                   @foreach($students as $student)
                        @php
                        $coursemodules= $student->get_student_coursemarks($student->course_id, $student->user_id);
                        $coursemark= $student->get_student_grademarks($student->course_id, $student->user_id)
                        @endphp
                   @endforeach
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 min-w-full">
                        <!-- component -->
                        <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 pr-10 lg:px-8">
                            
                        
                                <table class="min-w" id="marksTable"> 
                                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                                        Coursework Marks
                                    </h2><br>
                                    <thead>
                                        <tr>
                                        <th
                                           class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                           Student ID</th>
                                        <th
                                           class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                           Student Name</th>
                                           @foreach ($coursemodules as $coursemodule)
                                            <th
                                            class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">
                                            {{ $coursemodule->name }}</th>
                                           @endforeach
                                           <th
                                           class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                           Total</th>
                                           <th
                                           class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                           Grade</th>
                                        </tr>
                                    </thead>
                                    @foreach($students as $student)
                                    <tbody class="bg-white"> 
                                 
                                    @php
                                    $coursemodules= $student->get_student_coursemarks($student->course_id, $student->user_id);
                                    $coursemark= $student->get_student_grademarks($student->course_id, $student->user_id)
                                    @endphp
                                    <td
                                        class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-black-500 tracking-wider">
                                        {{ $student->user->reg_id }}</td>
                                    <td
                                        class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-black-500 tracking-wider">
                                        {{ $student->user->name }}</td>
                                       
                                        @foreach($coursemodules as $coursemodule)
                                        <td
                                        class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-black-500 tracking-wider">
                                        {{ $coursemodule->score}} /{{ $coursemodule->maximum_score }}</td>
                                        @endforeach

                                     <td
                                     class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-black-500 tracking-wider">
                                     @if($coursemark)
                                     {{ $coursemark->total}}</td>
                                        @endif
                                        @if($coursemark->grade)
                                     <td
                                     class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-black-500 tracking-wider">
                                     {{ $coursemark->grade}}</td>
                                     @endif

                                    </tbody>
                                     @endforeach

                                     <tr>
                                        <th
                                           class="px-6 py-3  border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                           </th>
                                        <th
                                           class="px-6 py-3  border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                           </th>
                                           @foreach ($coursemodules as $coursemodule)
                                            <td
                                            class="px-6 py-3  border-gray-300 text-sm leading-4 text-blue-500 tracking-wider">
                                        <a href="{{ route('coursemarks.edit', $coursemodule->id) }}">Edit</a>    
                                        </td>
                                           @endforeach
                                           <th
                                           class="px-6 py-3  border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                           </th>
                                           <th
                                           class="px-6 py-3  border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                           </th>
                                        </tr>

                                    </tbody>
                                </table>
                        
                                
                                <div class="my-4 work-sans">
                                </div>
                       
                     <!--End of Coursework marks Lecturer View -->
