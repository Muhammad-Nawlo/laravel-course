@extends('layout')
@section('content')
    <div class="max-w-2xl mx-auto">
        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold text-gray-800 mb-2">My To-Do List</h1>
            <p class="text-gray-600">Stay organized and productive</p>
        </div>

        <!-- Add Task Form -->
        @include('tasks.add')
        <!-- Task Stats -->
        @include('tasks.stats')
        <!-- Tasks List -->
        <div class="bg-white rounded-lg shadow-lg p-6">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Tasks</h2>
            <ul id="taskList" class="space-y-2">
                @foreach($tasks as $task)
                    <li
                        class="flex items-center gap-3 p-3 rounded-lg hover:bg-gray-50 transition-colors duration-200 group">
                        <div class="flex-1">
                                <span class="{{$task->status ? 'line-through text-gray-400' : 'text-gray-800' }}">
                                   {{$task->name}}
                                </span>
                            <p class="text-xs text-gray-400 mt-1">Created {{ $task->created_at->diffForHumans() }}</p>
                        </div>
                        <form action="{{route('update.task',['task'=>$task->id]) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <button
                                type="submit"
                                class="text-green-500 hover:text-green-700 opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                                @if($task->status)
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M5 13l4 4L19 7"></path>
                                    </svg>
                                @else
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <circle cx="12" cy="12" r="10" stroke-width="2"></circle>
                                    </svg>
                                @endif


                            </button>

                        </form>
                        <form action="{{route('destroy.task',['task'=>$task->id])}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    class="text-red-500 hover:text-red-700 opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                    </path>
                                </svg>
                            </button>
                        </form>


                    </li>
                @endforeach
            </ul>

            @if(count($tasks)==0)

                <p id="emptyState" class="text-center text-gray-400 py-8">No tasks yet. Add one above to get
                    started!</p>
            @endif
        </div>
    </div>
@endsection
