<x-app-layout>
<header>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center object-contain">
            {{ __('STUDENT PROFILE') }}
        </h2>
    </x-slot>
    </header>
    
    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
    <table align="right">
        <h1 class="text-center"> Welcome {{ $user->name }} <h1>
                <br>

                <tr class = "content-center">
                        <td class="border px-4 py-2 ">Admission Number</td>
                        <td class="border px-4 py-2"><span>{{$user->reg_id}}</span></td>
                </tr>
                <tr>
                        <td class="border px-4 py-2">Course Name</td>
                        <td class="border px-4 py-2"><span>{{$user->course_name}}</span></td>
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

 </table>
 </div>
 </div>
 </div>
 </x-app-layout>