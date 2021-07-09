<label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
                    Please fill in all the fields *<br><br>
</label>

<div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2">
<div class="-mx-3 md:flex mb-6">

        <div class="md:w-1/4 px-3">
            <x-label for="Date-Time*" class="block uppercase text-xs font-bold mb-2" />
            <input type="datetime-local" step="0.01" name="date_time" class="form-input appearance-none block w-full bg-grey-lighter text-grey-darker border border-red
            rounded py-3
            px-4 mb-3" value="{{isset($attendance) ? $attendance->date : old('date_time') }}">
            <x-error field="date_time" class="text-red-600" />
        </div>
        <div class="md:w-1/4 px-3">
                <x-label for="Total Hours*" class="block uppercase text-xs font-bold mb-2" />
                <input type="number" step="0.01" name="total_hours" class="form-input appearance-none block w-full bg-grey-lighter text-grey-darker border border-red
                rounded py-3
            px-4 mb-3" value="{{isset($attendance) ? $attendance->total_hours : old('total_hours') }}">
                <x-error field="total_hours" class="text-red-600" />
            </div>
    </div>

        <div class="-mx-3 md:flex mb-6">
        <div class="md:w-1/5 px-3">
        <x-label for="student name*" class="block uppercase text-xs font-bold mb-2" /> 
        </div>
        <div class="md:w-1/3 px-3">
            <p class="block uppercase text-xs font-bold mb-2">Present &nbsp; &nbsp; &nbsp; Absent</p>
        </div>
    </div>
    
    @foreach($users as $user)
    <div class="-mx-3 md:flex mb-6">
        <div class="md:w-1/5 px-3">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
                    {{$user->name}}
        </label>
            <x-error field="user_id" class="text-red-600" />
        </div>
        <div class="md:w-1/4 px-3">
            
        <div class="md:w-70 px-3">
                    <td
                        class="px-6 py-3 border-b border-gray-300 text-left text-sm leading-4 text-gray-900 tracking-wider">
                    <input type="radio" name="statuss[{{ $user->id }}]" value="Present"  required></td> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <td
                        class="px-6 py-3 border-b border-gray-300 text-left text-sm leading-4 text-gray-900 tracking-wider">
                        <input type="radio" name="statuss[{{ $user->id }}]" value="Absent" required></td>
                <x-error field="statuss" class="text-red-600" />
             </div>
        </div>
    </div>
    @endforeach
        
        @if (isset($attendance))
            <input hidden type="text" value="{{ $attendance->course_id }}" name="course_id">
        @else
            <input hidden type="text" value="{{ $course->id }}" name="course_id">
        @endif
        <div class="md:flex place-self-center">
        <button type="submit" class="px-5 bg-white py-2 border-blue-400 border text-blue-500 rounded transition
        duration-300 hover:bg-blue-700 hover:text-white focus:outline-none place-self-center">Add Attendance</button>
        </div>
   
</div>