@extends('plantilla.app')
@section('contenido')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-top-border alert-dismissible fade show" role="alert">
                <i class="ri-notification-off-line me-3 align-middle fs-16 text-success"></i><strong>Acción
                    exitosa</strong>
                - {{ $message }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @elseif($message = Session::get('error'))
            <div class="alert alert-danger alert-top-border alert-dismissible fade show" role="alert">
                <i class="ri-notification-off-line me-3 align-middle fs-16 text-danger"></i><strong>Ocurrio un
                    error</strong>
                - {{ $message }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="row">
            <div class="col-lg-12">
                <div class="d-flex flex-column h-100">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Lista de gestores</h4>
                                    <div class="flex-shrink-0">
                                        <div class="form-check form-switch form-switch-right form-switch-md">
                                            <a href="{{route('personal.cargar')}}" type="submit"
                                               class="btn btn-success btn-label"><i
                                                    class="ri-file-excel-line label-icon align-middle fs-16 me-2"></i>
                                                Cargar datos
                                            </a>
                                        </div>
                                    </div>
                                </div><!-- end card header -->
                                <div class="card-body">
                                    <div class="live-preview">
                                        <table class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Nombre</th>
                                                <th scope="col">Celular</th>
                                                <th scope="col">Usuario Libra</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($usuarios as $usuario)
                                                @php
                                                    $current_time = \Carbon\Carbon::now('America/La_Paz');
                                                    $hour = $current_time->hour;
                                                    if ($hour >= 12) {
                                                        $greeting = 'Buenas tardes';
                                                    } else {
                                                        $greeting = 'Buen día';
                                                    }
                                                        $link="https://api.whatsapp.com/send?phone=591".$usuario->celular." &text=".$greeting.", le comparto el link del reporte backorder semana 2 de Junio.%0Ahttps://devpromedical.online/informacion/gestor/".$usuario->gestor;
                                                @endphp
                                                <tr>
                                                    <th scope="row"><a href="#"
                                                                       class="fw-semibold">{{$loop->iteration}}</a></th>
                                                    <td>{{$usuario->nombre}}</td>
                                                    <td>{{$usuario->celular}}</td>
                                                    <td>{{$usuario->gestor}}</td>
                                                    <td><a href="{{$link}}" target="_blank" class="link-success">Enviar
                                                            link <i
                                                                class="ri-arrow-right-line align-middle"></i></a></td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="card-footer d-flex">
                                    <div class="align-items-center">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
