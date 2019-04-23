@extends('layouts.app')
@section('title', '商品登録')
@section('content')
    {{ link_to_route('items.index', '商品一覧', [], ['class' => 'btn btn-primary']) }}
    {{ link_to_route('categories.index', 'カテゴリ一覧', [], ['class' => 'btn btn-primary']) }}
    {{ Form::open(['route' => 'items.store']) }}

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
        {{ Form::label('name', '商品名：') }}
        {{ Form::text('name', null, ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('category_id', 'カテゴリ：') }}
        {{ Form::select('category_id', $categories, null, ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::submit('登録', ['class' => 'btn btn-primary form-control']) }}
    </div>
    {{ Form::close() }}
@endsection