<form action="{{route('create.task')}}" method="POST">
    @csrf
    <div class="bg-white rounded-lg shadow-lg p-6 mb-6">
        <div class="flex gap-2">
            <input type="text" id="taskInput" placeholder="Add a new task..." name="name"
                   class="flex-1 px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
            <button type="submit"
                    class="bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-3 rounded-lg font-medium transition-colors duration-200">
                Add Task
            </button>
        </div>
        @error('name')
        <p class="text-red">{{$message}}</p>
        @enderror
    </div>
</form>
