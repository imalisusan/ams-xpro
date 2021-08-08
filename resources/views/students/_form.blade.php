
            <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2">
    <div class="-mx-3 md:flex mb-6">
        <div class="md:w-1/2 px-3 mb-6 md:mb-0">
            <x-label for="admission number*" class="block uppercase text-xs font-bold mb-2" />
            <input type="number" name="reg_id"
                value="{{ isset($student) ? $student->reg_id : old('reg_id') }}" class="form-input
            appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" />
            <x-error field="reg_id" class="text-red-600" />
        </div>
        <div class="md:w-1/2 px-3">
            <x-label for="full name*" class="block uppercase text-xs font-bold mb-2" />
            <input type="text" name="name" value="{{ isset($student) ? $student->name : old('name') }}" class="form-input
            appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3
            px-4" />
            <x-error field="name" class="text-red-600" />

        </div>
        <div class="md:w-1/2 px-3">
            <x-label for="course*" class="block uppercase text-xs font-bold mb-2" />
            <div class="relative">
                <select name="degree_id" placeholder="Select a question type" class="form-select block
                appearance-none w-1/2 bg-grey-lighter border  text-grey-darker py-3 px-4 pr-8
                rounded" style="width:100%;">
                    <option>Select an option</option>
                    @foreach($degrees as $degree)
                        <option value="{{ $degree->id }}"  @if ((isset($student) &&  $student->degree_id == ($degree->id ) || old('degree_id') == $degree->id )) 
                            selected @endif >{{ $degree->name  }}</option>
                    @endforeach
                </select>
            </div>
            <x-error field="degree_id" class="text-red-600" />
        </div>
    </div>

    <div class="-mx-3 md:flex mb-6">
    <div class="md:w-1/2 px-3">
            <x-label for="email*" class="block uppercase text-xs font-bold mb-2" />
            <input type="email" name="email"
                value="{{ isset($student) ? $student->email : old('email') }}" class="form-input appearance-none block w-full bg-grey-lighter text-grey-darker border border-red
            rounded py-3 px-4 mb-3">
            <x-error field="email" class="text-red-600" />

        </div>
        <div class="md:w-1/2 px-3">
            <x-label for="phone number*" class="block uppercase text-xs font-bold mb-2" />
            <input type="tel" name="phone_no"
                value="{{ isset($student) ? $student->phone_no : old('phone_no') }}" class="form-input appearance-none block w-full bg-grey-lighter text-grey-darker border
            border-grey-lighter rounded py-3 px-4">
            <x-error field="phone_no" class="text-red-600" />

        </div>
        <div class="md:w-1/2 px-3">
            <x-label for="gender*" class="block uppercase text-xs font-bold mb-2" />
            <x-error field="gender" class="text-red-600" />
            <input type="radio" name="gender" value="Male" @if (isset($student) && $student->gender == 'Male')
            checked
            @endif
            >
            <label for="religion">Male</label><br>
            <input type="radio" name="gender" value="Female" @if (isset($student) && $student->gender == 'Female')
            checked
            @endif
            >
            <label for="religion">Female</label><br>
        </div>
    </div>


    <div class="-mx-3 md:flex mb-6">
        
        <div class="md:w-1/2 px-3">
            <x-label for="date of birth*" class="block uppercase text-xs font-bold mb-2" />
            <input type="date" name="dob"
                value="{{ isset($student) ? $student->dob : old('dob') }}" class="form-input appearance-none block w-full bg-grey-lighter text-grey-darker border border-red
            rounded py-3 px-4 mb-3">
            <x-error field="dob" class="text-red-600" />

        </div>

        <div class="md:w-1/2 px-3 mb-6 md:mb-0">
            <x-label for="high school*" class="block uppercase text-xs font-bold mb-2" />
            <input type="text" name="high_school"
                value="{{ isset($student) ? $student->high_school : old('high_school') }}" class="form-input appearance-none block w-full bg-grey-lighter text-grey-darker border border-red
            rounded py-3 px-4 mb-3">
            <x-error field="high_school" class="text-red-600" />

        </div>

        <div class="md:w-1/2 px-3">
            <x-label for="religion*" class="block uppercase text-xs font-bold mb-2" />

            <div class="flex flex-row">
                <x-error field="religion" class="text-red-600" />

                <div class="mr-1">
                    <input type="radio" name="religion" value="N/A" @if (isset($student) && $student->religion == 'N/A')
                    checked
                    @endif
                    >
                    <label for="religion">Prefer not to say</label><br>
                    <input type="radio" name="religion" value="Christianity" @if (isset($student) && $student->religion == 'Christianity')
                    checked
                    @endif
                    >
                    <label for="religion">Christianity</label>
                </div>
                <div class="ml-1">
                    <input type="radio" name="religion" value="Muslim" @if (isset($student) && $student->religion == 'Muslim')
                    checked
                    @endif
                    >
                    <label for="religion">Muslim/Islam</label><br>
                    <input type="radio" name="religion" value="Traditional" @if (isset($student) && $student->religion == 'Traditional')
                    checked
                    @endif
                    >
                    <label for="religion">Traditional</label>
                </div>
            </div>
        </div>
    </div>

    <div class="-mx-3 md:flex mb-6">
        <div class="md:w-1/2 px-3 mb-6 md:mb-0">
            <x-label for="primary school*" class="block uppercase text-xs font-bold mb-2" />
            <input type="text" name="primary_school"
                value="{{ isset($student) ? $student->primary_school : old('primary_school') }}" class="form-input appearance-none block w-full bg-grey-lighter text-grey-darker border border-red
            rounded py-3 px-4 mb-3">
            <x-error field="primary_school" class="text-red-600" />

        </div>

        <div class="md:w-1/2 px-3 mb-6 md:mb-0">
            <x-label for="address*" class="block uppercase text-xs font-bold mb-2" />
            <input type="text" name="address" value="{{ isset($student) ? $student->address : old('address') }}"
                class="form-input appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3">
                <x-error field="address" class="text-red-600" />
        </div>
        
        <div class="md:w-1/2 px-3">
            <x-label for="residence*" class="block uppercase text-xs font-bold mb-2" />
            <input type="text" name="residence" value="{{ isset($student) ? $student->residence : old('residence') }}"
                class="form-input appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4">
                <x-error field="residence" class="text-red-600" />
        </div>
    </div>

    <div class="-mx-3 md:flex mb-6">
        <div class="md:w-1/2 px-3 mb-6 md:mb-0">
            <x-label for="father's name*" class="block uppercase text-xs font-bold mb-2" />
            <input type="text" name="fathers_name"
                value="{{ isset($student) ? $student->fathers_name : old('fathers_name') }}"
                class="form-input appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4">
                <x-error field="fathers_name" class="text-red-600" />
        </div>
        <div class="md:w-1/2 px-3">
            <x-label for="father's number*" class="block uppercase text-xs font-bold mb-2" />
            <input type="tel" name="fathers_phone_number"
                value="{{ isset($student) ? $student->fathers_phone_number : old('fathers_phone_number') }}"
                class="form-input appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4">
                <x-error field="fathers_phone_number" class="text-red-600" />
        </div>
        <div class="md:w-1/2 px-3">
            <x-label for="father's occupation*" class="block uppercase text-xs font-bold mb-2" />
            <div class="relative">
                <input type="text" name="fathers_occupation"
                    value="{{ isset($student) ? $student->fathers_occupation : old('fathers_occupation') }}"
                    class="form-input appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4">
                    <x-error field="fathers_occupation" class="text-red-600" />
            </div>
        </div>
    </div>

    <div class="-mx-3 md:flex mb-6">
        <div class="md:w-1/2 px-3 mb-6 md:mb-0">
            <x-label for="mother's name*" class="block uppercase text-xs font-bold mb-2" />
            <input type="text" name="mothers_name"
                value="{{ isset($student) ? $student->mothers_name : old('mothers_name') }}"
                class="form-input appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4">
                <x-error field="mothers_name" class="text-red-600" />
        </div>
        <div class="md:w-1/2 px-3">
            <x-label for="mother's number*" class="block uppercase text-xs font-bold mb-2" />
            <input type="tel" name="mothers_phone_number"
                value="{{ isset($student) ? $student->mothers_phone_number : old('mothers_phone_number') }}"
                class="form-input appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4">
                <x-error field="mothers_phone_number" class="text-red-600" />
        </div>
        <div class="md:w-1/2 px-3">
            <x-label for="mother's occupation*" class="block uppercase text-xs font-bold mb-2" />
            <div class="relative">
                <input type="text" name="mothers_occupation"
                    value="{{ isset($student) ? $student->mothers_occupation : old('mothers_occupation') }}"
                    class="form-input appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4">
                    <x-error field="mothers_occupation" class="text-red-600" />
            </div>
        </div>
    </div>

    <div class="-mx-3 md:flex mb-6">
        <div class="md:w-1/2 px-3 mb-6 md:mb-0">
            <x-label for="guardian's name*" class="block uppercase text-xs font-bold mb-2" />
            <input type="text" name="guardians_name"
                value="{{ isset($student) ? $student->guardians_name : old('guardians_name') }}"
                class="form-input appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4">
                <x-error field="guardians_name" class="text-red-600" />
        </div>
        <div class="md:w-1/2 px-3">
            <x-label for="guardian's number*" class="block uppercase text-xs font-bold mb-2" />
            <input type="tel" name="guardians_phone_number"
                value="{{ isset($student) ? $student->guardians_phone_number : old('guardians_phone_number') }}"
                class="form-input appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4">
                <x-error field="guardians_phone_number" class="text-red-600" />

        </div>
        <div class="md:w-1/2 px-3">
            <x-label for="guardians occupation*" class="block uppercase text-xs font-bold mb-2" />
            <div class="relative">
                <input type="text" name="guardians_occupation"
                    value="{{ isset($student) ? $student->guardians_occupation : old('guardians_occupation') }}"
                    class="form-input appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4">
                    <x-error field="guardians_occupation" class="text-red-600" />
            </div>
        </div>
    </div>

    <div class="md:flex place-self-center">
        <button type="submit" class="px-5 bg-white py-2 border-blue-500 border text-blue-500 rounded transition
        duration-300 hover:bg-blue-700 hover:text-white focus:outline-none place-self-center">Save Student</button>
    </div>

</div>
