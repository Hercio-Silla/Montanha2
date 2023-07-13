<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;

class ForumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['action'] = 'forum';
        $data['users'] = User::where('role', 'guest')->get();

        return view('admin.forum.index', $data);
    }

    /**
     * List of resource data
     */
    public function data(Request $request)
    {
        $search = $request->search['value'];

        $data = Question::with('user')->when($search, function ($q, $search) {
            return $q->where('name', 'like', "%$search%");
        })->skip($request->start)->take($request->length)->get()->map(function($map) {
            $map->email = $map->user->email ?? '-';
            return $map;
        });

        return [
            "draw" => $request->draw,
            "recordsFiltered" => count($data),
            "recordsTotal" => Question::count(),
            "data" => $data
        ];
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'title' => 'required|max:255',
            'description' => 'required',
            'tag' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return Response::json($validator->errors(), 400);
        }

        $data = [
            'user_id' => $request->user_id,
            'title' => $request->title,
            'description' => $request->description,
            'tag' => $request->tag,
        ];

        $resource = Question::query()->create($data);

        return $resource;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'title' => 'required|max:255',
            'description' => 'required',
            'tag' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return Response::json($validator->errors(), 400);
        }

        $data = [
            'user_id' => $request->user_id,
            'title' => $request->title,
            'description' => $request->description,
            'tag' => $request->tag,
        ];
        if($request->has('password') && $request->password != "") {
            $data['password'] = bcrypt($request->password);
        }

        $resource = Question::query()->findOrFail($id);
        $resource->update($data);

        return $resource;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Question::find($id)->delete();
        return true;
    }
}