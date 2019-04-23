@extends('layouts.app')
@section('title', '商品詳細')
@section('content')
    {{ link_to_route('items.index', '商品一覧', [], ['class' => 'btn btn-primary']) }}
    {{ link_to_route('categories.index', 'カテゴリ一覧', [], ['class' => 'btn btn-primary']) }}
    <p>ID：{{ $item->id }}</p>
    <p>商品名：{{ $item->name }}</p>
    <p>カテゴリ名：{{ link_to_route('categories.show', $item->category->name, ['category' => $item->category->id]) }}</p>
    <p>登録日：{{ $item->created_at }}</p>
    <p>更新日：{{ $item->updated_at }}</p>
    {{ link_to_route('items.edit', '編集', ['id' => $item->id], ['class' => 'btn btn-default']) }}
    <div class="item-delete">
        {{ Form::open(['route' => ['items.destroy', $item->id], 'method' => 'delete']) }}
        {{ Form::submit('削除', ['class' => 'btn btn-danger']) }}
        {{ Form::close() }}
    </div>
@endsection
