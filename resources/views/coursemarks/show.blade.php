<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Course Module Details') }}&nbsp;&nbsp;
          
            <form class="inline" action="{{  route('coursemodules.destroy', $coursemodule->id) }}" method="POST">                        
                <a href="{{ route('coursemodules.edit', $coursemodule->id)  }}" class="border-gray-300 text-left  leading-4 text-blue-500 tracking-wider">Edit</a>&nbsp;
                    @csrf
                    @method('DELETE')
                        
                        <input type="submit" value="Delete" class="bg-white   text-red-500 rounded transition duration-300  focus:outline-none place-self-center">
                        
            </form>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-md rounded px-8 flex flex-col">
                <section class=" text-gray-700 body-font">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight mt-8">
                     
                    </h2>
                    <div class="container px-5 py-8 mx-auto flex flex-wrap">
                        <div class="lg:w-1/2 w-full mb-10 lg:mb-0 rounded-lg overflow-hidden">

                            <div class="flex  mb-10 lg:items-start items-center">
                                <div class="flex-grow">
                                    <h2 class="text-gray-900 text-lg title-font font-medium mb-3 font-bold">Course</h2>
                                    <p class="leading-relaxed text-base">{{ $coursemodule->course->name }}
                                    </p>
                                </div>
                            </div>

                            <div class="flex  mb-10 lg:items-start items-center">
                                <div class="flex-grow">
                                    <h2 class="text-gray-900 text-lg title-font font-medium mb-3 font-bold">Weight
                                    </h2>
                                    <p class="leading-relaxed text-base">
                                        {{  $coursemodule->weight }}
                                    </p>
                                </div>
                            </div>
                       
                        </div>

                        <div class="lg:w-1/2 w-full mb-10 lg:mb-0 rounded-lg overflow-hidden">
                            <div class="flex  mb-10 lg:items-start items-center">
                                <div class="flex-grow">
                                    <h2 class="text-gray-900 text-lg title-font font-medium mb-3 font-bold">Module Name</h2>
                                    <p class="leading-relaxed text-base">{{ $coursemodule->name }}
                                    </p>
                                </div>
                            </div>

                            <div class="flex  mb-10 lg:items-start items-center">
                                <div class="flex-grow">
                                    <h2 class="text-gray-900 text-lg title-font font-medium mb-3 font-bold">Created At</h2>
                                    <p class="leading-relaxed text-base">{{ $coursemodule->created_at->calendar() }}
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
