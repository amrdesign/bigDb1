<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use App\Models\Post;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        return view('post');
    }


    public function getTable(){
        // $users = Employees::select(['id','name','username','email','created_at','updated_at']);
      // $users = Post::get();
        //$users = Post::query();

        //$users = Post::select(['id','title','author','created_at','updated_at']);

        //$users = Post::withTranslation()->select('posts.*');




     /*   $users =   Post::with('emp')->join('post_translations', 'posts.id', '=', 'post_translations.post_id')
            ->select(
                [
                    'posts.*', 'post_translations.*'
                ]);*/


        $users = Post::with('emp')->with('trans');
// emp
        return Datatables::eloquent($users)
            ->addColumn('action6', function($row) {
                return $row->emp->name;
            })
            ->toJson();
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
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Post $posts
     * @return \Illuminate\Http\Response
     */
    public function show(Post $posts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Post $posts
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $posts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Post $posts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $posts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Post $posts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $posts)
    {
        //
    }
}
