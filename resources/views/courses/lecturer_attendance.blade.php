 <!--Attendance Lecturer View -->

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
                       Student Name</th>
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
                @foreach ($attendances as $attendance)
                <tbody class="bg-white">
                    <td
                    class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-black-500 tracking-wider">
                    {{$attendance->user->name }}
                    </td>

                    <td
                    class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-black-500 tracking-wider">
                    {{$attendance->total_hours }} hrs
                    </td>

                    <td
                    class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-black-500 tracking-wider">
                    {{ $attendance->absent_classes }}</td>

                    <td
                    class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-black-500 tracking-wider">
                    @if($attendance->absent_hours)
                    {{ $attendance->absent_hours}}
                    @else
                    0
                    @endif hrs</td>
                    <td
                    class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-black-500 tracking-wider">
                    @if($attendance->percent_absent)
                    {{ $attendance->percent_absent}}
                    @else
                    0
                    @endif % </td>
            
                </tbody>
                @endforeach
            </table>
        </div>
            
            <div class="my-4 work-sans">
            </div>
        </div>
    </div>
</div>
<!--End of Attendance Lecturer View-->