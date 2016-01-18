<!-- Text Form Input -->
<div class="form-group">
    {!! Form::label('body', 'Text:') !!}
    {!! Form::textarea('body',null, ['class' => 'form-control']) !!}
</div>

<!-- Post_id Form Input Hidden -->
<div class="form-group">
    {!! Form::hidden('post_id',$post->id, ['class' => 'form-control' ]) !!}
</div>

<!-- Add Comment Form Input -->
<div class="form-group">
    {!! Form::submit($submitCommentText, ['class' => 'btn btn-primary form-control']) !!}
</div>