<!--Attendance Student View -->

        
        <div
            class="align-middle inline-block min-w-full shadow overflow-hidden bg-white shadow-dashboard px-8 pt-3 rounded-bl-lg rounded-br-lg">
            <table class="min-w" id="marksTable"> 
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    Attendance Records
                </h2><br>
                <h2 class="px-6 py-3 text-left text-sm leading-4 text-blue-500">
                   Total Hours : {{$attendance_percentage->total_hours }}  &nbsp; &nbsp; &nbsp;
                   Absent Classes : {{$attendance_percentage->absent_classes }} &nbsp; &nbsp; &nbsp;
                   Absent Hours : {{$attendance_percentage->absent_hours }} &nbsp; &nbsp; &nbsp;
                   Percentage Absent: {{$attendance_percentage->percent_absent }}%
                </h2>
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
                    {{ $attendance->total_hours }} hrs </td>

                    <td
                    class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-black-500 tracking-wider">
                    {{$attendance->status}}</td>
            
                </tbody>
                @endforeach
            </table>
        </div>
            
            <div class="my-4 work-sans">
            </div>
        </div>
    </div>
</div>
<!--End of Attendance Student View-->