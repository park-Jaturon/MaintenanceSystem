@extends('layout.master')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">จัดการข้อมูลช่าง</h1>
        {{--  <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">เพิ่มสมาชิก</li>
        </ol>  --}}

            <div>
                <a href="/createemployee" class="btn btn-success my-3">เพิ่มพนักงาน</a>
            </div>
            @if ($message = Session::get('sucess'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif

            <table class="table table-bordered">
                <tr>
                    <th>No.</th>
                    <th>Employee Name</th>
                    <th>Employee Email</th>
                    <th>Employee Address</th>
                    <th width="280px">Action</th>
                </tr>
                @foreach ($employees as $employee)
                    <tr>
                        <td>{{ $employee->id }}</td>
                        <td>{{ $employee->name }}</td>
                        <td>{{ $employee->email }}</td>
                        <td>{{ $employee->address }}</td>
                        <td>
                            <form action="{{ route('employee.destroy', $employee->id) }}" method="POST">
                                <a href="{{ route('employee.edit',  $employee->id) }}" class="btn btn-warning">แก้ไข</a>
                                @csrf
                                @method('DELETE')
                                    <button type="submit" class="btn btn-danger">ลบ</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
            {{$employees->links('pagination::bootstrap-5')}}
        </div>
    </div>
@endsection
