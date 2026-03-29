@extends('layouts.app')

@section('content')
    <a href="{{ route('articles.create') }}" class="ml-3">Создать статью</a>
    <h1>Список статей</h1>
    @foreach($articles as $article)
        <div>
            <a href="{{ route('articles.show', $article->id) }}">{{ $article->name }}</a>
            <div>{{ Str::limit($article->body, 200) }}</div>
            <a href="{{ route('articles.edit', $article->id) }}" class="ml-3">Редактировать статью</a>
        </div>
    @endforeach
@endsection
