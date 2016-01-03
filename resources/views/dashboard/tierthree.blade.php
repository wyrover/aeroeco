@extends('layouts.logged')

@section('title', 'AeroEco Dashboard')

@section('content')
    <div class="row">
        <div class="col-md-3">&nbsp;</div>
        <div class="col-md-6">
            <table class="table table-striped table-condensed">
                <tr>
                    <td colspan="2">
                        Dashboard Widgets for Tier Three
                    </td>
                </tr>
            </table>
        </div>
        <div class="col-md-3">&nbsp;</div>
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