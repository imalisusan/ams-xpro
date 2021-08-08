<nav x-data="{ open: false }" class="bg-white border-b border-black-100 ">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 object-contain">
            <div class="flex">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center font-medium">
                    <a href="{{ route('student.profile') }}">
                        <x-jet-authentication-card-logo class="block h-9 w-auto" />
                    </a>
                    
                </div> 
                <div style="width:30px;"></div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex  text-align:center text-gray-700 text-base font-small">
                    <x-jet-nav-link class="text-gray-700 text-sm font-small" href="{{ route('student.profile') }}">
                        {{ __('Home') }}
                    </x-jet-nav-link>

                    <!-- Coursework Links -->
                    <div class="hidden sm:flex sm:items-center sm:ml-6">
                        <x-jet-dropdown align="right" width="60">
                            <x-slot name="trigger">
                                <span class="inline-flex rounded-md">
                                    <button type="button"
                                    class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-700 bg-white hover:bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-white transition ease-in-out duration-150">
                                            Coursework                                                                                                              
                                            <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                            </svg>
                                    </button>
                                </span>
                            </x-slot>
                            
                            <x-slot name="content">
                                    <x-jet-dropdown-link  href="{{ route('courses.index') }}">
                                   @role('lecturer')
                                   {{ __('Teach') }}
                                   @endrole

                                   @role('student')
                                   {{ __('Self Registration') }}
                                   @endrole
                                    </x-jet-dropdown-link>

                                    @role('student')
                                    <x-jet-dropdown-link href="{{ route('courses.personal') }}">
                                        {{ __('My Courses') }}
                                    </x-jet-dropdown-link>
                                    @endrole

                                    @role('lecturer')
                                    <x-jet-dropdown-link href="{{ route('courses.teaching') }}">
                                        {{ __('My Courses') }}
                                    </x-jet-dropdown-link>
                                    @endrole
                                    
                                    @role('admin')
                                    <x-jet-dropdown-link href="{{ route('coursemarks.index') }}">
                                        {{ __('CourseWork Marks ') }}
                                    </x-jet-dropdown-link>
                                    @endrole

                                    @role('lecturer')
                                    <x-jet-dropdown-link href="{{ route('coursemodules.create') }}">
                                        {{ __('Course Modules') }}
                                    </x-jet-dropdown-link>
                                    @endrole
                                    
                            </x-slot>
                        </x-jet-dropdown>
                    </div> 
                    <!-- End of Coursework Links -->

                    @role('student')
                    <!-- Fee Details Links -->
                    <div class="hidden sm:flex sm:items-center sm:ml-6">
                        <x-jet-dropdown>
                            <x-slot name="trigger">
                                <span class="inline-flex rounded-md">
                                    <button type="button"
                                        class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-700 bg-white hover:bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-white transition ease-in-out duration-150">
                                            Fees Details                                                                                                              
                                            <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                            </svg>
                                    </button>
                                </span>
                            </x-slot>
                            
                            <x-slot name="content">
                                    <x-jet-dropdown-link href="{{ route('fees.feestatement')}}">
                                        {{ __('Fee Statement') }}
                                    </x-jet-dropdown-link>

                                    <x-jet-dropdown-link href="{{ route('feestructures.index')}}" >
                                        {{ __('Fee Structure') }}
                                    </x-jet-dropdown-link>      
                            </x-slot>
                        </x-jet-dropdown>
                    </div> 
                    @endrole
                    <!-- End of Fees Details Links -->

                    @role('admin')
                    <!-- Fee Details Links -->
                    <div class="hidden sm:flex sm:items-center sm:ml-6">
                        <x-jet-dropdown>
                            <x-slot name="trigger">
                                <span class="inline-flex rounded-md">
                                    <button type="button"
                                        class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-700 bg-white hover:bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-white transition ease-in-out duration-150">
                                            Fees Details                                                                                                              
                                            <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                            </svg>
                                    </button>
                                </span>
                            </x-slot>
                            
                            <x-slot name="content">
                                    <x-jet-dropdown-link href="{{ route('fees.feestatement')}}">
                                        {{ __('Fee Statement') }}
                                    </x-jet-dropdown-link>

                                    <x-jet-dropdown-link href="{{ route('feestructures.index')}}" >
                                        {{ __('Fee Structure') }}
                                    </x-jet-dropdown-link>      
                            </x-slot>
                        </x-jet-dropdown>
                    </div> 
                    @endrole
                    <!-- End of Fees Details Links -->
                    @role('student')
                    <x-jet-nav-link class="text-gray-700 text-sm font-small" href="{{ route('attendance.index') }}" :active="request()->routeIs('attendance.index')">
                        {{ __('Attendance') }}
                    </x-jet-nav-link>
                    
                    <x-jet-nav-link class="text-gray-700 text-sm font-small" href="{{ route('student.progress') }}" :active="request()->routeIs('student.progress')">
                        {{ __('Progress Report') }}
                    </x-jet-nav-link>
                    <x-jet-nav-link class="text-gray-700 text-sm font-small" href="{{ route('examcards.index') }}" :active="request()->routeIs('examcards.index')">
                        {{ __('Exam Card') }}
                    </x-jet-nav-link>
                    @endrole

                    
                    @role('admin')
                          <!-- Administrator Links -->
                          <div class="hidden sm:flex sm:items-center sm:ml-6">
                        <x-jet-dropdown>
                            <x-slot name="trigger">
                                <span class="inline-flex rounded-md">
                                    <button type="button"
                                        class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-700 bg-white hover:bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-white transition ease-in-out duration-150">
                                            Administrator Panel                                                                                                             
                                            <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                            </svg>
                                    </button>
                                </span>
                            </x-slot>
                            
                            <x-slot name="content">
                                    <x-jet-dropdown-link href="{{ route('lecturers.index')}}">
                                        {{ __('Lecturers') }}
                                    </x-jet-dropdown-link>

                                    <x-jet-dropdown-link href="{{ route('mentors.index')}}" >
                                        {{ __('Mentors') }}
                                    </x-jet-dropdown-link>    

                                    <x-jet-dropdown-link href="{{ route('students.index')}}">
                                        {{ __('Students') }}
                                    </x-jet-dropdown-link>
                                    
                                    <x-jet-dropdown-link href="{{ route('students.index')}}" >
                                        {{ __('Student Mentors') }}
                                    </x-jet-dropdown-link> 
                                    
                                    <x-jet-dropdown-link href="{{ route('mentoringsessions.index')}}" >
                                        {{ __('Mentoring Sessions') }}
                                    </x-jet-dropdown-link> 
                                    
                                    <x-jet-dropdown-link href="{{ route('degrees.index')}}" >
                                        {{ __('Degrees') }}
                                    </x-jet-dropdown-link> 

                                    <x-jet-dropdown-link href="/laratrust">
                                        {{ __('Roles & Permissions') }}
                                    </x-jet-dropdown-link>
                            </x-slot>
                        </x-jet-dropdown>
                    </div> 
                    <!-- End of Administrator Links -->

                    @endrole

                </div>
            </div>

            <div class="hidden sm:flex sm:items-center sm:ml-6">
               

                <!-- Settings Dropdown -->
                <div class="ml-3 relative">
                    <x-jet-dropdown style="align:right; width:48;" >
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                    <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                </button>
                            @else
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-900 bg-transparent hover:text-gray-700 focus:outline-none transition">
                                        {{ Auth::user()->name }}

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </span>
                            @endif
                        </x-slot>

                        <x-slot name="content">
                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-base text-gray-700">
                                {{ __('Manage Account') }}
                            </div>

                            <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('Profile') }}
                            </x-jet-dropdown-link>

                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                    {{ __('API Tokens') }}
                                </x-jet-dropdown-link>
                            @endif

                            <div class="border-t border-gray-100"></div>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-jet-dropdown-link href="{{ route('logout') }}"
                                         onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-jet-dropdown-link>
                            </form>
                        </x-slot>
                    </x-jet-dropdown>
                </div>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="flex items-center px-4">
                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                    <div class="flex-shrink-0 mr-3">
                        <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                    </div>
                @endif

                <div>
                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Account Management -->
                <x-jet-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                    {{ __('Profile') }}
                </x-jet-responsive-nav-link>

              

                           @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                    <x-jet-responsive-nav-link href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">
                        {{ __('API Tokens') }}
                    </x-jet-responsive-nav-link>
                @endif

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-jet-responsive-nav-link href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                    this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-jet-responsive-nav-link>
                </form>

            </div>
        </div>
    </div>
</nav>