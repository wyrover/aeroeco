<div class="faux-tabs">
    <ul>
        <li class="{{ Ekko::isActiveMatch('profile') }}">
            <a href="/companies/{{$company->id or 1}}/profile">Profile</a>
        </li>
        <li class="{{ Ekko::isActiveMatch('locations') }}">
            <a href="/companies/{{$company->id or 1}}/locations">Locations</a>
        </li>
        <li class="{{ Ekko::isActiveMatch('contacts') }}">
            <a href="/companies/{{$company->id or 1}}/contacts">Contacts</a>
        </li>
        <li class="{{ Ekko::isActiveMatch('plugins') }}">
            <a href="/companies/{{$company->id or 1}}/plugins">Services</a>
        </li>
        <li class="{{ Ekko::isActiveMatch('roles') }}">
            <a href="/companies/{{$company->id or 1}}/roles">Roles</a>
        </li>
        <li class="{{ Ekko::isActiveMatch('users') }}">
            <a href="/companies/{{$company->id or 1}}/users">Users</a>
        </li>
        <li class="{{ Ekko::isActiveMatch('messages') }}">
            <a href="/companies/{{$company->id or 1}}/messages">Messages</a>
        </li>
        <li class="{{ Ekko::isActiveMatch('emails') }}">
            <a href="/companies/{{$company->id or 1}}/emails">Emails</a>
        </li>
    </ul>
</div>