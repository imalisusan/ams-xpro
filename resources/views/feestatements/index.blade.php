<x-app-layout>
    <header>
        <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center object-contain">
                    {{ __('FEE STATEMENT') }}
                </h2>
        </x-slot>
    </header>
   
    <div class="py-12 " style="height:100%;">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8" >
            
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg h-4/5" >
                <br> &nbsp;&nbsp; &nbsp;

                @role('admin')
                <a type="button" href="{{ route('feestatement.create') }}"
            class="px-5 py-2 border-green-500 border text-green-500 rounded transition duration-300 hover:bg-green-700 hover:text-white focus:outline-none place-self-center">
            Add Fee Statement</a>
            @endrole

            <br><br>
            <form action="", method = "get"> 
                <table class="mx-20">
                <tr>
                    <th class="border px-4 py-2 ">Date</th>
                    <th class="border px-4 py-2">Document Number</th>
                    <th class="border px-4 py-2">Document Type</th>
                    <th class="border px-4 py-2">Type</th>
                    <th class="border px-4 py-2">Amount
                    <select name="amount" id="amount-list" class="border-transparent" style="padding-left: 12px; padding-right: 40px" onchange="location = this.value;"> 
                    <option value="{{ route('fees.feestatement') }}" selected class="px-4">All</option>
                    <option value="{{ route('fees.debit') }}" class="px-1" >Debit</option>
                    <option value="{{ route('fees.credit') }}" class="px-1">Credit</option>

                    </select>
                </tr>
                <tbody>
                    @foreach($fee_statement as $item)
                    <tr>
                        <td class="border text-center">{{$item->date}}</td>
                        <td class="border text-center">{{$item->document_number}}</td>
                        <td class="border text-center">{{$item->document_type}}</td>
                        <td class="border text-center">{{$item->type}}</td>
                        <td class="border text-center">{{$item->amount}}</td>
                    </tr>
                    @endforeach
                </tbody>
                
                </table>
                <br>
                <br>
            </form>
        </div>
    
    </div>
 </div>
</x-app-layout>