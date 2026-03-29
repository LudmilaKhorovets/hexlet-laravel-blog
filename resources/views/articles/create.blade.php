@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
{{ html()->modelForm($article, 'POST', route('articles.store'))->open() }}
<div class="form-group">
    {{ html()->label('Имя', 'name') }}
    {{ html()->input('text', 'name') }}
    @error('name')
    <div style="color: red;">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    {{ html()->label('Содержание', 'body') }}
    {{ html()->textarea('body') }}

    @error('body')
    <div style="color: red;">{{ $message }}</div>
    @enderror
</div>
{{ html()->submit('Создать') }}
{{ html()->closeModelForm() }}
