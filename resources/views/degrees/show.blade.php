<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Degree Details') }}&nbsp;&nbsp;
          
            <form class="inline" action="{{  route('degrees.destroy', $degree->id) }}" method="POST">   
            @role('admin')                     
                <a href="{{ route('degrees.edit', $degree->id)  }}" class="border-gray-300 text-left  leading-4 text-blue-500 tracking-wider">Edit</a>&nbsp;
                    @csrf
                    @method('DELETE')
                        
                        <input type="submit" value="Delete" class="bg-white   text-red-500 rounded transition duration-300  focus:outline-none place-self-center">
            @endrole
                        
            </form>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if ($message = Session::get('success'))
            <x-alert type="success" class="border border-t-0  rounded-b bg-green-500 bg-opacity-25 px-4 py-3 text-green-700" />
            @else
                <x-alert type="danger" class="border border-t-0  rounded-b bg-red-500 bg-opacity-25 px-4 py-3 text-red-700" />
            @endif
            
            <div class="bg-white shadow-md rounded px-8 flex flex-col">
                <section class=" text-gray-700 body-font">
                    <br><br>
                        <div class="relative" style="   ">
                                 @role('lecturer')
                                <a href="{{ route('degreemarks.create', $degree->id) }}" class="px-5 bg-white py-2 border-blue-500 border text-blue-500 rounded transition
                                duration-300 hover:bg-blue-700 hover:text-white focus:outline-none place-self-center" style="float:left;" >Add Marks </a>

                                <a href="{{ route('attendance.create', $degree->id) }}" class="px-5 bg-white py-2 border-blue-500 border text-blue-500 rounded transition
                                duration-300 hover:bg-blue-700 hover:text-white focus:outline-none place-self-center" style="float:right;"  >Add Attendance </a>
                                @endrole
                        </div>
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight mt-8">
                     
                    </h2>
                    <div class="container px-5 py-8 mx-auto flex flex-wrap">
                        <div class="lg:w-1/2 w-full mb-10 lg:mb-0 rounded-lg overflow-hidden">

                            <div class="flex  mb-10 lg:items-start items-center">
                                <div class="flex-grow">
                                    <h2 class="text-gray-900 text-lg title-font font-medium mb-3 font-bold">Code</h2>
                                    <p class="leading-relaxed text-base">{{ $degree->code }}
                                    </p>
                                </div>
                            </div>

                            <div class="flex  mb-10 lg:items-start items-center">
                                <div class="flex-grow">
                                    <h2 class="text-gray-900 text-lg title-font font-medium mb-3 font-bold">Name</h2>
                                    <p class="leading-relaxed text-base">{{ $degree->name }}
                                    </p>
                                </div>
                            </div>

                            <div class="flex  mb-10 lg:items-start items-center">
                                <div class="flex-grow">
                                    <h2 class="text-gray-900 text-lg title-font font-medium mb-3 font-bold">Description
                                    </h2>
                                    <p class="leading-relaxed text-base">
                                        {{  $degree->description }}
                                    </p>
                                </div>
                            </div>
                       
                        </div>

                        <div class="lg:w-1/2 w-full mb-10 lg:mb-0 rounded-lg overflow-hidden">
                            <div class="flex  mb-10 lg:items-start items-center">
                                <div class="flex-grow">
                                    <h2 class="text-gray-900 text-lg title-font font-medium mb-3 font-bold">Year
                                    </h2>
                                    <p class="leading-relaxed text-base">
                                        {{  $degree->year }}
                                    </p>
                                </div>
                            </div>

                            <div class="flex  mb-10 lg:items-start items-center">
                                <div class="flex-grow">
                                    <h2 class="text-gray-900 text-lg title-font font-medium mb-3 font-bold">Credits
                                    </h2>
                                    <p class="leading-relaxed text-base">
                                        {{  $degree->credits }}
                                    </p>
                                </div>
                            </div>

                            <div class="flex  mb-10 lg:items-start items-center">
                                <div class="flex-grow">
                                    <h2 class="text-gray-900 text-lg title-font font-medium mb-3 font-bold">Created on
                                    </h2>
                                    <p class="leading-relaxed text-base">
                                        {{ $degree->created_at->calendar() }}
                                    </p>
                                </div>
                            </div>


                        </div>
                    </div>
                </section>
 
            </div>
        </div>
    </div>
 
                
</x-app-layout>
