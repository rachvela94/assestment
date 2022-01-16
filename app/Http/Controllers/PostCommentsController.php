<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostCommentsCreateRequest;
use App\Http\Requests\PostCommentUpdateRequest;
use App\Http\Requests\PostUpdateRequest;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\JsonResponse;

class PostCommentsController extends Controller
{
    /**
     * Crates a post comment.
     *
     * @param Post $post
     * @param PostCommentsCreateRequest $request
     * @return JsonResponse
     */
    public function create(Post $post, PostCommentsCreateRequest $request): JsonResponse
    {
        $comment =  $post->comments()->create([
            'author_name' => $request->getAuthorName(),
            'content' => $request->getCommentContent()
        ]);
        return response()->json($comment, 200);
    }

    /**
     * Updates a post.
     *
     * @param Post $post
     * @param Comment $comment
     * @param PostCommentUpdateRequest $request
     * @return JsonResponse
     */
    public function update(Post $post, Comment $comment, PostCommentUpdateRequest $request): JsonResponse
    {
        $comment->update([
            'content' => $request->getCommentContent()
        ]);
        return response()->json(['status' => 'ok'], 200);
    }

    /**
     * Gets a comment.
     *
     * @param Post $post
     * @param Comment $comment
     * @return JsonResponse
     */
    public function get(Post $post, Comment $comment): JsonResponse
    {
        return response()->json($comment, 200);
    }

    /**
     * gets  a comments list.
     *
     * @param Post $post
     * @return JsonResponse
     */
    public function index(Post $post): JsonResponse
    {
        $comments = Comment::paginate(15);
        return response()->json($comments, 200);
    }

    /**
     * Deletes  a post.
     *
     * @param Post $post
     * @param Comment $comment
     * @return JsonResponse
     */
    public function delete(Post $post, Comment $comment): JsonResponse
    {
        $comment->delete();
        return response()->json(['status' => 'ok'], 200);
    }
}
