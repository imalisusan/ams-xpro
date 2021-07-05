<x-app-layout>
<header>
<x-slot name="header">

        @role('student')
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center object-contain">
            {{ __('STUDENT PROFILE') }}
        </h2>
        @endrole

        @role('admin')
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center object-contain">
            {{ __('ADMIN PROFILE') }}
        </h2>
        @endrole

        @role('lecturer')
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center object-contain">
            {{ __('LECTURER PROFILE') }}
        </h2>
         @endrole

    </x-slot>
    </header>
   
    <div class="py-12" >
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg h-80">
                <div id="image" style="float:left; padding:50px;">
                    <img src="{{ asset('assets/images/profile.svg') }}" class="block h-40 w-auto" />
                </div>
                
    <table align="right"  style="float:right;margin-right:20px;">
        <br>
        <h1 class="text-center"> Welcome {{ $user->name }} <h1>
               
                <div id="table" style="margin-top:10px;">
                    <tr class = "content-center">
                        <td class="border px-4 py-2 ">Admission Number</td>
                        <td class="border px-4 py-2"><span>{{$user->reg_id}}</span></td>
                </tr>
                <tr>
                    @role('student')
                        <td class="border px-4 py-2">Course Name</td>
                        <td class="border px-4 py-2"><span>{{$user->course_name}}</span></td>
                    @endrole
                        </tr>
                        <tr>
                        <td class="border px-4 py-2">Name</td>
                        <td class="border px-4 py-2"><span>{{$user->name}}</span></td>
                        </tr></tr>
                        <td class="border px-4 py-2">Email</td>
                        <td class="border px-4 py-2"><span>{{$user->email}}</span></td>
                        </tr><tr>
                        <td class="border px-4 py-2">Date of birth</td>
                        <td class="border px-4 py-2"><span>{{$user->dob}}</span></td>
                        </tr><tr>
                        <td class="border px-4 py-2">Phone Number</td>
                        <td class="border px-4 py-2"><span>{{$user->phone_no}}</span></td>
                </tr>
                </div>

 </table>
 </div>
 </div>
 </div>
 </x-app-layout>