<?php

namespace App\Http\Controllers;

use App\Http\Requests\SavePostRequest;
use Illuminate\Http\Request;
use App\Models\Post;
use Tymon\JWTAuth\Facades\JWTAuth;
use Symfony\Component\HttpKernel\Exception\HttpException;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = JWTAuth::user();
        return Post::where('privacy', 'public')
                    ->orWhere('user_id', $user->id)
                    ->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SavePostRequest $request)
    {
        $post = new Post();        

        return $this->savePost(new Post(), $request);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SavePostRequest $request, $id)
    {
        return $this->savePost(Post::FindOrFail($id), $request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = JWTAuth::user();
        $post = Post::FindOrFail($id);

        if($post->user_id == $user->id){
            $post->delete();
        }else{
            throw new HttpException(401,'You dont own the post.');
        }
    }

    private function savePost(Post $post, SavePostRequest $request)
    {
        $user = JWTAuth::user();
        $post->fill($request->all());
        $post->user_id = $user->id;
        $post->save();

        return $post;
    }
}
