@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">pemecatan {{ $pemecatan->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/pemecatan') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/pemecatan/' . $pemecatan->id . '/edit') }}" title="Edit pemecatan"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/pemecatan' . '/' . $pemecatan->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete pemecatan" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $pemecatan->id }}</td>
                                    </tr>
                                    <tr><th> Nama Lengkap </th><td> {{ $pemecatan->nama_lengkap }} </td></tr><tr><th> Employees Id </th><td> {{ $pemecatan->employees_id }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
