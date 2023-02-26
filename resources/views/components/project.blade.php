<li>
    <h5>Name: {{$project->name}}</h5>
    {{$project->description}} 
    <br> 
    <small>Created: {{$project->created_at}}</small>
    <br>
    <a href="{{route('project',['project'=>$project->id])}}"> View project</a>
    <x-task-list :tasks="$project->tasks" />
</li>