@extends('layouts.app')

@section('main')
<div class="main-content-wrap">
    <div class="flex items-center flex-wrap justify-between gap20 mb-27">
        <h3>Edit Type</h3>
        <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
            <li>
                <a href="/">
                    <div class="text-tiny">Dashboard</div>
                </a>
            </li>
            <li><i class="icon-chevron-right"></i></li>
            <li>
                <a href="{{ route('admin.types.index') }}">
                    <div class="text-tiny">Type List</div>
                </a>
            </li>
            <li><i class="icon-chevron-right"></i></li>
            <li>
                <div class="text-tiny">Edit Type</div>
            </li>
        </ul>
    </div>

    <div class="wg-box">
        <form action="{{ route('admin.types.update', $type->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')  {{-- Spoofing PUT request --}}
            
            <fieldset class="name">
                <label class="body-title mb-10">Type Name <span class="tf-color-1">*</span></label>
                <input class="mb-10" type="text" name="name" placeholder="Enter type name" value="{{ old('name', $type->name) }}" required/>
            </fieldset>

            <fieldset class="name">
                <label class="body-title mb-10">Slug <span class="tf-color-1">*</span></label>
                <input class="mb-10" type="text" name="slug" placeholder="Enter slug" value="{{ old('slug', $type->slug) }}" required/>
            </fieldset>

            <fieldset>
                <label class="body-title mb-10">Upload Image</label>
                <div class="upload-image mb-16">
                    @if($type->image)
                        <div class="mb-10">
                            <img src="{{ asset('storage/' . $type->image) }}" alt="Current Image" class="preview-image" width="120">
                        </div>
                    @endif
                    <input type="file" name="image" accept="image/*">
                </div>
            </fieldset>

            <div class="cols gap10">
                <button class="tf-button w-full" type="submit">Update Type</button>
                <a class="tf-button style-2 w-full" href="{{ route('admin.types.index') }}">Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection
