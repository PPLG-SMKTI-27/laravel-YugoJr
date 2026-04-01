@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto mt-12 px-4">

    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-semibold">Projects</h2>

        <a href="{{ route('admin.projects.create') }}"
           class="px-4 py-2 text-sm border border-gray-900 rounded-lg hover:bg-gray-900 hover:text-white transition">
            + Add Project
        </a>
    </div>

    @if(session('success'))
        <div class="mb-4 text-green-600">
            {{ session('success') }}
        </div>
    @endif

    @forelse($projects as $project)
        <div class="bg-white p-6 rounded-xl border border-gray-200 mb-4 hover:shadow-md transition">

            <h3 class="text-lg font-semibold mb-1">
                {{ $project->title }}
            </h3>

            <p class="text-xs text-gray-500 mb-3">
                {{ $project->tech_stack }}
            </p>

            <p class="text-sm text-gray-700 mb-4">
                {{ $project->description }}
            </p>

            <div class="flex items-center space-x-4 text-sm">
                <a href="{{ route('admin.projects.edit', $project->id) }}"
                   class="text-blue-600 hover:underline">
                    Edit
                </a>

                <form action="{{ route('admin.projects.destroy', $project->id) }}"
                      method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                            class="text-red-600 hover:underline">
                        Delete
                    </button>
                </form>
            </div>

        </div>
    @empty
        <p class="text-gray-500">No projects available.</p>
    @endforelse

    <div class="mt-6">
        {{ $projects->links() }}
    </div>

</div>
@endsection