@extends('layouts/logged')

@section('title', 'AeroEco::Create Project')

@section('body_class', 'contract')

@section('content')
    <style>
        .row { margin-bottom: 20px; }
        .main-box {
            background: #FFFFFF;
            height: 80px;
            box-shadow: 0px 3px 3px rgba(0, 0, 0, 0.4);
            margin-bottom: 16px;
            /* overflow: hidden; */
            border-radius: 3px;
            background-clip: padding-box;
        }
        .infographic-box {
            padding: 5px 20px;
            margin-top: -10px;
            cursor: pointer;
        }
        .infographic-box .title {
            font-size: 2em;
            font-weight: 600;
        }
        .infographic-box .cost {
            font-size: 1.2em;
            font-weight: normal;
            text-align: right;
        }
        .infographic-box.colored {
            color: #fff;
            border: 0 !important;
        }
        .aqua-bg {
            background-color: #3f8dc6 !important;
        }
        .green-bg {
            background-color: #8bc34a !important;
        }
        .rust-bg {
            background-color: #c6783f !important;
        }
        .purple-bg {
            background-color: #783fc6 !important;
        }
    </style>
    @include('projects.partials.tabs')
    @include('errors.errors')
    <div>
        {!! Form::open([
            'url' => '/parts_store',
            'class' => 'form',
            'novalidate' => 'novalidate'
        ]) !!}
        <div class="row" style="width: 90%; margin: 20px auto 0 auto;">
            <parts project="{{$project->id}}"></parts>
        </div>

        <div class="row pull-right">
            {!! Form::submit('Continue', ['id' => 'btnParts', 'class' => 'btn btn-uam', 'style' => 'margin-right: 20px;']) !!}
        </div>
        {!! Form::close() !!}
    </div>
    <br><br>
    </div>
@stop

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