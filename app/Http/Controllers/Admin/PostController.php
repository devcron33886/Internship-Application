<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyPostRequest;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Institution;
use App\Models\Post;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PostController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('post_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $posts = Post::with(['institution', 'created_by'])->get();

        return view('admin.posts.index', compact('posts'));
    }

    public function create()
    {
        abort_if(Gate::denies('post_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $institutions = Institution::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.posts.create', compact('institutions'));
    }

    public function store(StorePostRequest $request)
    {
        $post = Post::create($request->all());

        return redirect()->route('admin.posts.index');
    }

    public function edit(Post $post)
    {
        abort_if(Gate::denies('post_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $institutions = Institution::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $post->load('institution', 'created_by');

        return view('admin.posts.edit', compact('institutions', 'post'));
    }

    public function update(UpdatePostRequest $request, Post $post)
    {
        $post->update($request->all());

        return redirect()->route('admin.posts.index');
    }

    public function show(Post $post)
    {
        abort_if(Gate::denies('post_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $post->load('institution', 'created_by');

        return view('admin.posts.show', compact('post'));
    }

    public function destroy(Post $post)
    {
        abort_if(Gate::denies('post_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $post->delete();

        return back();
    }

    public function massDestroy(MassDestroyPostRequest $request)
    {
        Post::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
