@extends('layouts.logged')

@section('title', 'AeroEco')

@section('content')
    <h3>Companies</h3>
    <br>
    <table class="table table-striped table-condensed">
        <thead>
            <tr>
                <th>Company</th>
                <th>DBA</th>
                <th>Phone</th>
                <th>Tier</th>
                <th>Active Projects</th>
                <th>Pending Projects</th>
                <th>Completed Projects</th>
                <th>&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            @forelse($companies as $company)
                <tr>
                    <td>{{$company->company}}</td>
                    <td>{{$company->dba}}</td>
                    <td>{{phone($company->main_phone)}}</td>
                    <td class="text-center">{{$company->tier}}</td>
                    <td class="text-center">{{$company->active_projects[0]->count}}</td>
                    <td class="text-center">{{$company->pending_projects[0]->count}}</td>
                    <td class="text-center">{{$company->completed_projects[0]->count}}</td>
                    <td class="text-right">
                        <!-- Single button -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-uam dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Actions <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li>
                                    <a href="/companies/{{$company->id}}/profile">
                                        <i class="fa fa-pencil"></i> Edit Company
                                    </a>
                                </li>
                                <li>
                                    <a href="/companies/{{$company->id}}/delete">
                                        <i class="fa fa-trash"></i> Delete Company
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3"><strong>No Companies Found.</strong></td>
                </tr>
            @endforelse
        </tbody>
    </table>
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