<div class="form-group">
        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
        {!! Form::label('body', 'Body:') !!}
        {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
        {!! Form::label('created_at', 'Created On:') !!}
        {!! Form::input('date', 'created_at', $article->created_at, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
        {!! Form::label('tag_list', 'Tags:') !!}
        {!! Form::select('tag_list[]', $tags, null, ['id' => 'tag_list', 'class' => 'form-control', 'multiple']) !!}
</div>

<div class="form-group">
        {!! Form::submit($submitButton, ['class' => 'btn btn-primary form-control']) !!}
</div>

@section('footer')
    <script>
        $('#tag_list').select2({
                placeholder: "Select a Tag", 
                // need to build out the backend for this
                tags: true,
        });
    </script>
@endsection