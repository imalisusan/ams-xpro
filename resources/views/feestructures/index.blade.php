<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Fee Structures index') }}&nbsp;&nbsp;
        </h2>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white shadow-md rounded px-8 flex flex-col">
                    <div name="personaldetails">
                         
                    </div>
                    <div name="semdetails">
                        <h2>{{$defaultsem}}</h2>
                    </div>
                    <div name="structurestable">
                        <table>
                            <th>Student Year</th>
                            <th>Action</th>
                            <tr name="firstyear">
                                <td>1</td>
                                <td>
                                    @foreach ($feestructures as $feestructure)
                                    <div class="col-3 card-group pb-2 mt-1 ">
                                            @if ($feestructure->student_year==1)
                                            <div class="card-body border bg-white shadow-sm">
                                                <h3 class="card-title"><a href=" {{ route('feestructures.show',['feestructure'=>$feestructure->id]) }}">View</a></h3>
                                                      <p>{{$feestructure->file_path}}</p>
                                                </div>
                                                <div class="card-body border bg-white shadow-sm">
                                                    <h3 class="card-title"><a href=" {{ route('feestructures.store') }}">Download</a></h3>
                                                </div>  
                                            @endif                                               
                                    </div>
                                    @endforeach 
                                </td>
                            </tr>
                            <tr name="secondyear">
                                <td>2</td>
                                <td>
                                    @foreach ($feestructures as $feestructure)
                                    <div class="col-3 card-group pb-2 mt-1 ">
                                            @if ($feestructure->student_year==2)
                                            <div class="card-body border bg-white shadow-sm">
                                                <h3 class="card-title"><a href=" {{ route('feestructures.show', ['feestructure'=>$feestructure->id]) }}">View</a></h3>
                                                      <p>{{$feestructure->file_path}}</p>
                                                </div>
                                                <div class="card-body border bg-white shadow-sm">
                                                    <h3 class="card-title"><a href=" {{ route('feestructures.store') }}">Download</a></h3>
                                                </div>  
                                            @endif                                               
                                    </div>
                                    @endforeach 
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-app-layout>