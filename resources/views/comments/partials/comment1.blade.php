<div class="row">
    <div class="col-sm-12">
        <h3>User Comment Example</h3>
    </div><!-- /col-sm-12 -->
</div><!-- /row -->
<div class="row">
    <div class="col-sm-1">
        <div class="thumbnail">
            <img class="img-responsive user-photo"
                 src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
        </div><!-- /thumbnail -->
    </div><!-- /col-sm-1 -->

    <div class="col-sm-5">
        <div class="panel panel-default">

            <div class="btn-group btn-group-justified" role="group">
                <div class="btn-group" role="group">
                    <button type="button"
                            class="btn btn-default">
                        <span
                                class="glyphicon glyphicon-thumbs-up"></span>{{ $comment->vote_up }}</button>
                </div>
                <div class="btn-group" role="group">
                    {{--<a href="{{ action('PostsController@edit',[$post->id]) }}">--}}
                    <a type="button" class="btn btn-default disabled" role="button">{{ $comment->vote_up-$comment->vote_dwn }}</a>
                    {{--</a>--}}
                </div>
                <div class="btn-group" role="group">
                    {{--<a href="{{ action('PostsController@show',[$post->id]) }}">--}}
                    <button type="button" class="btn btn-default"><span
                                class="glyphicon glyphicon-thumbs-down"></span>{{ $comment->vote_dwn}}</button>
                    {{--</a>--}}
                </div>
            </div>

            <div class="panel-heading">
                <strong>{{ $comment->user_id }}</strong> <span
                        class="text-muted">commented {{ $comment->created_at->diffForHumans() }}</span>
            </div>
            <div class="panel-body">
                {{ $comment->body }}
            </div><!-- /panel-body -->
            <!-- Post Actions -->
            <div class="btn-group pull-right">
                <a href="{{ action('CommentsController@create', [$comment->post_id, $comment->id] ) }}"> <button type="button" class="btn btn-info">Reply</button></a>
                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                </ul>
            </div>
            <!-- /Post Actions -->
        </div><!-- /panel panel-default -->

    </div><!-- /col-sm-5 -->
</div>