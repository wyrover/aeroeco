@extends('layouts/logged')

@section('title', 'Contract')

@section('body_class', 'contract')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    {{--CONTRACT TYPE--}}
                    General Terms Agreement:
                    {{--COMPANY_NAME--}}
                    <small>Robert Half Technology</small>
                </h1>
                <input type="text" class="form-control" style="width: 300px;" placeholder="Search Contract ....">
                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade in active" id="home">
                        <div class="content_accordion">
                            @foreach($topics as $topic)
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#{{$topic->slug}}">
                                                {{$topic->topic}}
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="{{$topic->slug}}" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            @include("contracts.GTA." . $topic->slug)
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->
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