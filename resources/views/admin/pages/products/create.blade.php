@extends('layouts.admin', ['title' => "Add Products"])

@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <h1 class="h3 mb-3">Thêm Sản Phẩm</h1>
            <div class="row">
                <div class="col-12 col-6">
                    <div class="card px-5">
                        <div class="card-body">
                            <form action="{{ asset('be-admin/products') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label class="form-label">Tên</label>
                                    <input name="name" type="text" class="form-control" placeholder="Nhập tên..." required>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Loại Sản Phẩm</label>
                                    <select class="form-control" name="category" id="">
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->category_id }}">
                                                {{ $category->category_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Mô Tả</label>
                                    <textarea name="description" class="form-control" placeholder="Nhập mô tả ở đây..."
                                        rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Giá</label>
                                    <input name="price" type="number" class="form-control" value="0">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Số lượng</label>
                                    <input name="available" type="number" class="form-control" value="0">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Nổi bật</label>
                                    <input name="feature" type="number" class="form-control" value="0">
                                </div>
                                <div class="form-group">
                                    <label class="form-label w-100">Hình ảnh</label>
                                    <input type="file" name="image" accept="img/gallery/*">
                                    <small class="form-text text-muted">Chọn hình ảnh cho sản phẩm của bạn.</small>
                                </div>
                                <button type="submit" class="btn btn-primary">Tạo Mới</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
