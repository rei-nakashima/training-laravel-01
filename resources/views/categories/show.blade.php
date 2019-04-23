@extends('layouts.app')
@section('title', 'カテゴリ詳細')
@section('content')
    {{ link_to_route('items.index', '商品一覧', [], ['class' => 'btn btn-primary']) }}
    {{ link_to_route('categories.index', 'カテゴリ一覧', [], ['class' => 'btn btn-primary']) }}
    <p>ID：{{ $category->id }}</p>
    <p>カテゴリ名：{{ $category->name }}</p>
    <p>登録日：{{ $category->created_at }}</p>
    <p>更新日：{{ $category->updated_at }}</p>

    このカテゴリに属している商品一覧:
    <ul>
        @foreach($category->items as $item)
            <li>{{ link_to_route('items.show', $item->name, ['item' => $item->id]) }}</li>
        @endforeach
    </ul>
    {{ link_to_route('categories.edit', '編集', ['id' => $category->id], ['class' => 'btn btn-default']) }}
    <div class="category-delete">
        {{ Form::open(['route' => ['categories.destroy', $category->id], 'method' => 'delete']) }}
        {{ Form::submit('削除', ['class' => 'btn btn-danger']) }}
        {{ Form::close() }}
    </div>
@endsection
