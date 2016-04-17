@extends('admin_template')

@section('content')
    <section class="content-header">
        <h1>
            Ticket
            <small>View</small>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tickets</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="form-inline" id="example2_wrapper">
                    <div class="row">
                        <div class="col-sm-12">
                            <table aria-describedby="example2_info" role="grid" id="example2" class="table table-bordered table-striped table-hover">
                                <thead>
                                <tr role="row">
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Agent Type</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr role="row">
                                        <td>{{$user->id}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{ucfirst($user->type)}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
    </section>
@endsection