@extends('layout.master')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">เพิ่มพนักงาน</h1>
        {{--  <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">เพิ่มพนักงาน</li>
        </ol>  --}}

        <div>
            <a href="{{route('employee.create')}}" class="btn btn-danger">กลับ</a>
        </div>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <form action="{{ route('employee.update', $employee->id) }}" method="POST" action="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group my-2">
                        <strong>Employee Name</strong>
                        <input type="text" name="name" value="{{ $employee->name }}" class="form-control" placeholder="Employee Name">
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group my-2">
                        <strong>Employee Email</strong>
                        <input type="email" name="email" value="{{ $employee->email }}" class="form-control" placeholder="Employee Email">
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group my-2">
                        <strong>Employee Address</strong>
                        <input type="text" name="address"  value="{{ $employee->address }}" class="form-control" placeholder="Employee Address">
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
