<ul class="sidebar-menu" data-widget="tree">
    <li class="header">Navegación</li>
    <!-- Optionally, you can add icons to the links -->
    <li {{ request()->is('dashboard') ? 'class=active' : '' }}>
        <a href="{{ route('dashboard') }}">
            <i class="fa fa-home"></i> <span>Inicio</span>
        </a>
    </li>
    <li class="treeview {{ request()->is('admin/posts*') ? 'active' : '' }}">
        <a href="#"><i class="fa fa-bars"></i> <span>Artículos</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
        </a>
        <ul class="treeview-menu">
            <li {{ request()->is('admin/posts') ? 'class=active' : '' }}>
                <a href="{{ route('admin.posts.index') }}"><i class="fa fa-eye"></i>Ver todos los artículos</a>
            </li>
            <li>
                @if(request()->is('admin/posts/*'))
                    <a href="{{ route('admin.posts.index', '#create') }}"><i class="fa fa-plus"></i>Crear nuevo</a>
                @else
                    <a href="#" data-toggle="modal" data-target="#mymodal"><i class="fa fa-plus"></i>Crear nuevo</a>
                @endif
            </li>
        </ul>
    </li>
    <li class="treeview {{ request()->is('admin/images*') ? 'active' : '' }}">
        <a href="#"><i class="fa fa-bars"></i> <span>Imagenes</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
        </a>
        <ul class="treeview-menu">
            <li {{ request()->is('admin/images') ? 'class=active' : '' }}>
                <a href="{{ route('admin.images.index') }}"><i class="fa fa-eye"></i>Ver todas las imagenes</a>
            </li>
            <li>
                <a href="{{ route('admin.images.create') }}"><i class="fa fa-plus"></i>Crear nuevo</a>
            </li>
        </ul>
    </li>
    <li class="treeview {{ request()->is('admin/documents*') ? 'active' : '' }}">
        <a href="#"><i class="fa fa-bars"></i> <span>Documentos</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
        </a>
        <ul class="treeview-menu">
            <li {{ request()->is('admin/documents') ? 'class=active' : '' }}>
                <a href="{{ route('admin.documents.index') }}"><i class="fa fa-eye"></i>Ver todos los Documentos</a>
            </li>
            <li>
                <a href="{{ route('admin.documents.create') }}"><i class="fa fa-plus"></i>Crear nuevo</a>
            </li>
        </ul>
    </li>
    {{--probando--}}
    {{--<li class="treeview {{ request()->is('admin/posts*') ? 'active' : '' }}">--}}
        {{--<a href="#"><i class="fa fa-bars"></i> <span>Actividades</span>--}}
            {{--<span class="pull-right-container">--}}
                {{--<i class="fa fa-angle-left pull-right"></i>--}}
              {{--</span>--}}
        {{--</a>--}}
        {{--<ul class="treeview-menu">--}}
            {{--<li {{ request()->is('admin/posts') ? 'class=active' : '' }}>--}}
                {{--<a href="{{ route('admin.posts.index') }}"><i class="fa fa-eye"></i>Ver todas las actividades</a>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--@if(request()->is('admin/posts/*'))--}}
                    {{--<a href="{{ route('admin.posts.index', '#create') }}"><i class="fa fa-plus"></i>Crear nueva</a>--}}
                {{--@else--}}
                    {{--<a href="#" data-toggle="modal" data-target="#mymodal"><i class="fa fa-plus"></i>Crear nueva</a>--}}
                {{--@endif--}}
            {{--</li>--}}
        {{--</ul>--}}
    {{--</li>--}}

    {{--<li class="treeview {{ request()->is('admin/posts*') ? 'active' : '' }}">--}}
        {{--<a href="#"><i class="fa fa-bars"></i> <span>Estudiantes</span>--}}
            {{--<span class="pull-right-container">--}}
                {{--<i class="fa fa-angle-left pull-right"></i>--}}
              {{--</span>--}}
        {{--</a>--}}
        {{--<ul class="treeview-menu">--}}
            {{--<li {{ request()->is('admin/posts') ? 'class=active' : '' }}>--}}
                {{--<a href="{{ route('admin.posts.index') }}"><i class="fa fa-eye"></i>Ver todos los estudiantes</a>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--@if(request()->is('admin/posts/*'))--}}
                    {{--<a href="{{ route('admin.posts.index', '#create') }}"><i class="fa fa-plus"></i>Crear nuevo</a>--}}
                {{--@else--}}
                    {{--<a href="#" data-toggle="modal" data-target="#mymodal"><i class="fa fa-plus"></i>Crear nuevo</a>--}}
                {{--@endif--}}
            {{--</li>--}}
            {{--<li {{ request()->is('admin/posts') ? 'class=active' : '' }}>--}}
                {{--<a href="{{ route('admin.posts.index') }}"><i class="fa fa-eye"></i>Importar</a>--}}
            {{--</li>--}}
        {{--</ul>--}}
    {{--</li>--}}


    {{--cerrar proband--}}
    <li class="treeview {{ request()->is('admin/users*') ? 'active' : '' }}">
        <a href="#"><i class="fa fa-users"></i> <span>Usuarios</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
        </a>
        <ul class="treeview-menu">
            <li {{ request()->is('admin/users') ? 'class=active' : '' }}>
                <a href="{{ route('admin.users.index') }}"><i class="fa fa-eye"></i>Ver todos los usuarios</a>
            </li>
            <li {{ request()->is('admin/users/create') ? 'class=active' : '' }}>
                <a href="{{ route('admin.users.create') }}"><i class="fa fa-plus"></i>Crear nuevo</a>
            </li>
        </ul>
    </li>

</ul>