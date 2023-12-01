@extends('layouts.app')

@section('title', 'member')
@section('content')

    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">รายละเอียดของMember</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="example2" class="table table-bordered table-hover dataTable dtr-inline"
                                aria-describedby="example2_info">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>ชื่อ-นามสกุล</th>
                                        <th>ที่อยู่</th>
                                        <th>เบอร์</th>
                                        <th>อายุ</th>
                                        <th>เพศ</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>สถานะ</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contoradmins as $contoradmin)
                                        @php
                                            // ประกาศตัวแปรใหม่ที่คุณต้องการใช้
                                            $status = $contoradmin->status->name; // ตั้งชื่อตาม field ที่คุณต้องการ
                                        @endphp
                                    <tr>
                                        <td>{{$contoradmin->id}}</td>
                                        <td>{{$contoradmin->name_th." ".$contoradmin->lastname_th}}</td>
                                        <td>{{$contoradmin->address}}</td>
                                        <td>{{$contoradmin->phone}}</td>
                                        <td>{{$contoradmin->age}}</td>
                                        <td>{{$contoradmin->sex}}</td>
                                        <td>{{$contoradmin->username}}</td>
                                        <td>{{$contoradmin->email}}</td>
                                        <td>{{$status}}</td>
                                        <td>
                                            <a href="" role="button"
                                                class="btn btn-sm btn-warning">Edit</a>
                                            <button type="button" class="btn btn-sm btn-danger delete-item"
                                                data-id = "">Delete</button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $contoradmins->links() }}
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
    </section>
@endsection
