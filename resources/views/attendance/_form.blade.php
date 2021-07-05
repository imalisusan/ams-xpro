<div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2">
<div class="-mx-3 md:flex mb-6">
        <div class="md:w-1/2 px-3">
            <x-label for="student name*" class="block uppercase text-xs font-bold mb-2" />
            <div class="relative">
                <select name="user_id" placeholder="Select a student" class="form-select block
                appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8
                rounded">
                    <option>Select an option</option>
                    @foreach($users as $user)
                        <option value="{{ $user->id }}"  @if ((isset($attendance) &&  $attendance->user_id == ($user->id ) || old('user_id') == $user->id )) 
                            selected @endif >{{ $user->name  }}</option>
                    @endforeach
                </select>
            </div>
            <x-error field="user_id" class="text-red-600" />
        </div>

        <div class="md:w-1/2 px-3">
            <x-label for="Date-Time*" class="block uppercase text-xs font-bold mb-2" />
            <input type="datetime-local" step="0.01" name="date_time" class="form-input appearance-none block w-full bg-grey-lighter text-grey-darker border border-red
            rounded py-3
            px-4 mb-3" value="{{isset($attendance) ? $attendance->date : old('date_time') }}">
            <x-error field="date_time" class="text-red-600" />
        </div>
    </div>


    <div class="-mx-3 md:flex mb-6">
            <div class="md:w-1/2 px-3">
                <x-label for="status*" class="block uppercase text-xs font-bold mb-2" />
                    <div class="relative">
                        <select name="status" placeholder="Select a question type" class="form-select block
                        appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8
                        rounded">
                            <option>Select an option</option>
                                <option value="Present">Present</option>
                                <option value="Absent">Absent</option>
                        </select>
                    </div>
                <x-error field="status" class="text-red-600" />
             </div>

             <div class="md:w-1/2 px-3">
                <x-label for="Total Hours*" class="block uppercase text-xs font-bold mb-2" />
                <input type="number" step="0.01" name="total_hours" class="form-input appearance-none block w-full bg-grey-lighter text-grey-darker border border-red
                rounded py-3
                px-4 mb-3" value="{{isset($attendance) ? $attendance->totalhours : old('totalhours') }}">
                <x-error field="totalhours" class="text-red-600" />
            </div>

        </div>
        
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