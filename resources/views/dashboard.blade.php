<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center object-contain">
            {{ __('STUDENT PROFILE') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <table border = "1">
                <tr>
                        <td>Admission Number</td>
                        <td>Name</td>
                        <td>Email</td>
                        <td>Date of birth</td>
                        <td>Phone Number</td>
                </tr>
              
 </table>
            </div>
        </div>
    </div>
</x-app-layout>
