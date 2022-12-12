@extends('admin.layouts.master')

@section('title', 'Quản lý tài khoản')

@section('css')
    <!-- link css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @if (count($errors) > 0)
        <script type="text/javascript">
            $(document).ready(function() {
                $('#addModal').modal('show');
            });
        </script>
    @endif
@endsection

@section('content')
    <h1>Danh sách tài khoản</h1>
    <section>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Thêm tài khoản
        </button>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Thêm tài khoản</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="name" class="col-form-label">Tên</label>
                                <input type="text" name="name" class="form-control" id="name">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="col-form-label">Email</label>
                                <input type="text" name="email" class="form-control" id="email">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="col-form-label">Mật khẩu</label>
                                <input type="text" name="password" class="form-control" id="password">
                            </div>
                            <div class="mb-3">
                                <label for="role" class="col-form-label">Vai trò</label>
                                <select class="form-select" id="role" name="role" aria-label="Default select example">
                                    <option selected>Chọn vài trò</option>
                                    <option value="1">Admin</option>
                                    <option value="0">User</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                            <button type="submit" class="btn btn-primary">Thêm tài khoản</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">ID</th>
                <th scope="col">Tên</th>
                <th scope="col">Email</th>
                <th scope="col">Mật khẩu</th>
                <th scope="col">Vai trò</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tr>
            @foreach ($users as $user)
                <th scope="row">{{ $stt++ }}</td>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->password }}</td>
                <td>{{ $user->role == '1' ? 'Admin' : 'User' }}</td>
                <td class="d-flex">
                    <form method="POST" action="{{ route('admin_editCategory') }}" enctype="multipart/form-data">
                        <button type="button" class="btn btn-secondary me-2" data-bs-toggle="modal"
                            data-bs-target="#editModal{{ $user->id }}">Sửa</button>
                        <section>
                            <!-- Modal edit -->
                            <div class="modal fade" id="editModal{{ $user->id }}" tabindex="-1" aria-labelledby=""
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Chỉnh sửa tài khoản</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $user->id }}">
                                                <div class="mb-3">
                                                    <label class="form-label">Tên</label>
                                                    <input type="text" class="form-control" name="name"
                                                        value="{{ $user->name }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Tên</label>
                                                    <input type="text" class="form-control" name="name"
                                                        value="{{ $user->name }}">
                                                </div>
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </form>

                    <form method="POST" action="">
                        @csrf
                        <button type="submit" class="btn btn-danger"
                            onclick="return confirm('Bạn có chắc muốn xóa sản phẩm này không !')">Xóa</button>
                    </form>
                </td>
        </tr>
        @endforeach
    </table>
@endsection
