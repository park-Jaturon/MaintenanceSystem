@extends('layout.master')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">เพิ่มพนักงาน</h1>
        {{--  <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">เพิ่มพนักงาน</li>
        </ol>  --}}

        <div>
            <a href="" class="btn btn-danger">กลับ</a>
        </div>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <form action="" method="POST" action="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group my-2">
                        <strong>Employee Name</strong>
                        <input type="text" name="name" class="form-control" placeholder="Employee Name">
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group my-2">
                        <strong>Employee Email</strong>
                        <input type="email" name="email" class="form-control" placeholder="Employee Email">
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group my-2">
                        <strong>Employee Address</strong>
                        <input type="text" name="address" class="form-control" placeholder="Employee Address">
                        @error('address')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary mt-3">ส่ง</button>
                </div>
            </div>
        </form>
    </div>
@endsection
