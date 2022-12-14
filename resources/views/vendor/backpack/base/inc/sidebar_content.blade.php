{{-- This file is used to store sidebar items, inside the Backpack admin panel --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>
{{-- <li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-users"></i>Permissions</a>
    <ul class="nav-dropdown-items"> --}}
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('user') }}"><i class="nav-icon la la-user"></i> <span>Users</span></a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('role') }}"><i class="nav-icon la la-id-badge"></i> <span>Roles</span></a></li>
        {{-- <li class="nav-item"><a class="nav-link" href="{{ backpack_url('permission') }}"><i class="nav-icon la la-key"></i> <span>Permissions</span></a></li> --}}
    {{-- </ul> --}}
</li>

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('produits') }}"><i class="nav-icon la la-birthday-cake"></i> Produits</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('categories') }}"><i class="nav-icon la la-list-ol"></i> Categories</a></li>


<li class="nav-item"><a class="nav-link" href="{{ backpack_url('commentaires') }}"><i class=" nav-icon lar la-comment"></i> Commentaires</a></li>
<li