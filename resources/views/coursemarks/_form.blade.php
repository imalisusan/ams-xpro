@if($errors->any())
<h4  class="border border-t-0  rounded-b bg-red-500 bg-opacity-25 px-4 py-3 text-red-700">
{{$errors->first()}}
</h4>
@endif

<label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
                    Please fill in all the fields *<br><br>
</label>
<div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2">

    <div class="-mx-3 md:flex mb-6">
        <div class="md:w-1/3 px-3">
            <x-label for="course module name*" class="block uppercase text-xs font-bold mb-2" />
            <div class="relative">
                <select name="course_module_id" placeholder="Select a question type" class="form-select block
                appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8
                rounded">
                    <option>Select an option</option>
                    @foreach($coursemodules as $coursemodule)
                        <option value="{{ $coursemodule->id }}"  @if ((isset($coursemark) &&  $coursemark->course_module_id == ($coursemodule->id ) || old('course_module_id') == $coursemodule->id )) 
                            selected @endif >{{ $coursemodule->name  }}</option>
                    @endforeach
                </select>
            </div>
            <x-error field="course_module_id" class="text-red-600" />
        </div>
    </div><br>

    <div class="-mx-3 md:flex mb-6">
        <div class="md:w-1/5 px-3">
        <x-label for="student name*" class="block uppercase text-xs font-bold mb-2" /> 
        </div>
        <div class="md:w-1/4 px-3">
        <x-label for="score*" class="block uppercase text-xs font-bold mb-2" /> 
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
            
                <input type="number" name="scores[{{ $user->id }}]" class="form-input appearance-none block w-full bg-grey-lighter text-grey-darker border border-red
                rounded py-3 px-4 mb-3"  step="0.5" 
                value="{{ isset($coursemark) ? $coursemark->score :old('score') }}" style="border:1px solid rgb(104, 104, 104);" min="0" 
                    />
                <x-error field="score" class="text-red-600" />
        </div>
    </div>
    @endforeach
    

    @if (isset($coursemark))
        <input hidden type="number" value="{{ $coursemark->course_id }}" name="course_id">
    @else
        <input hidden type="number" value="{{ $course->id }}" name="course_id">
    @endif
        <div class="md:flex place-self-center">
            <button type="submit" class="px-5 bg-white py-2 border-blue-500 border text-blue-500 rounded transition
            duration-300 hover:bg-blue-700 hover:text-white focus:outline-none place-self-center">Save Course Mark</button>
        </div>
</div>