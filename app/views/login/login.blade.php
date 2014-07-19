@extends('layout.login.login')
@section('content')
<br>
<div class="col-sm-6 col-sm-offset-3">
    <div class="panel panel-info">
        <div class="panel-heading">
            <h3 class="panel-title">
                <div class="glyphicon glyphicon-user">
                </div>
                Log-in Admin
            </h3>
        </div>
        <div class="panel-body">
            <form class="form-horizontal col-sm-12" action="<?php echo URL::to('/login/proses') ?>" method="post">
                <div class="form-group">
                    <div class="col-sm-4">
                        <label for="username">Username</label>
                    </div>
                    <input class="col-sm-6" type="text" name="username" placeholder="Type Your Username" required>
                </div>
                <div class="form-group">
                    <div class="col-sm-4">
                        <label for="password">Password</label>
                    </div>
                    <input class="col-sm-6" type="password" name="password" placeholder="Your Password Here" required>
                </div>
                <div class="form-group">
                    <div class="col-sm-6 col-xs-offset-4">
                        <button class="btn btn-primary" name="login" type="submit">
                            <div class="glyphicon glyphicon-log-in"></div>
                            Login
                        </button>
                        <button class="btn btn-danger" name="reset" type="reset">
                            <div class="glyphicon glyphicon-refresh"></div>
                            Reset
                        </button>
                    </div>
                </div>
        </div>
        <div class="panel-footer">
            <p class="text-center">copyright &copy 2014 - monjok traveler</p>
        </div>
        </form>

    </div>
</div>
</div>
@stop