@extends('layouts.default_with_menu')

@section('content')
    <form action="{{ url('product') }}" method="post">
        @csrf
        <div class="row mt-3">
            <div class="col-6">
                    <label>Category Name</label>
                    <input name="category_name" type="text" class="form-control" />
            </div>
        </div>
        <button class="btn btn-primary mt-3" id="btn-add-product-list" type="button"> + เพิ่ม Product</button>
        <div class="row mt-3" id='product-list'>
            <div class="col-6">
                <label>Product Name <button type ="button"
                        class="btn btn-danger ml-3 mt-2 mb-2 btn-del-product-list">ลบ</button></label>
                <input name="product_name[]" type="text" class="form-control" />
            </div>
        </div>
        <button type="submit" class="btn btn-success mt-3 mb-3">บันทึก</button>
    </form>
    <table class="mt-3 table">
        <thead>
            <tr>
                <td>#</td>
                <td>Category Name</td>
                <td>Product Name</td>
                <td>User </td>
            </tr>
        </thead>
        <tbody>
            @foreach ($category as $index => $categories)
            <tr>
                <td>{{ $index + 1 }}.</td>
                <td>{{ $categories->name }}</td>
                <td>
                    <ul>
                        @foreach ($categories->products as $product)
                            <li>{{ $product->name }}</li>
                        @endforeach
                    </ul>
                </td>
                <td>{{ $categories->products->first()->user->name ?? '-' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('#btn-add-product-list').on('click', function() {
                $('#product-list').append(`
            <div class="col-6">
                <label>Product Name <button type ="button"
                    class="btn btn-danger ml-3 mt-2 mb-2 btn-del-product-list">ลบ</button></label>
                <input name="product_name[]" type="text" class="form-control" />
            </div>
            `)
            })

            $(document).on('click', '.btn-del-product-list', function() {
                $(this).parent().parent().remove();
            })
        });
    </script>
@endsection
