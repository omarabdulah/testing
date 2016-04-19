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
                                    <th>Contact</th>
                                    <th>Status</th>
                                    <th>From</th>
                                    <th>Where</th>
                                    <th>Time</th>
                                    <th>Action</th>
                                    <th>OB Agent</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($tickets as $ticket)
                                    <tr role="row">
                                        <td>{{$ticket->id}}</td>
                                        <td>{{$ticket->last_name}}</td>
                                        <td>{{$ticket->phone}}</td>
                                        <td>@if($ticket->status == '') Pending @else {{$ticket->status}}@endif</td>
                                        <td>{{$ticket->from}}</td>
                                        <td>{{$ticket->where}}</td>
                                        <td>{{$ticket->booking_time}}</td>
                                        <form method="post" action="{{url('/ticket/updateStatus')}}">
                                            {{csrf_field()}}
                                            <input name="id" value="{{$ticket->id}}" hidden="hidden">
                                            <td>
                                                <select class="ticket-status" name="status" onchange="this.form.submit()">
                                                    <option selected disabled>Status</option>
                                                    <option>Confirm</option>
                                                    <option>Cancel</option>
                                                    <option>Fake</option>
                                                </select>
                                            </td>
                                        </form>
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