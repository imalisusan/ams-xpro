<x-app-layout>
<header>
<x-slot name="header"> 
    <form class="inline" action="{{  route('students.destroy', $user->id) }}" method="POST"  style="float:right";  >                        
                <a href="{{ route('students.edit', $user->id)  }}" class="border-gray-300 text-left  leading-4 text-blue-500 tracking-wider"  
                >Edit</a>&nbsp;
                    @csrf
                  @role('admin')
                   @method('DELETE')  
                        <input type="submit" value="Delete" class="bg-white   text-red-500 rounded transition duration-300  focus:outline-none place-self-center">        
                @endrole
            </form>

       
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center object-contain">
            @role('student')
                {{ __('STUDENT ') }}
            @endrole

            @role('admin')
                {{ __('ADMIN ') }}
            @endrole

            @role('lecturer')
                {{ __('LECTURER ') }}
            @endrole
            PROFILE
        </h2>
   
    </x-slot>
    </header>
    
   
   
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-md rounded px-8 flex flex-col">
                <section class=" text-gray-700 body-font">
                    <div class="container px-5 py-8 mx-auto flex flex-wrap">
                        <div class="lg:w-1/2 w-full mb-10 lg:mb-0 rounded-lg overflow-hidden">

                            <div class="flex  mb-10 lg:items-start items-center">
                                <div class="flex-grow w-6/12 sm:w-4/12 ">


                                     <!-- Profile Photo -->
                    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                            <!-- Current Profile Photo -->
                            <div class="mt-2" x-show="! photoPreview">
                                <img src="{{ $user->profile_photo_url }}" alt="{{ $user->name }}" class="rounded-full h-40 w-40 object-cover">
                            </div>
                    @endif


                

                                </div>
                            </div>

                            <div class="flex  mb-10 lg:items-start items-center">
                                <div class="flex-grow">
                                   
                                    @role('student')
                                    <h2 class="text-gray-900 text-lg title-font mb-3 font-bold">Admission Number</h2>
                                    @endrole
                                    @role('lecturer')
                                    <h2 class="text-gray-900 text-lg title-font mb-3 font-bold">Lecturer Number</h2>
                                    @endrole
                                    <p class="leading-relaxed text-base">{{ $user->reg_id }}</p>
                                  
                                </div>
                            </div>

                            <div class="flex  mb-10 lg:items-start items-center">
                                <div class="flex-grow">
                                    <h2 class="text-gray-900 text-lg title-font mb-3 font-bold">Full Name</h2>
                                    <p class="leading-relaxed text-base">{{ $user->name }}
                                    </p>
                                   
                                </div>
                            </div>

                            
                            <div class="flex  mb-10 lg:items-start items-center">
                                <div class="flex-grow">
                                    <h2 class="text-gray-900 text-lg title-font mb-3 font-bold">Email
                                    </h2>
                                    <p class="leading-relaxed text-base">
                                        {{ $user->email }}
                                    </p>
                                
                                </div>
                            </div>

                            @role('student')
                            <div class="flex  mb-10 lg:items-start items-center">
                                <div class="flex-grow">
                                    <h2 class="text-gray-900 text-lg title-font mb-3 font-bold">High School
                                    </h2>
                                    <p class="leading-relaxed text-base">
                                        {{ $user->high_school }}
                                    </p>
                                 
                                </div>
                            </div>

                            <div class="flex  mb-10 lg:items-start items-center">
                                <div class="flex-grow">
                                    <h2 class="text-gray-900 text-lg title-font mb-3 font-bold">Father's Name
                                    </h2>
                                    <p class="leading-relaxed text-base">
                                        {{ $user->fathers_name }}
                                    </p>
                                 
                                </div>
                            </div>

                            <div class="flex  mb-10 lg:items-start items-center">
                                <div class="flex-grow">
                                    <h2 class="text-gray-900 text-lg title-font mb-3 font-bold">Mother's Name
                                    </h2>
                                    <p class="leading-relaxed text-base">
                                        {{ $user->mothers_name }}
                                    </p>
                                 
                                </div>
                            </div>

                            <div class="flex  mb-10 lg:items-start items-center">
                                <div class="flex-grow">
                                    <h2 class="text-gray-900 text-lg title-font mb-3 font-bold">Guardian's Name
                                    </h2>
                                    <p class="leading-relaxed text-base">
                                        {{ $user->guardians_name }}
                                    </p>
                                 
                                </div>
                            </div>
                            @endrole

                        </div>

                        <div class="lg:w-1/2 w-full mb-10 lg:mb-0 rounded-lg overflow-hidden">

                            <div class="flex  mb-10 lg:items-start items-center">
                                <div class="flex-grow">
                                    <h2 class="text-gray-900 text-lg title-font mb-3 font-bold">Phone Number
                                    </h2>
                                    <p class="leading-relaxed text-base">
                                        {{ $user->phone_no }}
                                    </p>
                                 
                                </div>
                            </div>

                            
                            <div class="flex  mb-10 lg:items-start items-center">
                                <div class="flex-grow">
                                    <h2 class="text-gray-900 text-lg title-font mb-3 font-bold">Course Name
                                    </h2>
                                    <p class="leading-relaxed text-base">
                                        {{ $user->degree->name }}
                                    </p>
                                
                                </div>
                            </div>

                            
                            <div class="flex  mb-10 lg:items-start items-center">
                                <div class="flex-grow">
                                    <h2 class="text-gray-900 text-lg title-font mb-3 font-bold">Date of Birth
                                    </h2>
                                    <p class="leading-relaxed text-base">
                                        {{ $user->dob }}
                                    </p>
                                
                                </div>
                            </div>


                            <div class="flex  mb-10 lg:items-start items-center">
                                <div class="flex-grow">
                                    <h2 class="text-gray-900 text-lg title-font mb-3 font-bold">Address
                                    </h2>
                                    <p class="leading-relaxed text-base">{{$user->address}}</p>
                
                                </div>
                            </div>


                            <div class="flex  mb-10 lg:items-start items-center">
                                <div class="flex-grow">
                                    <h2 class="text-gray-900 text-lg title-font mb-3 font-bold">Religion
                                    </h2>
                                    <p class="leading-relaxed text-base">
                                     {{$user->religion}}
                                    </p>
                    
                                </div>
                            </div>

                        @role('student')
                            <div class="flex  mb-10 lg:items-start items-center">
                                <div class="flex-grow">
                                    <h2 class="text-gray-900 text-lg title-font mb-3 font-bold">Primary School
                                    </h2>
                                    <p class="leading-relaxed text-base">
                                        {{ $user->primary_school }}
                                    </p>
                                 
                                </div>
                            </div>

                            <div class="flex  mb-10 lg:items-start items-center">
                                <div class="flex-grow">
                                    <h2 class="text-gray-900 text-lg title-font mb-3 font-bold">Father's Phone Number
                                    </h2>
                                    <p class="leading-relaxed text-base">
                                        {{ $user->fathers_phone_number }}
                                    </p>
                                 
                                </div>
                            </div>

                            <div class="flex  mb-10 lg:items-start items-center">
                                <div class="flex-grow">
                                    <h2 class="text-gray-900 text-lg title-font mb-3 font-bold">Mother's Phone Number
                                    </h2>
                                    <p class="leading-relaxed text-base">
                                        {{ $user->mothers_phone_number }}
                                    </p>
                                 
                                </div>
                            </div>

                            <div class="flex  mb-10 lg:items-start items-center">
                                <div class="flex-grow">
                                    <h2 class="text-gray-900 text-lg title-font mb-3 font-bold">Guardian's Phone Number
                                    </h2>
                                    <p class="leading-relaxed text-base">
                                        {{ $user->guardians_phone_number }}
                                    </p>
                                 
                                </div>
                            </div>

                        @endrole
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>




    @role('student')
        @include('students.mentor-sessions')
    @endrole
</x-app-layout>
