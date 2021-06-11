    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2">
        <div class="-mx-3 md:flex mb-6">
            <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                <x-label for="name*" class="block uppercase text-xs font-bold mb-2" />
                <input type="text" name="name" class="form-input
appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3"
value="{{ isset($course) ? $course->name : old('name') }}" style="width:71%;">
        <x-error field="name" class="text-red-600" />
            </div>
            
        </div>
        <div class="-mx-3 md:flex mb-6">
            <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                <x-label for="detail*" class="block uppercase text-xs font-bold mb-2" />
                <div class="relative">
                    <textarea name="detail" id="" cols="45" rows="6" style="border-radius:10px;" value="{{ isset($course) ? $course->detail : old('detail') }}">{{  isset($course) ? $course->detail : old('detail')  }}</textarea>
                    <x-error field="detail" class="text-red-600" />
                </div>
            </div>
        </div>
        <div class="md:flex place-self-center">
            <button type="submit" class="px-5 bg-white py-2 border-blue-500 border text-blue-500 rounded transition
            duration-300 hover:bg-blue-700 hover:text-white focus:outline-none place-self-center">Save Department</button>
        </div>
    </div>
    
