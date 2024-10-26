<!-- resources/views/dashboard.blade.php -->
@extends('layouts.app')

@section('content')
    <header class="mb-4">
        
        <!-- Welcome message for the logged-in user -->
        <h1 class="text-2xl font-semibold text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Karibu Tena, ') }} {{ auth()->user()->first_name }} {{ auth()->user()->last_name }}.
        </h1>

        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight mt-2">
            {{ __('Dashboard Overview') }}
        </h2>
    </header>

    <div class="py-12 grid grid-cols-4 gap-4">
        <!-- Cards to display statistics -->
        <div class="bg-blue-500 text-white p-6 rounded">
            <h3>Users</h3>
            <p>26K <span class="text-red-400">(-12.4%)</span></p>
        </div>
        <div class="bg-teal-500 text-white p-6 rounded">
            <h3>Income</h3>
            <p>$6,200 <span class="text-green-400">(40.9%)</span></p>
        </div>
        <div class="bg-yellow-500 text-white p-6 rounded">
            <h3>Conversion Rate</h3>
            <p>2.49% <span class="text-green-400">(84.7%)</span></p>
        </div>
        <div class="bg-red-500 text-white p-6 rounded">
            <h3>Sessions</h3>
            <p>44K <span class="text-red-400">(-23.6%)</span></p>
        </div>
    </div>

    <div class="mt-8">
        <!-- Placeholder for the traffic chart -->
        <h3 class="text-xl font-semibold">Traffic</h3>
        <div class="bg-gray-100 dark:bg-gray-700 p-6 rounded">
            <!-- Here, you can include chart or analytics -->
            <p>Chart placeholder (e.g., with Chart.js or similar)</p>
        </div>
    </div>
@endsection
