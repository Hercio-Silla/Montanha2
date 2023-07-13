<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['action'] = 'news';

        return view('admin.news.index', $data);
    }

    /**
     * List of resource data
     */
    public function data(Request $request)
    {
        $search = $request->search['value'];

        $data = News::when($search, function ($q, $search) {
            return $q->where('name', 'like', "%$search%");
        })->skip($request->start)->take($request->length)->get()->map(function($map) {
            $map->email = $map->user->email ?? '-';
            return $map;
        });

        return [
            "draw" => $request->draw,
            "recordsFiltered" => count($data),
            "recordsTotal" => News::count(),
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
            'thumbnail' => 'required|file',
            'title' => 'required|max:255',
            'small_description' => 'required',
            'description' => 'required',
        ]);

        if ($validator->fails()) {
            return Response::json($validator->errors(), 400);
        }

        

        $data = [
            'title' => $request->title,
            'small_description' => $request->small_description,
            'description' => $request->description,
        ];

        $file = $request->file('thumbnail');
        if($file) {
            $file->move('public/thumbnail', $file->getClientOriginalName());
            $data['thumbnail'] = 'public/thumbnail/' . $file->getClientOriginalName();
        }

        $resource = News::query()->create($data);

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
            'thumbnail' => 'required',
            'title' => 'required|max:255',
            'small_description' => 'required',
            'description' => 'required',
        ]);

        if ($validator->fails()) {
            return Response::json($validator->errors(), 400);
        }

        $data = [
            'title' => $request->title,
            'small_description' => $request->small_description,
            'description' => $request->description,
        ];

        $file = $request->file('thumbnail');
        if($file) {
            $file->move('public/thumbnail', $file->getClientOriginalName());
            $data['thumbnail'] = 'public/thumbnail/' . $file->getClientOriginalName();
        }

        if($request->has('password') && $request->password != "") {
            $data['password'] = bcrypt($request->password);
        }

        $resource = News::query()->findOrFail($id);
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
        News::find($id)->delete();
        return true;
    }
}