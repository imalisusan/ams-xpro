<div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2">
    <div class="-mx-3 md:flex mb-6">
        <div class="md:w-1/2 px-3">
            <x-label for="Total Hours*" class="block uppercase text-xs font-bold mb-2" />
            <input type="number" step="0.01" name="totalhours" class="form-input appearance-none block w-full bg-grey-lighter text-grey-darker border border-red
            rounded py-3
            px-4 mb-3" value="{{isset($attendance) ? $attendance->totalhours : old('totalhours') }}">
            <x-error field="totalhours" class="text-red-600" />
        </div>

        <div class="md:flex place-self-center">
        <button type="submit" class="px-5 bg-white py-2 border-blue-500 border text-blue-500 rounded transition
        duration-300 hover:bg-blue-700 hover:text-white focus:outline-none place-self-center">Add Attendance</button>
    </div>
</div>