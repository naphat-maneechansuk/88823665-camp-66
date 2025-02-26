@extends('layouts.default_with_menu')

@section('content')

<h1 >{{ session('user')->name }}</h1>

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-12">
                <div class="card-header">
                    <h3 class="card-title"></h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered ">
                        <thead class="table-light">
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th style="width: 240px"></th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            <?php foreach ($users as $index => $user) { ?>
                            <tr class="align-middle">
                                <td>{{ $index + 1 }}.</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td class="d-flex">
                                    <a href="{{ url('/user', $user->id) }}">
                                        <button class="btn btn-warning">Edit</button>
                                    </a>
                                    <form action="{{ url('/user') }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <input type="hidden" name="id" value="{{ $user->id }}">
                                        <button type="button" class="btn btn-danger" onclick="return confirm_delete(this)">Delete</button>
                                        <!-- <button type class="btn btn-danger" onclick="confirm_delete()">Delete</button> -->
                                    </form>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm m-0 float-end">
                        <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                    </ul>
                </div>
            </div>
            <!-- <button class="btn btn-primary" onclick="confirm_delete()">Click ME</button> -->
            <!-- /.card -->
        </div>
    </div>
@endsection

@section('scripts')
<script>
    function confirm_delete(button) {
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    title: "Deleted!",
                    text: "Your file has been deleted.",
                    icon: "success"
                }).then(() => {
                    button.closest('form').submit(); // ส่งฟอร์มหลังจากกดตกลง
                });
            }
        });

        return false; // ป้องกันฟอร์มถูกส่งก่อนกดตกลง
    }
</script>
@endsection
    <!-- <script>
        function confirm_delete(){
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    console.log("Delete It!", result);
                }
            });
    }
    </script> -->

