@extends('admin_template')

@section('content')
    <section class="content-header">
        <h1>
            Ticket
            <small>Create New Ticket</small>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <form role="form" method="post" action="{{route('ticket.store')}}">
            {{csrf_field()}}
            <div class="col-md-6 col-sm-12">
                <div class="box box-primary">
            <!-- form start -->
                <div class="box-body">
                    <div class="form-group">
                        <label>First Name</label>
                        <input required class="form-control"  placeholder="Enter First Name" name="first_name">
                    </div>
                    <div class="form-group">
                        <label>Last Name</label>
                        <input required class="form-control"  placeholder="Enter Last Name" name="last_name">
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <textarea required class="form-control"  placeholder="Enter Address" name="address"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Contact</label>
                        <input required class="form-control"  placeholder="Enter Contact Number" name="phone">
                    </div>
                    <div class="form-group">
                        <label>Area</label>
                        <input required class="form-control"  placeholder="Enter Area" name="area">
                    </div>
                    <div class="form-group">
                        <label>City</label>
                        <input required class="form-control"  placeholder="Enter City" name="city">
                    </div>
                </div>
            </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="box box-primary">
                    <div class="box-body">
                        <div class="form-group">
                            <label>Car</label>
                            <select class="form-control" name="car" required="">
                                <option selected disabled>Select Car</option>
                                <option value="APV">APV</option>
                                <option value="Swift">Swift</option>
                                <option value="City">City</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Booking Time</label>
                            <input required class="form-control"  placeholder="Enter Time" name="booking_time">
                        </div>
                        <div class="form-group">
                            <label>From</label>
                            <input required class="form-control"  placeholder="Enter Location" name="from">
                        </div>
                        <div class="form-group">
                            <label>Where</label>
                            <input required class="form-control"  placeholder="Enter Destination" name="where">
                        </div>
                        <div required class="form-group">
                            <label>Outbound Agent</label>
                            <select class="form-control" name="user_id">
                                @foreach($users as $user)
                                    <option value="{{$user->id}}">{{$user->name}}</option>
                                    @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Generate Ticket</button>
                </div>
                </div>
            </div>
        </form>
    </section>
@endsection


















