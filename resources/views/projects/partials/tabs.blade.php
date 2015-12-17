<div class="faux-tabs">
    <ul>
        <li class="{{ Ekko::isActiveMatch('profile') }}">
            <a href="/projects/{{$project->id or 1}}/profile">Profile</a>
        </li>
        <li class="{{ Ekko::isActiveMatch('aircraft') }}">
            <a href="/projects/{{$project->id or 1}}/aircraft">Aircraft</a>
        </li>
        <li class="{{ Ekko::isActiveMatch('engines') }}">
            <a href="/projects/{{$project->id or 1}}/engines">Engines</a>
        </li>
        <li class="{{ Ekko::isActiveMatch('scope') }}">
            <a href="/projects/{{$project->id or 1}}/scope">Scope</a>
        </li>
        <li class="{{ Ekko::isActiveMatch('summary') }}">
            <a href="/projects/{{$project->id or 1}}/summary">Summary</a>
        </li>
    </ul>
</div>