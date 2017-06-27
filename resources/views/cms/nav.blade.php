<div class="sfd-navbar">
    <ul>
        <li><a href="{{ url('/admin/images') }}" class="button">images</a></li>
        <li><a href="{{ url('/admin/pages') }}" class="button">pages</a></li>
        <li><a href="{{ url('/admin/posts') }}" class="button">posts</a></li>
        <li><a href="{{ url('/admin/settings') }}" class="button">settings</a></li>
        <li>
            <a href="{{ route('logout') }}" class="button"
               onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                Logout
            </a>
        </li>
    </ul>
</div>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
</form>