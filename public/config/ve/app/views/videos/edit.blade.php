@extends('layouts.scaffold')

@section('main')

<h1>Edit Video</h1>
{{ Form::model($video, array('method' => 'PATCH', 'route' => array('videos.update', $video->id))) }}
    <ul>
        <li>
            {{ Form::label('youtube_id', 'Youtubeid:') }}
            {{ Form::text('youtubeid') }}
        </li>

        <li>
            {{ Form::label('author', 'Author:') }}
            {{ Form::text('author') }}
        </li>

        <li>
            {{ Form::label('title', 'Title:') }}
            {{ Form::text('title') }}
        </li>

        <li>
            {{ Form::label('excerpt', 'Excerpt:') }}
            {{ Form::textarea('excerpt') }}
        </li>

        <li>
            {{ Form::label('views', 'Views:') }}
            {{ Form::input('number', 'views') }}
        </li>

        <li>
            {{ Form::label('likes', 'Likes:') }}
            {{ Form::input('number', 'likes') }}
        </li>

        <li>
            {{ Form::label('aspect_ratio', 'Aspect_ratio:') }}
            {{ Form::text('aspect_ratio') }}
        </li>

        <li>
            {{ Form::label('duration', 'Duration:') }}
            {{ Form::input('number', 'duration') }}
        </li>

        <li>
            {{ Form::label('thumbnail', 'Thumbnail:') }}
            {{ Form::text('thumbnail') }}
        </li>

        <li>
            {{ Form::label('thumbnail_mq', 'Thumbnail_mq:') }}
            {{ Form::text('thumbnail_mq') }}
        </li>

        <li>
            {{ Form::label('thumbnail_hq', 'Thumbnail_hq:') }}
            {{ Form::text('thumbnail_hq') }}
        </li>

        <li>
            {{ Form::submit('Update', array('class' => 'btn btn-info')) }}
            {{ link_to_route('videos.show', 'Cancel', $video->id, array('class' => 'btn')) }}
        </li>
    </ul>
{{ Form::close() }}

@if ($errors->any())
    <ul>
        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
    </ul>
@endif

@stop