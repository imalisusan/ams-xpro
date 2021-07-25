<div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2">
    <div class="-mx-3 md:flex mb-6">
       

        <div class="md:w-1/2 px-3 mb-6 md:mb-0">
            <x-label for="date and time*" class="block uppercase text-xs font-bold mb-2" />
            <input type="datetime-local"  name="date_time"class="form-input appearance-none block w-full bg-grey-lighter text-grey-darker border border-red
            rounded py-3
            px-4 mb-3" value="{{isset($mentoringsession) ? $mentoringsession->date_time : old('date_time') }}">
            <x-error field="date_time" class="text-red-600" />
        </div>

        <div class="md:w-1/2 px-3 mb-6 md:mb-0">
            <x-label for="total hours*" class="block uppercase text-xs font-bold mb-2" />
            <input type="number" step="0.01" name="total_hours" class="form-input appearance-none block w-full bg-grey-lighter text-grey-darker border border-red
            rounded py-3
            px-4 mb-3" value="{{isset($mentoringsession) ? $mentoringsession->total_hours : old('total_hours') }}">
            <x-error field="total_hours" class="text-red-600" />
        </div>
    </div>

    <div class="-mx-3 md:flex mb-6">
        
        <div class="md:w-1/2 px-3">
            <x-label for="comments*" class="block uppercase text-xs font-bold mb-2" />
                <textarea name="comments" class="form-input appearance-none block w-full bg-grey-lighter text-grey-darker border border-red
                rounded py-3
                px-4 mb-3" value="{{ isset($mentoringsession) ? $mentoringsession->comments :old('comments') }}" style="border:1px solid rgb(104, 104, 104);">
                {{ isset($mentoringsession) ? $mentoringsession->comments :old('comments') }}
            </textarea>
                <x-error field="comments" class="text-red-600" />
        </div>

       
    </div>
    <input type="hidden" name="user_id" value="{{ $mentor->user_id }}">
    <input type="hidden" name="mentor_id" value="{{ $mentor->mentor_id }}">

        <div class="md:flex place-self-center">
        <button type="submit" class="px-5 bg-white py-2 border-blue-500 border text-blue-500 rounded transition
        duration-300 hover:bg-blue-700 hover:text-white focus:outline-none place-self-center">Save Mentoring Session</button>
    </div>
</div>