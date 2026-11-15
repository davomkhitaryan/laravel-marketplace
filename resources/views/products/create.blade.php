
@extends('layouts.marketplace')

@section('content')

<div class="container py-4">
    <h1 class="mb-4">Create Product</h1>

    <div class="card shadow-sm p-4" style="max-width: 650px;">

        <form method="POST" action="/products" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label class="form-label">Name:</label>
                <input type="text" name="name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Category:</label>
                <select name="category_id" class="form-select">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Description:</label>
                <textarea name="description" class="form-control" rows="4"></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Price:</label>
                <input type="number" step="0.01" name="price" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Stock:</label>
                <input type="number" name="stock" class="form-control" required>
            </div>

            <div class="mb-4">
                <label class="form-label">Product Image:</label>
                <input type="file" name="image" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">
                Save Product
            </button>

        </form>
    </div>
</div>

@endsection
