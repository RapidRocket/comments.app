<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Http\Requests\CommentRequest;
use Carbon\Carbon;
use Request;
use Illuminate\Support\Facades\Auth;

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
        if (Request::ajax()){
            $comments = Comment::where('post_id', '=', $post_id)->get();
            /*$comments->children;
            $user_info =
            $comments['name'] = $user_info->name;*/

            foreach ($comments as $comment)
            {
                $comment['username'] = $comment->user['name'];
            }

            /*function find_parent ($tmp, $cur_id){
                if($tmp[$cur_id][0]['parent_id']!=0){
                    return find_parent($tmp,$tmp[$cur_id][0]['parent_id']);
                }
                return (int)$tmp[$cur_id][0]['id'];
            }

            function build_tree($comments,$parent_id,$only_parent = false){
                if($comments and isset($comments[$parent_id])){
                    $tree = '<ul>';
                    if($only_parent==false){
                        foreach($comments[$parent_id] as $comment){
                            //echo $comments[$parent_id];
                            dd($comment);
                            $tree .= '<li>'.$comment['parent_id'].' #'.$comment['id'];
                            $tree .=  build_tree($comments,$comment['parent_id']);
                            $tree .= '</li>';
                        }
                    }elseif(is_numeric($only_parent)){
                        $comment = $comments[$parent_id][$only_parent];
                        $tree .= '<li>'.$comment['username'].' #'.$comment['id'];
                        $tree .=  build_tree($comments,$comment['id']);
                        $tree .= '</li>';
                    }
                    $tree .= '</ul>';
                }
                else return null;
                return $tree;
            }
            return build_tree($comments, '0', find_parent($cats_ID,ВАШ_ID_КАТЕГОРИИ));*/
            return $comments;
        }
        return 'Is not an AJAX Request';
    }

    public function store(CommentRequest $request)
    {

        $request['published_at'] = Carbon::now();
        $comment = new Comment($request->all());
        Auth::user()->comments()->save($comment);


        return redirect ('posts/'.$request['post_id']);
    }

    public function edit($id)
    {
        $comment = Comment::findOrFail($id);
        return redirect('posts/'.$comment['post_id']);
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
