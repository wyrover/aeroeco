@extends('layouts.logged')

@section('title', 'AeroEco::User Profile')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-1 col-lg-offset-1 toppad" >
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Sheena Kristin A. Eschor</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-3 col-lg-3" align="center"> <img alt="User Pic" src="http://babyinfoforyou.com/wp-content/uploads/2014/10/avatar-300x300.png" class="img-circle img-responsive">
                            </div>
                            <div class="col-md-9 col-lg-9">
                                <table class="table table-user-information">
                                    <tbody>
                                    <tr>
                                        <td>Department:</td>
                                        <td>
                                            Accounting
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Manager:</td>
                                        <td>
                                            Count D. Monnay
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Hire date:</td>
                                        <td>
                                            06/23/2013
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Date of Birth</td>
                                        <td>
                                            01/24/1988
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Gender</td>
                                        <td>
                                            Female
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Home Address</td>
                                        <td>
                                            321 South Hasbro Circle<br>
                                            Collierville, TN 38027<br>
                                            U.S.A
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td><a href="mailto:seschor@eco.local">seschor@eco.local</a></td>
                                    </tr>
                                    <td>Phone Number</td>
                                    <td>123.456.7890 (Landline)
                                        <br>
                                        555.456.7890 (Mobile)
                                    </td>

                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                        <span class="pull-right">
                            <a href="edit.html" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                        </span>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    @include('layouts/partials/footer')
@endsection

@push('scripts')
<script>
    $(function() {
        //alert('jQuery');
    });
</script>
@endpush