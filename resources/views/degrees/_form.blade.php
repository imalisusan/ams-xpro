<div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2">
    
    <div class="-mx-3 md:flex mb-6">
        <div class="md:w-1/2 px-3">
            <x-label for="name*" class="block uppercase text-xs font-bold mb-2" />
            <input type="text" name="name" class="form-input appearance-none block w-full bg-grey-lighter text-grey-darker border border-red
            rounded py-3
            px-4 mb-3" value="{{isset($degree) ? $degree->name : old('name') }}">
            <x-error field="name" class="text-red-600" />
        </div>

        <div class="md:w-1/2 px-3">
            <x-label for="description*" class="block uppercase text-xs font-bold mb-2" />
                <input type="text" name="description" class="form-input appearance-none block w-full bg-grey-lighter text-grey-darker border border-red
                rounded py-3
                px-4 mb-3" value="{{ isset($degree) ? $degree->description :old('description') }}" style="border:1px solid rgb(104, 104, 104);">
                <x-error field="description" class="text-red-600" />
        </div>
    </div>


        <div class="md:flex place-self-center">
        <button type="submit" class="px-5 bg-white py-2 border-blue-500 border text-blue-500 rounded transition
        duration-300 hover:bg-blue-700 hover:text-white focus:outline-none place-self-center">Save Degree</button>
    </div>
</div>