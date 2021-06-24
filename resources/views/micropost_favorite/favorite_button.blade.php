@if (Auth::user()->is_favorite($micropost->id))
    {{-- アンフェイバリットーボタンのフォーム --}}
    {!! Form::open(['route' => ['micropost.unfavorite', $micropost->id], 'method' => 'delete']) !!}
        {!! Form::submit('UnFavorite', ['class' => "btn btn-success btn-sm"]) !!}
    {!! Form::close() !!}
@else
    {{-- フェイバリットボタンのフォーム --}}
    {!! Form::open(['route' => ['micropost.favorite', $micropost->id]]) !!}
        {!! Form::submit('Favorite', ['class' => "btn btn-light btn-sm"]) !!}
    {!! Form::close() !!}
@endif
