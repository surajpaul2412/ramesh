@extends('layouts.app')

@section('main')
<div class="main-content-wrap">
    <div class="flex items-center flex-wrap justify-between gap20 mb-27">
        <h3>Add Type</h3>
        <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
            <li>
                <a href="/">
                    <div class="text-tiny">Dashboard</div>
                </a>
            </li>
            <li><i class="icon-chevron-right"></i></li>
            <li>
                <div class="text-tiny">Add Type</div>
            </li>
        </ul>
    </div>
    <form class="tf-section-1 form-add-product" method="POST" action="{{ route('admin.types.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="wg-box">
            <fieldset class="name">
                <div class="body-title mb-10">Type name <span class="tf-color-1">*</span></div>
                <input class="mb-10" type="text" placeholder="Enter name" tabindex="0" aria-required="true" required="" name="name" required/>
            </fieldset>
            <fieldset class="name">
                <div class="body-title mb-10">Slug <span class="tf-color-1">*</span></div>
                <input class="mb-10" type="text" placeholder="Enter slug" tabindex="0" aria-required="true" required="" name="slug"/>
            </fieldset>
            <fieldset>
                <div class="body-title mb-10">Upload images</div>
                <div class="upload-image mb-16">
                    <div class="item up-load">
                        <label class="uploadfile" for="myFile">
                            <span class="icon"><i class="icon-upload-cloud"></i></span>
                            <span class="text-tiny">Drop your images here or select <span class="tf-color">click to browse</span></span>
                            <input type="file" id="myFile" name="image"/>
                        </label>
                    </div>
                </div>
            </fieldset>

            <div class="cols gap10"><button class="tf-button w-full" type="submit">Add type</button></div>
        </div>
    </form>
</div>
@endsection
