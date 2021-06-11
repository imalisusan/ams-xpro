<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Course Details') }}&nbsp;&nbsp;
          
            <form class="inline" action="{{  route('courses.destroy', $course->id) }}" method="POST">                        
                <a href="{{ route('courses.edit', $course->id)  }}" class="border-gray-300 text-left  leading-4 text-blue-500 tracking-wider">Edit</a>&nbsp;
                    @csrf
                    @method('DELETE')
                        @role('administrator')
                        <input type="submit" value="Delete" class="bg-white   text-red-500 rounded transition duration-300  focus:outline-none place-self-center">
                        @endrole
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
                                    <h2 class="text-gray-900 text-lg title-font font-medium mb-3 font-bold">Name</h2>
                                    <p class="leading-relaxed text-base">{{ $course->name }}

                                    </p>
                                </div>
                            </div>

                            <div class="flex  mb-10 lg:items-start items-center">
                                <div class="flex-grow">
                                    <h2 class="text-gray-900 text-lg title-font font-medium mb-3 font-bold">Detail

                                    </h2>
                                    <p class="leading-relaxed text-base">
                                        {{  $course->detail }}
                                    </p>
                                </div>
                            </div>



                        </div>

                        <div class="lg:w-1/2 w-full mb-10 lg:mb-0 rounded-lg overflow-hidden">

                            <div class="flex  mb-10 lg:items-start items-center">
                                <div class="flex-grow">
                                    <h2 class="text-gray-900 text-lg title-font font-medium mb-3 font-bold">Started on
                                    </h2>
                                    <p class="leading-relaxed text-base">
                                        {{ $course->created_at->calendar() }}
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
