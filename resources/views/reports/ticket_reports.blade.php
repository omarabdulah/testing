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
                                    <th>Ticket No.</th>
                                    <th>Last Name</th>
                                    <th>Status</th>
                                    <th>Car</th>
                                    <th>From</th>
                                    <th>Where</th>
                                    <th>Time</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($tickets as $ticket)
                                    <tr role="row">
                                        <td>{{$ticket->id}}</td>
                                        <td>{{$ticket->last_name}}</td>
                                        <td>@if($ticket->status == '')
                                                <label class="label label-warning">Pending </label>
                                            @elseif($ticket->status == 'Confirm')
                                                <label class="label label-success">{{$ticket->status}}</label>
                                            @elseif($ticket->status == 'Cancel')
                                                <label class="label label-danger">{{$ticket->status}}</label>
                                            @elseif($ticket->status == 'Fake')
                                                <label class="label label-danger">{{$ticket->status}}</label>
                                            @endif</td>
                                        <td>{{$ticket->car}}</td>
                                        <td>{{$ticket->from}}</td>
                                        <td>{{$ticket->where}}</td>
                                        <td>{{$ticket->booking_time}}</td>
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