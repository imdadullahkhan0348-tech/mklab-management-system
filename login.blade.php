@include('admin/inc/link')
@if(Session::has('error'))
    <div class="alert alert-danger">{{Session()->get('error')}}</div>
    @endif
@if(Session::has('nopremession1'))
    <div class="alert alert-primary">{{Session()->get('nopremession1')}}</div>
    @endif
@if(Session::has('nopremession'))
    <div class="alert alert-primary">{{Session()->get('nopremession')}}</div>
    @endif
<body class="bg-light">
    <div class="container mt-4">
        <div class="row">
            <div class="col-sm-8 offset-2">
                <div class="card login-card ">
                    <div class="card-body align-items-center">
                        <h2 class="login text-center">Login</h2>
                        <form action="{{url('insertlogin')}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-sm-12">
                                  <label for="">Name</label>
                                  <input type="text" class="form-control"  name="name">
                                </div>
                                <div class="col-sm-12">
                                     <label for="">email</label>
                                    <input type="email" class="form-control" name="email">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                     <label for="">password</label>
                                     <input type="password" class="form-control" name="password" >

                                </div>
                                <div class="col-sm-12">
                                  <button type="submit" class="btn col-3 offset-4 btn-primary mt-4">Login</button>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-6 offset-3"><small>Do you have an account ? </small>
                                     <small><a href="{{url('userlogin')}}" class="text-dark">Register</a></small></div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>
