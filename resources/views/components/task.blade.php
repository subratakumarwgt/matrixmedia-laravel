<li>
  Description: {{$task->description}} 
  <a href="{{route('task',['task'=>$task->id])}}">View task</a>
  <br> 
  <small>{{$task->created_at}}</small>
  <br>
  <div>From Project: {{$task->project->name}}</div>
 <br>
 
</li>