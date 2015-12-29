@extends('layouts.logged')

@section('title', 'AeroEco')

@section('content')
    <h3>Projects</h3>
    <br><br>
    <table class="table table-striped table-condensed">
        <tr>
            <th>Mfg</th>
            <th>Aircraft</th>
            <th>Year</th>
            <th>MSN</th>
            <th>Tail</th>
            <th>Site</th>
            <th>Owner</th>
            <th>Creator</th>
            <th>Date</th>
            <th>Status</th>
            <th>&nbsp;</th>
        </tr>
        @forelse($projects as $project)
        <tr>
            <td>{{$project->aircraft->type->manufacturer}}</td>
            <td>{{$project->aircraft->type->model}}</td>
            <td>{{$project->aircraft->model_year}}</td>
            <td>{{$project->aircraft->msn}}</td>
            <td>{{$project->aircraft->tail}}</td>
            <td>{{$project->disassembler->short_name}}</td>
            <td>{{$project->aircraft->owner}}</td>
            <td>{{$project->creator->full_name}}</td>
            <td>{{$project->created_at->format('Y-m-d')}}</td>
            <td>{{$project->status->status}}</td>
            <td>
                <!-- Single button -->
                <div class="btn-group">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Actions <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li>
                            <a href="/projects/{{$project->id}}/summary">
                                <i class="fa fa-pencil"></i> Edit
                            </a>
                        </li>
                        <li>
                            <a href="/projects/{{$project->id}}/gta">
                                <i class="fa fa-certificate"></i> Contract
                            </a>
                        </li>
                        <li>
                            <a href="/projects/{{$project->id}}/delete">
                                <i class="fa fa-trash"></i> Delete
                            </a>
                        </li>
                    </ul>
                </div>
            </td>
        </tr>
        @empty
            <tr>
                <td>
                    <strong>No Projects found.</strong>
                </td>
            </tr>
        @endforelse
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