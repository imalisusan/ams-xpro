<!--Attendance Student View -->


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
                    {{$attendance->user->name }}
                    </td>

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