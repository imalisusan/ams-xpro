<div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2">
    <div class="-mx-3 md:flex mb-6">
        <div class="md:w-1/2 px-3">
            <x-label for="Student name*" class="block uppercase text-xs font-bold mb-2" />
            <div class="relative">
                <select name="user_id" placeholder="Select a question type" class="form-select block
                appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8
                rounded">
                    <option>Select an option</option>
                    @foreach($students as $student)
                        <option value="{{ $student->id }}"  @if ((isset($feestatement) &&  $feestatement->user_id == ($student->id ) || old('student_id') == $student->id )) 
                            selected @endif >{{ $student->name  }}</option>
                    @endforeach
                </select>
            </div>
            <x-error field="code" class="text-red-600" />
        </div>

        <div class="md:w-1/2 px-3 mb-6 md:mb-0">
            <x-label for="amount*" class="block uppercase text-xs font-bold mb-2" />
            <input type="number" name="amount" class="form-input appearance-none block w-full bg-grey-lighter text-grey-darker border border-red
            rounded py-3
            px-4 mb-3" value="{{isset($feestatement) ? $feestatement->amount : old('amount') }}">
            <x-error field="amount" class="text-red-600" />
        </div>
    </div>

    <div class="-mx-3 md:flex mb-6">
        
        <div class="md:w-1/2 px-3">
            <x-label for="date*" class="block uppercase text-xs font-bold mb-2" />
                <input type="datetime-local" name="date" class="form-input appearance-none block w-full bg-grey-lighter text-grey-darker border border-red
                rounded py-3 px-4 mb-3"  step="0.1" max="1"
                value="{{ isset($feestatement) ? $feestatement->weight :old('date') }}" style="border:1px solid rgb(104, 104, 104);">
                <x-error field="date" class="text-red-600" />
        </div>

        <div class="md:w-1/2 px-3">
            <x-label for="type*" class="block uppercase text-xs font-bold mb-2" />
            <div class="relative">
                <select name="type" placeholder="Select a question type" class="form-select block
                appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8
                rounded">
                    <option>Select an option</option>
                        <option value="Debit">Debit</option>
                        <option value="Credit">Credit</option>
                </select>
            </div>
                <x-error field="type" class="text-red-600" />
        </div>
    </div>

    <div class="-mx-3 md:flex mb-6">
        <div class="md:w-1/2 px-3">
            <x-label for="document_type*" class="block uppercase text-xs font-bold mb-2" />
            <div class="relative">
                <select name="document_type" placeholder="Select a question type" class="form-select block
                appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8
                rounded">
                    <option>Select an option</option>
                        <option value="Invoice">Invoice</option>
                        <option value="Receipt">Receipt</option>
                </select>
            </div>
                <x-error field="document_type" class="text-red-600" />
        </div>
        <div class="md:w-1/2 px-3">
            <x-label for="document_number*" class="block uppercase text-xs font-bold mb-2" />
            <input type="number" name="document_number" class="form-input appearance-none block w-full bg-grey-lighter text-grey-darker border border-red
            rounded py-3
            px-4 mb-3" value="{{isset($feestatement) ? $feestatement->document_number : old('document_number') }}">
                <x-error field="document_number" class="text-red-600" />
        </div>
    </div>

        <div class="md:flex place-self-center">
        <button type="submit" class="px-5 bg-white py-2 border-blue-500 border text-blue-500 rounded transition
        duration-300 hover:bg-blue-700 hover:text-white focus:outline-none place-self-center">Save Fee Statement</button>
    </div>
</div>