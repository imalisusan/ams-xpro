<div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2">
    <div class="-mx-3 md:flex mb-6">
        <div class="md:w-1/2 px-3">
            <x-label for="Date*" class="block uppercase text-xs font-bold mb-2" />
            <input type="date" step="0.01" name="date" class="form-input appearance-none block w-full bg-grey-lighter text-grey-darker border border-red
            rounded py-3
            px-4 mb-3" value="{{isset($attendance) ? $attendance->date : old('date') }}">
            <x-error field="date" class="text-red-600" />
        </div>
        <div class="md:w-1/2 px-3">
            <x-label for="Start Time*" class="block uppercase text-xs font-bold mb-2" />
            <input type="time" step="0.01" name="start_time" class="form-input appearance-none block w-full bg-grey-lighter text-grey-darker border border-red
            rounded py-3
            px-4 mb-3" value="{{isset($attendance) ? $attendance->starttime : old('starttime') }}">
            <x-error field="starttime" class="text-red-600" />
        </div>
        <div class="md:w-1/2 px-3">
            <x-label for="Total Hours*" class="block uppercase text-xs font-bold mb-2" />
            <input type="number" step="0.01" name="total_hours" class="form-input appearance-none block w-full bg-grey-lighter text-grey-darker border border-red
            rounded py-3
            px-4 mb-3" value="{{isset($attendance) ? $attendance->totalhours : old('totalhours') }}">
            <x-error field="totalhours" class="text-red-600" />
        </div>
        <div class="-mx-3 md:flex mb-6">
        <div class="md:w-1/2 px-3">
            <x-label for="Present*" class="block uppercase text-xs font-bold mb-2" />
            <input type="radio" name="present" value="{{isset($attendance) ? $attendance->status : old('status') }}">
            <x-error field="present" class="text-red-600" />
        </div>
        <div class="md:w-1/2 px-3">
            <x-label for="Absent*" class="block uppercase text-xs font-bold mb-2" />
            <input type="radio" name="absent" value="{{isset($attendance) ? $attendance->status : old('status') }}">
            <x-error field="absent" class="text-red-600" />
        </div>
        </div>
        </div>
        <div class="md:flex place-self-center">
        <button type="submit" class="px-5 bg-white py-2 border-blue-400 border text-blue-500 rounded transition
        duration-300 hover:bg-blue-700 hover:text-white focus:outline-none place-self-center">Add Attendance</button>
        </div>
   
</div>