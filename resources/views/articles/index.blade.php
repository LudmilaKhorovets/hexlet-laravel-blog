@extends('layouts.app')

@section('content')
    <a href="{{ route('articles.create') }}" class="ml-3">Создать статью</a>
    <h1>Список статей</h1>
    @foreach($articles as $article)
        <div>
            <a href="{{ route('articles.show', $article->id) }}">{{ $article->name }}</a>
            (<a href="{{ route('articles.edit', $article->id) }}">Редактировать</a>),
            (<a href="{{ route('articles.destroy', $article) }}" data-confirm="Вы уверены?" data-method="delete" class="fa fa-remove" rel="nofollow">Удалить </a>)
            <div>{{ Str::limit($article->body, 200) }}</div>
        </div>
    @endforeach
@endsection
