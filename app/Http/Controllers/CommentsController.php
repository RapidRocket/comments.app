<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Http\Requests\CommentRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Request;

class CommentsController extends Controller
{

    public function create()
    {
        //$post_id = $data->id;
        //$comment_id = $data->comment_id;
        return view('comments.create');//, compact('post_id','comment_id'));
    }


    public function show($post_id)
    {
        if (Request::ajax()) {
            //$comments = Comment::where('post_id', '=', $post_id)->where('parent_id', '=', null)->get();
            //$count = Comment::findorFail(0)->childrens;

            //return $comments;

            /*public function hasNoParent ()
            {

            }*/
            /*$comments->children;
            $user_info =
            $comments['name'] = $user_info->name;*/

            /*function find_parent ($tmp, $cur_id){
                if($tmp[$cur_id][0]['parent_id']!=0){
                    return find_parent($tmp,$tmp[$cur_id][0]['parent_id']);
                }
                return (int)$tmp[$cur_id][0]['id'];
            }*/
            //$result = '';
            function build_tree($comments)
            {
                if($comments) {
                    $result = "<ul>\n";
                    foreach ($comments as $comment) {
                        $result .= "<li>";
                        $result .= $comment->id;
                        $result .= "</li>\n";
//                    $count = Comment::findorFail(2)->childrens;

                        $children = Comment::findorFail($comment->id)->childrens;
                        if (isset($children)) {
                            $result .= build_tree($children);
                        }
                        $result .= "</li>\n";

                    }
                    $result .= "</ul>";

                    return $result;
                }

            }

            $noparents = Comment::where('post_id', '=', $post_id)->where('parent_id', '=', null)->get();
            //$treepart ='';
            /*foreach ($noparents as $noparent) {

                return build_tree($noparent);

            }*/

            return build_tree($noparents);

//            return $comments;
        }
        return 'Is not an AJAX Request';
    }

    public function store(CommentRequest $request)
    {

        $request['published_at'] = Carbon::now();
        $comment = new Comment($request->all());
        Auth::user()->comments()->save($comment);


        return redirect('posts/' . $request['post_id']);
    }

    public function edit($id)
    {
        $comment = Comment::findOrFail($id);
        return redirect('posts/' . $comment['post_id']);
    }

    public function update(CommentRequest $request)
    {

    }

    public function destroy()
    {

    }

    public function vote()
    {

    }
}
