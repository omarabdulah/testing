@extends('admin_template')

@section('content')
    <section class="content-header">
        <h1>
            Agent
            <small>Create New Agent</small>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <form role="form" method="post" action="{{route('agent.store')}}">
            {{csrf_field()}}
            <div class="col-xs-6">
                <div class="box box-primary">
            <!-- form start -->
                <div class="box-body">
                    <div class="form-group">
                        <label>Name</label>
                        <input required class="form-control"  placeholder="Enter Name" name="name">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input required class="form-control"  type="email" placeholder="Enter Email" name="email">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input required class="form-control"  placeholder="Enter Password" name="password">
                    </div>
                    <div required class="form-group">
                        <label>Outbound Agent</label>
                        <select class="form-control" name="type">
                            <option value="inbound">Inbound</option>
                            <option value="outbound">Outbound</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Create Agent</button>
                </div>
                </div>
            </div>
        </form>
    </section>
@endsection


















