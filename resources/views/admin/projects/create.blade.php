@extends('layouts.app')

@section('content')

<div class="max-w-xl mx-auto mt-12 bg-white p-8 rounded-lg shadow-sm">

    <h2 class="text-xl font-semibold text-gray-800 mb-6">
        Add Project
    </h2>

    <form action="{{ route('admin.projects.store') }}" method="POST" class="space-y-5">
        @csrf

        <div>
            <label class="block text-sm text-gray-600 mb-1">
                Title
            </label>
            <input type="text" name="title"
                class="w-full border border-gray-300 rounded-md px-3 py-2 
                       focus:outline-none focus:ring-1 focus:ring-gray-400 
                       focus:border-gray-400">
        </div>

        <div>
            <label class="block text-sm text-gray-600 mb-1">
                Description
            </label>
            <textarea name="description" rows="4"
                class="w-full border border-gray-300 rounded-md px-3 py-2 
                       focus:outline-none focus:ring-1 focus:ring-gray-400 
                       focus:border-gray-400"></textarea>
        </div>

        <div>
            <label class="block text-sm text-gray-600 mb-1">
                Tech Stack
            </label>
            <input type="text" name="tech_stack"
                class="w-full border border-gray-300 rounded-md px-3 py-2 
                       focus:outline-none focus:ring-1 focus:ring-gray-400 
                       focus:border-gray-400">
        </div>

        <div class="pt-4">
            <button type="submit"
                class="bg-gray-800 text-white px-5 py-2 rounded-md 
                       hover:bg-gray-700 transition">
                Save
            </button>
        </div>

    </form>

</div>

@endsection