<?php

namespace App\Http\Controllers;


use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $name = $request->get('name');
        /** @var \Illuminate\Contracts\Pagination\LengthAwarePaginator $users */
        $users = User::query()
            ->where('name','like','%'.$name.'%')
            ->paginate(2); // Все строки
        $users->appends(['name'=>$name]);
        return view('user.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('user.edit'); // Возвращаемся на редактирование
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $id = $request->get('id'); // Айди с формы
        if ($id) {
            $user = User::find($id);
        } else {
            $user = new User();
        }

        $user->password = \Hash::make($request->get('password'));
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->save();
        return redirect(route('user.edit', ['user' => $user->id]))->with(['status'=>'Новый пользователь создан']);
    }

    /**
     * Display One User Model
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);

        return view('user.show', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);

        return view('user.edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        /** @var User $user */
        $user = User::find($id);
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->save();
        return redirect(route('user.edit', ['user' => $id]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect(route('user.index'));

    }
}
