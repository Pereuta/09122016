<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;

class TaskController extends Controller {

    /**
     * Создание нового экземпляра контроллера.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

   /**
   * Показать список всех задач пользователя.
   *
   * @param  Request  $request
   * @return Response
   */
    public function index(Request $request) {
        $tasks = Task::where('user_id', $request->user()->id)->get();
        return view('tasks.index', [
            'tasks' => $tasks,
        ]);
    }

    /**
     * Создание новой задачи.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request) {
        $this->validate($request, [
            'name' => 'required|max:255',
        ]);

        $request->user()->tasks()->create([
            'name' => $request->name,
        ]);

        return redirect('/tasks');
    }

}
