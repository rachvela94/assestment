<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostCreateRequest;
use App\Http\Requests\PostUpdateRequest;
use App\Models\Post;
use http\Env\Response;
use Illuminate\Http\JsonResponse;

class PostsController extends Controller
{
    /**
     * Crates a post.
     *
     * @param PostCreateRequest $request
     * @return JsonResponse
     */
    public function create(PostCreateRequest $request): JsonResponse
    {
        $post =  Post::create([
            'title' => $request->getTitle(),
            'author_name' => $request->getAuthorName(),
            'url' => $request->getUrl(),
        ]);
        return response()->json($post, 200);
    }

    /**
     * Updates a post.
     *
     * @param Post $post
     * @param PostUpdateRequest $request
     * @return JsonResponse
     */
    public function update(Post $post, PostUpdateRequest $request): JsonResponse
    {
        $post->update([
            'title' => $request->getTitle(),
            'author_name' => $request->getAuthorName(),
            'url' => $request->getUrl(),
        ]);
        return response()->json(['status' => 'ok'], 200);
    }

    /**
     * gets  a post.
     *
     * @param Post $post
     * @return JsonResponse
     */
    public function get(Post $post): JsonResponse
    {
        return response()->json($post, 200);
    }

    /**
     * gets  a post list.
     *
     * @param Post $post
     * @return JsonResponse
     */
    public function index(Post $post): JsonResponse
    {
        $posts = Post::paginate(15);
        return response()->json($posts, 200);
    }

    /**
     * Deletes  a post.
     *
     * @param Post $post
     * @return JsonResponse
     */
    public function delete(Post $post): JsonResponse
    {
        $post->delete();
        return response()->json(['status' => 'ok'], 200);
    }

    /**
     * Upvote a post.
     *
     * @param Post $post
     * @return JsonResponse
     */
    public function upvote(Post $post): JsonResponse
    {
        $post->increment('upvotes');
        return response()->json(['status' => 'ok'], 200);
    }
}
