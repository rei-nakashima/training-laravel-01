@extends('layouts.app')
@section('title', 'カテゴリ編集')
@section('content')
    {{ link_to_route('items.index', '商品一覧', [], ['class' => 'btn btn-primary']) }}
    {{ link_to_route('categories.index', 'カテゴリ一覧', [], ['class' => 'btn btn-primary']) }}
    {{ Form::open(['route' => ['categories.update', $category->id], 'method' => 'put']) }}

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="form-group">
        {{ Form::label('name', 'カテゴリ名：') }}
        {{ Form::text('name', $category->name, ['class' => 'form-control']) }}
    </div>
    このカテゴリに属している商品一覧:
    <ul>
        @foreach($category->items as $item)
            <li>{{ link_to_route('items.show', $item->name, ['item' => $item->id]) }}</li>
        @endforeach
    </ul>
    <div class="form-group">
        {{ Form::submit('更新', ['class' => 'btn btn-success form-control']) }}
    </div>
    {{ Form::close() }}
@endsection