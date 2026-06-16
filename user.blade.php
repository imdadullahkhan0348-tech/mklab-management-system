@include('admin/inc/link')
<body class="bg-light">
    <div class="container mt-4">
        <div class="row">
            <div class="col-sm-12">
                <div class="card login-card ">
                    <div class="card-body align-items-center">
                        <h2 class="login text-center">Login</h2>
                        <form action="{{url('insertuser')}}" method="post" enctype="multipart/form-data">
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
                                  <label for="">role</label>
                                  <input type="text" class="form-control"  name="role">
                                </div>
                                <div class="col-sm-12">
                                     <label for="">password</label>
                                    <input type="password" class="form-control" name="password">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                  <button type="submit" class="btn col-3 offset-4 btn-primary mt-4">Register</button>
                                </div>
                            </div>
                          
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>
