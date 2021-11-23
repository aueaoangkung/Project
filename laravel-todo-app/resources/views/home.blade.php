@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('ตารางสินค้า') }}</div>

                <h5 class="card-header"> 
                    <a href="{{ route('todo.create')}}" class="btn btn-sm btn-outline-primary">Add</a>
                </h5>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-hover table-borderless"> 
                        <thead>
                            <th scope="col">Item</th>
                            <th scope="col">ปุ่มที่ไม่ใช่ตุ่ม</th>
                        </thead>
                        <tr>
                            <td>ขนมปังยายบัว</td>
                            <td>
                                <a href="" class="btn btn-sm btn-outline-success">Edit</a>
                                <a href="" class="btn btn-sm btn-outline-danger">Delete</a>
                            </td>
                        </tr>

                    </table>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
