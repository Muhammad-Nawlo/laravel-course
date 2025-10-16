<div class="bg-white rounded-lg shadow-lg p-4 mb-6">
    <div class="flex justify-around text-center">
        <div>
            <p class="text-2xl font-bold text-indigo-600" id="totalTasks">{{$tasksT}}</p>
            <p class="text-sm text-gray-600">Total Tasks</p>
        </div>
        <div>
            <p class="text-2xl font-bold text-green-600" id="completedTasks">{{$tasksC}}</p>
            <p class="text-sm text-gray-600">Completed</p>
        </div>
        <div>
            <p class="text-2xl font-bold text-orange-600" id="pendingTasks">{{$tasksP}}</p>
            <p class="text-sm text-gray-600">Pending</p>
        </div>
    </div>
</div>
