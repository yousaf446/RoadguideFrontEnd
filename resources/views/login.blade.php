@extends('default.layout')
@section('content')
<div class="main" ng-controller="userController">
    <div class="main-inner">
        <div class="container">
            <div class="content">



                <div class="row">
                    <div class="col-sm-4 col-sm-offset-4">
                        <div class="page-title">
                            <h1>Login</h1>
                        </div><!-- /.page-title -->

                        <form method="post" ng-submit="login()">
                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input type="email" class="form-control" id="email" ng-model="email">
                            </div><!-- /.form-group -->

                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" ng-model="password">
                            </div><!-- /.form-group -->

                            <button type="submit" class="btn btn-primary pull-right">Login</button>
                        </form>
                    </div><!-- /.col-sm-4 -->
                </div><!-- /.row -->

            </div><!-- /.content -->
        </div><!-- /.container -->
    </div><!-- /.main-inner -->
</div><!-- /.main -->
    @endsection