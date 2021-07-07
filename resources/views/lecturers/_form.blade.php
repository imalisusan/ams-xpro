<div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2">
    <div class="-mx-3 md:flex mb-6">
       

        <div class="md:w-1/2 px-3 mb-6 md:mb-0">
            <x-label for="lecturer name*" class="block uppercase text-xs font-bold mb-2" />
            <input type="text" name="name" class="form-input appearance-none block w-full bg-grey-lighter text-grey-darker border border-red
            rounded py-3
            px-4 mb-3" value="{{isset($lecturer) ? $lecturer->name : old('name') }}">
            <x-error field="name" class="text-red-600" />
        </div>

        <div class="md:w-1/2 px-3 mb-6 md:mb-0">
            <x-label for="email*" class="block uppercase text-xs font-bold mb-2" />
            <input type="email" name="email" class="form-input appearance-none block w-full bg-grey-lighter text-grey-darker border border-red
            rounded py-3
            px-4 mb-3" value="{{isset($lecturer) ? $lecturer->email : old('email') }}">
            <x-error field="name" class="text-red-600" />
        </div>
    </div>

    <div class="-mx-3 md:flex mb-6">
        
        <div class="md:w-1/2 px-3">
            <x-label for="phone*" class="block uppercase text-xs font-bold mb-2" />
                <input type="text" name="phone" class="form-input appearance-none block w-full bg-grey-lighter text-grey-darker border border-red
                rounded py-3 px-4 mb-3"
                value="{{ isset($lecturer) ? $lecturer->phone :old('phone') }}" style="border:1px solid rgb(104, 104, 104);">
                <x-error field="phone" class="text-red-600" />
        </div>

        <div class="md:w-1/2 px-3">
            <x-label for="address*" class="block uppercase text-xs font-bold mb-2" />
                <input type="text" name="address" class="form-input appearance-none block w-full bg-grey-lighter text-grey-darker border border-red
                rounded py-3 px-4 mb-3" 
                value="{{ isset($lecturer) ? $lecturer->address :old('address') }}" style="border:1px solid rgb(104, 104, 104);">
                <x-error field="address" class="text-red-600" />
        </div>
    </div>


        <div class="md:flex place-self-center">
        <button type="submit" class="px-5 bg-white py-2 border-blue-500 border text-blue-500 rounded transition
        duration-300 hover:bg-blue-700 hover:text-white focus:outline-none place-self-center">Save Course Module</button>
    </div>
</div>