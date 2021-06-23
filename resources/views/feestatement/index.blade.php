<x-app-layout>
    <header>
        <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center object-contain">
                    {{ __('FEE STATEMENT') }}
                </h2>
        </x-slot>
    </header>
   
    <div class="py-12 " >
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg h-80">
            <form action="", method = "get"> 
                <table class="mx-20">
                <tr>
                    <th class="border px-4 py-2 col-span-2">Date</th>
                    <th class="border px-4 py-2">Document Number</th>
                    <th class="border px-4 py-2">Document Type</th>
                    <th class="border px-4 py-2">Amount
                    <select name="amount" id="amount-list" class="border-transparent" style="padding-left: 12px; padding-right: 40px"> 
                    <option value="" selected class="px-4">All</option>
                    <option value="debit" class="px-1" >Debit</option>
                    <option value="credit" class="px-1">Credit</option>
                    </select>
                </tr>
                <tbody>
                    @foreach($fee_statement as $item)
                    <tr>
                        <td class="border text-center">{{$item->date}}</td>
                        <td class="border text-center">{{$item->document_number}}</td>
                        <td class="border text-center">{{$item->document_type}}</td>
                        <td class="border text-center">{{$item->amount}}</td>
                    </tr>
                    @endforeach
                </tbody>
                
                </table>
            </form>
        </div>
    </div>
 </div>
</x-app-layout>