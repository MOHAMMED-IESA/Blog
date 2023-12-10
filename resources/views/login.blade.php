@extends('header-footer')

@section('title')
Login
@endsection

@section('content')
    
        <div id="admin-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-4 col-md-4">
                        <h3 class="heading">Login</h3>
                        <!-- Form Start -->
                        <form  action="{{ url('login') }}" method ="POST">
                            @csrf
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Password" required>
                            </div>
                            <input type="submit" name="login" class="btn btn-primary" value="login" />
                        </form>
                        <!-- /Form  End -->

                    </div>
                </div>
            </div>

        </div>
@endsection