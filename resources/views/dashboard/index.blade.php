@extends('layouts.dashboard')


@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Hodimlar</h1>

    <!-- @if (session()->has('message'))
    <div class="alert alert-success">{{ session()->get('message') }}</div>
    @endif -->

    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

    <a href="#">Yangi hodim qo'shish</a><br>
    <a href="#">Hodimga login berish</a>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>F.I.O</th>
                            <th>lavozim</th>
                            <th>email</th>
                            <th>tel_raqam</th>
                            <th>rasm</th>
                            <th>link</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>F.I.O</th>
                            <th>lavozim</th>
                            <th>email</th>
                            <th>tel_raqam</th>
                            <th>rasm</th>
                            <th>link</th>
                        </tr>
                    </tfoot>
                    <tbody>

                        <tr>
                            <td> </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                << /td>
                            <td>
                                <a href="#">Full</a>
                                <a href="#"><i class="fa-solid fa-pen-to-square"></i></a>
                            </td>
                        </tr>


                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

@endsection

@section('myjs')
<!-- Page level plugins -->
<script src="/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="/js/demo/datatables-demo.js"></script>
@endsection