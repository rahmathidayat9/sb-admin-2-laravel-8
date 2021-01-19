@extends('layout.auth.app',[
'title' => 'Register'
])
@section('content')
<div class="row justify-content-center">

    <div class="col-xl-5 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg mx-auto">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Register</h1>
                            </div>
                            <form class="user">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="" class="form-control"
                                        id="name"
                                        placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control"
                                        id="email" aria-describedby="emailHelp"
                                        placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label for="pw">Password</label>
                                    <input type="password" class="form-control"
                                        id="pw" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label for="cp">Confirm Password</label>
                                    <input type="password" class="form-control"
                                        id="cp" placeholder="Confirm Password">
                                </div>
                                <a href="{{ route('login') }}" class="btn btn-primary btn btn-block">
                                    Register
                                </a>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="{{ route('login') }}">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
@stop