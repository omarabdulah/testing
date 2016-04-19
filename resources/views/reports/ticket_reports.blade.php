@extends('admin_template')

@section('content')
    <section class="content-header">
        <h1>
            Ticket
            <small> Reports</small>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3>{{$pending}}</h3>

                    <p>Pending Tickets</p>
                </div>
                <div class="icon">
                    <i class="fa fa-fw fa-ticket"></i>
                </div>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner">
                    <h3>{{$confirm}}</h3>

                    <p>Confirm Tickets</p>
                </div>
                <div class="icon">
                    <i class="fa fa-fw fa-ticket"></i>
                </div>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
                <div class="inner">
                    <h3>{{$cancel}}</h3>

                    <p>Cancel Tickets</p>
                </div>
                <div class="icon">
                    <i class="fa fa-fw fa-ticket"></i>
                </div>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
                <div class="inner">
                    <h3>{{$fake}}</h3>

                    <p>Fake Tickets</p>
                </div>
                <div class="icon">
                    <i class="fa fa-fw fa-ticket"></i>
                </div>
            </div>
        </div>
        <!-- ./col -->
        </div>
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
                                    <th>Contact</th>
                                    <th>Status</th>
                                    <th>Car</th>
                                    <th>From</th>
                                    <th>Where</th>
                                    <th>Time</th>
                                    <th>OB Agent</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($tickets as $ticket)
                                    <tr role="row">
                                        <td>{{$ticket->id}}</td>
                                        <td>{{$ticket->last_name}}</td>
                                        <td>{{$ticket->phone}}</td>
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
                                        <td>{{ucfirst($ticket->agent->name)}}</td>
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