@extends('layouts.app')

@section('main')
<div class="main-content-wrap">
    <div class="flex items-center flex-wrap justify-between gap20 mb-27">
        <h3>Add Types</h3>
        <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
            <li>
                <a href="/">
                    <div class="text-tiny">Dashboard</div>
                </a>
            </li>
            <li><i class="icon-chevron-right"></i></li>
            <li>
                <div class="text-tiny">Type List</div>
            </li>
        </ul>
    </div>
    <div class="wg-box">
        <div class="flex items-center justify-between gap10 flex-wrap">
            <div class="wg-filter flex-grow">
            </div>
            <a class="tf-button style-1 w208" href="{{route('admin.types.create')}}"><i class="icon-plus"></i>Add new</a>
        </div>
        <div class="wg-table table-product-list">
            <ul class="table-title flex gap20 mb-14">
                <li>
                    <div class="body-title">Type</div>
                </li>
                <li>
                    <div class="body-title">Slug</div>
                </li>
                <li>
                    <div class="body-title">Action</div>
                </li>
            </ul>
            <ul class="flex flex-column">
                @foreach($types as $type)
                <li class="product-item gap14">
                    <div class="image no-bg"><img src="{{ asset('storage/' . $type->image) }}" alt=""/></div>
                    <div class="flex items-center justify-between gap20 flex-grow">
                        <div class="name"><a class="body-title-2" href="/product-list">{{$type->name}}</a></div>
                        <div class="body-text">{{$type->slug}}</div>
                        <div class="list-icon-function">
                            <div class="item edit"><a href="{{route('admin.types.edit', $type->id)}}"><i class="icon-edit-3"></i></a></div>
                            <div class="item trash"><a href="{{route('admin.types.destroy', $type->id)}}"><i class="icon-trash-2"></i></a></div>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
