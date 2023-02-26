<h3>Project list</h3>
<ul>
    @foreach($projects as $project)
    <x-project :project="$project" />
    @endforeach
</ul>