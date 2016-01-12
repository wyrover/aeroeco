@extends('layouts/logged')

@section('title', 'Contract')

@section('body_class', 'contract')

@section('content')
    <style>
        .btn-group button { width: 200px; }
    </style>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    {{--CONTRACT TYPE--}}
                    {{$conType}}:&nbsp;
                    {{--COMPANY_NAME--}}
                    <small>{{ $company->company }}</small>
                </h1>
                <input type="text" class="form-control" style="width: 300px;margin-top:5px;" placeholder="Search Contract ....">
                <div class="panel-group" id="accordion1">
                    @foreach($topics as $topic)
                        <div class="panel panel-default">
                        <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" data-target="#{{$topic->slug}}">
                            <h4 class="panel-title">{{$topic->topic}}</h4>
                            <span class="pull-right" style="margin-top:-16px;">
                                <i class="btnEdit fa fa-pencil"></i>
                            </span>
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
            <!-- /.row -->
        </div>
        <br><br>
        <div class="btn-group" role="group">
            <button type="button" class="btn btn-default">
                <i class="fa fa-file-word-o"></i>&nbsp;
                Generate MS Word
            </button>
            <button type="button" class="btn btn-default">
                <i class="fa fa-file-pdf-o"></i>&nbsp;
                Generate PDF Document
            </button>
            <button type="button" class="btn btn-default">
                <i class="fa fa-barcode"></i>&nbsp;
                E-Sign Contract
            </button>
            <button type="button" class="btn btn-default">
                <i class="fa fa-thumbs-up"></i>&nbsp;
                File Executed Contract
            </button>
        </div>
        <br><br><br><br>
    </div>
    <!-- /.container-fluid -->
@endsection

@section('footer')
    @include('layouts/partials/footer')
@endsection

@push('scripts')
<script>
    $(function() {
        $('#accordion1').on('shown.bs.collapse', function () {
            var myEl = $(this).find('.collapse.in').prev('.panel-heading');

            $('html, body').animate({
                scrollTop: $(myEl).offset().top
            }, 100);
        });
    });
</script>
@endpush