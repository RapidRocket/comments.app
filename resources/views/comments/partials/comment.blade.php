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
            <div class="rate-pannel">
                <button type="button"
                        id="testBtn"
                        class="btn btn-success glyphicon glyphicon-thumbs-up"
                        data-loading-text=" ... ">
                    {{ $comment->vote_up }}
                </button>
                {{--<span class="text-info">{{ $comment->vote_up-$comment->vote_dwn }}</span>--}}
                <button type="button" id="testBtnDown"
                        class="btn btn-danger glyphicon glyphicon-thumbs-down"
                        data-loading-text=" ... ">
                    {{ $comment->vote_dwn}}
                </button>
            </div>
            <div class="panel-heading">
                <strong>{{ $comment->user_id }}</strong> <span
                        class="text-muted">commented {{ $comment->created_at->diffForHumans() }}</span>
            </div>
            <div class="panel-body">
                {{ $comment->body }}
            </div><!-- /panel-body -->
        </div><!-- /panel panel-default -->
    </div><!-- /col-sm-5 -->
    </div>