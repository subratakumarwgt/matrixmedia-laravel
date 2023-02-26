<h4>Task List</h4>
<ul>
    @foreach($tasks as $task)
    <x-task :task="$task" />
    @endforeach
</ul>