<?php

class UsersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /users
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = User::all();
			return Response::json(array($users->toArray()));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /users/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$this->layout->content = View::make('users.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /users
	 *
	 * @return Response
	 */
	public function store()
	{
		$user = new User();

		$data = Input::all();
		$user -> fill($data);
			//$user->password = Hash::make(Input::get('password'));
			$user->save();
		return Response::json(array(
        'error' => false,
        'user' => $user->toArray()),
        200);
	}

	/**
	 * Display the specified resource.
	 * GET /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$users = DB::table('users')->where('id', $id)->get();
		 return Response::json(array($users));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /users/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$users= User::find($id);
		$this->layout->content = View::make('users.edit', compact('users'));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$users = User::where('id', $id)->get();

		$input=Input::all();
		$users= User::find($id);
		$users->rol= $input['rol'];
		$users->username = $input['username'];
		//$users->password = Hash::make(Input::get('password'));
		$users->password = $input['password'];
		$users->save();

		return Response::json(array(
        'error' => false,
        'message' => 'url updated'),
        200);
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$users = User::where('id', $id)->get();
		User::destroy($id);
		return Response::json(array('error' => false,
        'message' => 'user deleted'),200);
	}

}