@extends('layouts.app')

@section('css')

<link href="/datatable/css/1cdnjs.cloudflare.com_ajax_libs_twitter-bootstrap_5.3.0_css_bootstrap.min.css" rel="stylesheet">
<link href="/datatable/css/2cdn.datatables.net_1.13.6_css_dataTables.bootstrap5.min.css" rel="stylesheet">
<link href="/datatable/css/3cdn.datatables.net_responsive_2.5.0_css_responsive.bootstrap5.min.css" rel="stylesheet">
    
@endsection

@section('content')
<div class="container-fluid">
  <div class="row">
    <nav id="navbarSupportedContent" class="col-md-3 col-lg-2 d-md-block bg-body-tertiary sidebar collapse">
        <div class="position-sticky pt-3 sidebar-sticky">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                            <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z"/>
                        </svg>
                        <span data-feather="home" class="align-text-bottom"> {{ Auth::user()->name }}</span>  
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/lider">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
                        </svg>
                        <span data-feather="file" class="align-text-bottom">Usuarios</span>                 
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/roles">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill-lock" viewBox="0 0 16 16">
                            <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm-9 8c0 1 1 1 1 1h5v-1a1.9 1.9 0 0 1 .01-.2 4.49 4.49 0 0 1 1.534-3.693C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Zm7 0a1 1 0 0 1 1-1v-1a2 2 0 1 1 4 0v1a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1v-2Zm3-3a1 1 0 0 0-1 1v1h2v-1a1 1 0 0 0-1-1Z"/>
                        </svg>
                        <span data-feather="shopping-cart" class="align-text-bottom">Roles</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/blogs"> 
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                        <path d="M192 32c0 17.7 14.3 32 32 32c123.7 0 224 100.3 224 224c0 17.7 14.3 32 32 32s32-14.3 32-32C512 128.9 383.1 0 224 0c-17.7 0-32 14.3-32 32zm0 96c0 17.7 14.3 32 32 32c70.7 0 128 57.3 128 128c0 17.7 14.3 32 32 32s32-14.3 32-32c0-106-86-192-192-192c-17.7 0-32 14.3-32 32zM96 144c0-26.5-21.5-48-48-48S0 117.5 0 144V368c0 79.5 64.5 144 144 144s144-64.5 144-144s-64.5-144-144-144H128v96h16c26.5 0 48 21.5 48 48s-21.5 48-48 48s-48-21.5-48-48V144z"/>
                    </svg>
                        <span data-feather="users" class="align-text-bottom">Bolgs</span>
                    </a>
                </li>
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-body-secondary text-uppercase">
                <span>Reports</span>
                <a class="link-secondary" href="#" aria-label="Add a new report">
                    <span data-feather="plus-circle" class="align-text-bottom"></span>
                </a>
            </h6>
            
        </div>
    </nav>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <section class="section">
            <div class="section-header">
                <h3 class="page_heading">Usuario</h3>
            </div>
            <div class="section-body py-3">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">

                                <a class="btn btn-warning" href="{{ route('usuarios.create')}}">Nuevo</a>

                                <div class="table-responsive py-4">
                                    <table id="example" class="table table-striped nowrap" style="width:100%">
                                        <thead>
                                            <tr>
                                            <th scope="col">id</th>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Roles</th>
                                            <th scope="col">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($usuarios as $usuario)
                                            <tr>
                                                <td>{{ $usuario->id }}</td>
                                                <td>{{ $usuario->name }}</td>
                                                <td>{{ $usuario->email }}</td>
                                                <td>
                                                @foreach($roles as $role)
                                                    @if($role->id == $usuario->roles_id)
                                                        {{$role->name}}
                                                    @endif
                                                @endforeach
                                                </td>
                                                <td>
                                                    <a class="btn btn-primary btn-sm" href="{{ route('usuarios.edit', $usuario->id) }}">Editar</a>

                                                    {!! Form::open(['method'=>'DELETE', 'route'=>['usuarios.destroy', $usuario->id], 'style'=>'display:inline']) !!}
                                                        {!! Form::submit('Borrar', ['class'=>'btn btn-danger btn-sm']) !!}
                                                    {!! Form::close() !!}
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>


  </div>
</div>
@endsection

@section('js')

    
    <script src="/datatable/js/2cdn.datatables.net_1.13.6_js_jquery.dataTables.min.js"></script>
    <script src="/datatable/js/3cdn.datatables.net_1.13.6_js_dataTables.bootstrap5.min.js"></script>
    <script src="/datatable/js/4cdn.datatables.net_responsive_2.5.0_js_dataTables.responsive.min.js"></script>
    <script src="/datatable/js/5cdn.datatables.net_responsive_2.5.0_js_responsive.bootstrap5.min.js"></script>

    <script>
        new DataTable('#example', {
            responsive: true,
            "lengthMenu": [[5,10,50], [5,10,50]],
        });
        
    </script>

@endsection