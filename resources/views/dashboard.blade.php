{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-gray-800 leading-tight">
            Doctor Dashboard
        </h2>
    </x-slot>

    {{$appointments}}
    {{$doctor}}

    <div class="py-6 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-8">

            <!-- Greeting Banner -->
            <div class="bg-gradient-to-r from-indigo-500 to-blue-600 text-white rounded-xl p-6 shadow-lg">
                <h3 class="text-2xl font-bold">Welcome back, Dr. Smith!</h3>
                <p class="mt-1 text-lg">Here's your overview for today.</p>
            </div>

            <!-- Stat Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-white rounded-xl shadow-md p-6 flex items-center space-x-4">
                    <div class="bg-indigo-100 text-indigo-600 p-3 rounded-full">
                        📅
                    </div>
                    <div>
                        <p class="text-gray-500">Appointments</p>
                        <p class="text-2xl font-bold text-indigo-600">5</p>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-md p-6 flex items-center space-x-4">
                    <div class="bg-green-100 text-green-600 p-3 rounded-full">
                        🧑‍⚕️
                    </div>
                    <div>
                        <p class="text-gray-500">Patients</p>
                        <p class="text-2xl font-bold text-green-600">24</p>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-md p-6 flex items-center space-x-4">
                    <div class="bg-yellow-100 text-yellow-500 p-3 rounded-full">
                        ⭐
                    </div>
                    <div>
                        <p class="text-gray-500">Avg. Rating</p>
                        <p class="text-2xl font-bold text-yellow-500">4.8</p>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-md p-6 flex items-center space-x-4">
                    <div class="bg-purple-100 text-purple-600 p-3 rounded-full">
                        📝
                    </div>
                    <div>
                        <p class="text-gray-500">Reviews</p>
                        <p class="text-2xl font-bold text-purple-600">12</p>
                    </div>
                </div>
            </div>

            <!-- Upcoming Appointments -->
            <div class="bg-white rounded-xl shadow-md p-6">
                <h3 class="text-xl font-bold text-gray-800 mb-4">Upcoming Appointments</h3>
                <ul class="divide-y divide-gray-200">
                    <li class="py-4 flex justify-between items-center">
                        <div>
                            <p class="font-medium text-gray-700">John Doe</p>
                            <p class="text-sm text-gray-500">2025-06-28 at 10:00 AM</p>
                        </div>
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-blue-100 text-blue-600">
                            Scheduled
                        </span>
                    </li>
                    <li class="py-4 flex justify-between items-center">
                        <div>
                            <p class="font-medium text-gray-700">Jane Smith</p>
                            <p class="text-sm text-gray-500">2025-06-28 at 11:30 AM</p>
                        </div>
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-blue-100 text-blue-600">
                            Scheduled
                        </span>
                    </li>
                    <li class="py-4 flex justify-between items-center">
                        <div>
                            <p class="font-medium text-gray-700">David Johnson</p>
                            <p class="text-sm text-gray-500">2025-06-28 at 2:00 PM</p>
                        </div>
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-blue-100 text-blue-600">
                            Scheduled
                        </span>
                    </li>
                </ul>
            </div>

            <!-- Patient Reviews -->
            <div class="bg-white rounded-xl shadow-md p-6">
                <h3 class="text-xl font-bold text-gray-800 mb-4">Recent Patient Reviews</h3>
                <div class="space-y-4">
                    <div class="p-4 border rounded-lg shadow-sm hover:bg-gray-50 transition">
                        <div class="flex justify-between items-center mb-2">
                            <div>
                                <p class="font-semibold text-gray-700">Emily Brown</p>
                                <p class="text-sm text-gray-500">June 25, 2025</p>
                            </div>
                            <span class="text-yellow-500 text-lg font-bold">5 ⭐</span>
                        </div>
                        <p class="text-gray-600">"Excellent service and very friendly!"</p>
                    </div>
                    <div class="p-4 border rounded-lg shadow-sm hover:bg-gray-50 transition">
                        <div class="flex justify-between items-center mb-2">
                            <div>
                                <p class="font-semibold text-gray-700">Michael Lee</p>
                                <p class="text-sm text-gray-500">June 24, 2025</p>
                            </div>
                            <span class="text-yellow-500 text-lg font-bold">4 ⭐</span>
                        </div>
                        <p class="text-gray-600">"Very helpful and professional."</p>
                    </div>
                    <div class="p-4 border rounded-lg shadow-sm hover:bg-gray-50 transition">
                        <div class="flex justify-between items-center mb-2">
                            <div>
                                <p class="font-semibold text-gray-700">Sarah Wilson</p>
                                <p class="text-sm text-gray-500">June 23, 2025</p>
                            </div>
                            <span class="text-yellow-500 text-lg font-bold">5 ⭐</span>
                        </div>
                        <p class="text-gray-600">"Highly recommend this doctor!"</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}




<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-semibold text-gray-800 leading-tight">
            Doctor Dashboard
        </h2>
    </x-slot>
    {{$reviews}}
    
    <div class="py-8 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-8">

            <!-- Greeting Banner -->
            <div class="bg-white border rounded-lg p-6 shadow-sm">
                <h3 class="text-xl font-semibold text-gray-800">Welcome back, Dr. {{ $doctor->name ?? 'Doctor' }}</h3>
                <p class="mt-2 text-gray-600">Here's your overview for today.</p>
            </div>

            <!-- Stat Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-white border rounded-lg p-5 shadow-sm">
                    <p class="text-gray-500">Upcoming Appointments</p>
                    <p class="mt-2 text-3xl font-bold text-indigo-600">{{ $appointments->count() }}</p>
                </div>
                <div class="bg-white border rounded-lg p-5 shadow-sm">
                    <p class="text-gray-500">Patients</p>
                    <p class="mt-2 text-3xl font-bold text-green-600">24</p>
                </div>
                <div class="bg-white border rounded-lg p-5 shadow-sm">
                    <p class="text-gray-500">Avg. Rating</p>
                    <p class="mt-2 text-3xl font-bold text-yellow-500">4.8</p>
                </div>
                <div class="bg-white border rounded-lg p-5 shadow-sm">
                    <p class="text-gray-500">Reviews</p>
                    <p class="mt-2 text-3xl font-bold text-purple-600">12</p>
                </div>
            </div>

            <!-- Upcoming Appointments -->
            <div class="bg-white border rounded-lg p-6 shadow-sm">
                <h3 class="text-lg font-semibold text-gray-800 mb-4">Upcoming Appointments</h3>
                @if ($appointments->count())
                    <ul class="divide-y divide-gray-200">
                        @foreach ($appointments as $appointment)
                            <li class="py-4 flex justify-between items-center">
                                <div>
                                    <p class="font-medium text-gray-800">{{ $appointment->patient_name ?? 'Patient' }}</p>
                                    <p class="text-sm text-gray-500">
                                        {{ $appointment->date ?? '' }} at {{ $appointment->time ?? '' }}
                                    </p>
                                </div>
                                <span class="px-3 py-1 rounded-full text-sm bg-blue-50 text-blue-600 border border-blue-200">
                                    Scheduled
                                </span>
                            </li>
                        @endforeach
                    </ul>
                @else
                    <p class="text-gray-500">No upcoming appointments.</p>
                @endif
            </div>

            <!-- Patient Reviews -->
            <div class="bg-white border rounded-lg p-6 shadow-sm">
                <h3 class="text-lg font-semibold text-gray-800 mb-4">Recent Patient Reviews</h3>
                <div class="space-y-4">
                    <div class="p-4 border rounded-lg bg-gray-50">
                        <div class="flex justify-between items-center mb-1">
                            <div>
                                <p class="font-medium text-gray-800">Emily Brown</p>
                                <p class="text-sm text-gray-500">June 25, 2025</p>
                            </div>
                            <span class="text-yellow-500 font-semibold">5 ⭐</span>
                        </div>
                        <p class="text-gray-600">"Excellent service and very friendly!"</p>
                    </div>
                    <div class="p-4 border rounded-lg bg-gray-50">
                        <div class="flex justify-between items-center mb-1">
                            <div>
                                <p class="font-medium text-gray-800">Michael Lee</p>
                                <p class="text-sm text-gray-500">June 24, 2025</p>
                            </div>
                            <span class="text-yellow-500 font-semibold">4 ⭐</span>
                        </div>
                        <p class="text-gray-600">"Very helpful and professional."</p>
                    </div>
                    <div class="p-4 border rounded-lg bg-gray-50">
                        <div class="flex justify-between items-center mb-1">
                            <div>
                                <p class="font-medium text-gray-800">Sarah Wilson</p>
                                <p class="text-sm text-gray-500">June 23, 2025</p>
                            </div>
                            <span class="text-yellow-500 font-semibold">5 ⭐</span>
                        </div>
                        <p class="text-gray-600">"Highly recommend this doctor!"</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
