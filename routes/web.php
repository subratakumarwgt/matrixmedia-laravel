<?php

use App\Models\Project;
use App\Models\Task;
use App\View\Components\Project as ComponentsProject;
use App\View\Components\ProjectList;
use App\View\Components\TaskList;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(["prefix" => "projects"],function(){
    Route::get("/",function(){
        $projects = Project::with("tasks")->get();
        $view = new ProjectList($projects);
        return $view->render() ;
        // return response($projects);
      })->name("projects");
      Route::get("/{project}",function(Project $project){  
        return View::make("components.project",["project" => $project]);     
      
      })->name("project");
});
Route::group(["prefix" => "tasks"],function(){
      Route::get("/",function(){
        $tasks = Task::with("project")->get();
        $view = new TaskList($tasks);
        return $view->render() ;
      })->name("tasks");
      Route::get("/{task}",function(Task $task){             
        return View::make("components.task",["task" => $task]); 
      })->name("task");
});
Route::get('routes', function () {
    $routeCollection = Route::getRoutes();

    echo "<table style='width:100%'>";
    echo "<tr>";
    echo "<td width='10%'><h4>HTTP Method</h4></td>";
    echo "<td width='10%'><h4>Route</h4></td>";
    echo "<td width='10%'><h4>Name</h4></td>";
    echo "<td width='70%'><h4>Corresponding Action</h4></td>";
    echo "</tr>";
    foreach ($routeCollection as $value) {
        echo "<tr>";
        echo "<td>" . $value->methods()[0] . "</td>";
        echo "<td>" . $value->uri() . "</td>";
        echo "<td>" . $value->getName() . "</td>";
        echo "<td>" . $value->getActionName() . "</td>";
        echo "</tr>";
    }
    echo "</table>";
});

