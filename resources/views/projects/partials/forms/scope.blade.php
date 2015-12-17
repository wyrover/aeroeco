<div class="container-fluid contract">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                B777-1209:&nbsp;
                {{--COMPANY_NAME--}}
                <small>{{ $company->company }}</small>
            </h1>
            <input type="text" class="form-control" style="width: 300px;margin-top:5px;" placeholder="Search Listing ....">
            <div class="panel-group" id="accordion1">
                @foreach($atas as $ata)
                    <div class="panel panel-default">
                        <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" data-target="#{{$ata->slug}}">
                            <h4 class="panel-title">
                                {{$ata->chapter}} {{$ata->title}}
                            </h4>
                            <span class="pull-right" style="margin-top:-16px;">
                                0 of 28
                            </span>
                        </div>
                        <div id="{{$ata->slug}}" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>HUH</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>