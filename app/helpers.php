<?php

use App\Models\Type;
use App\Models\Category;

function types() {
    $types = Type::all();
    return $types;
}

function categories() {
    $categories = Category::all();
    return $categories;
}
