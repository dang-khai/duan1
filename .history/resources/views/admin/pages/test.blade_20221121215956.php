@extends('admin.layouts.master')

@section('title', 'Customers')

@section('css')
    <!-- link css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('content')
    @foreach ($rows as $row)
        <table>
            <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Tên</th>
                    <th scope="col">Handle</th>
                </tr>
                <tr>
                    <th scope="row">{{ $stt++ }}</td>
                    <td>{{ $row->name_cate }}</td>
                    <td class="d-flex">
                        <form method="POST" action="">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-secondary me-2">Sửa</button>
                        </form>
                        <form method="POST" action="{{ url('/') }}/api/deleteCategory/${r.id}">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('Bạn có chắc muốn xóa sản phẩm này không !')">Xóa</button>
                        </form>
                    </td>
                </tr>
            </thead>
        </table>
    @endforeach
@endsection
