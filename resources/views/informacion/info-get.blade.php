@extends('plantilla.app')
@section('contenido')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                </div>
            </div>
        </div>
        @if (session('success'))
            <div class="alert alert-success alert-top-border alert-dismissible fade show" role="alert">
                <i class="ri-notification-off-line me-3 align-middle fs-16 text-success"></i><strong>Acción
                    exitosa</strong>
                - {{ session('success') }}
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
                                    <h4 class="card-title mb-0 flex-grow-1">Información</h4>
                                    <div class="flex-shrink-0">
                                        <div class="form-check form-switch form-switch-right form-switch-md">

                                        </div>
                                    </div>
                                </div><!-- end card header -->
                                <div class="card-body">
                                    <div class="live-preview">
                                        <form action="{{url('informacion/gestor/'.$gestor)}}" method="get">

                                            <div class="row gy-4 mb-2">
                                                <div class="col-xxl-4 col-md-12 col-sm-12">
                                                    <div>
                                                        <label for="basiInput" class="form-label">Categoria</label>
                                                        <select name="categoria" type="text"
                                                                class="form-control form-control-sm">
                                                            <option value="">Seleccione una categoria</option>
                                                            @foreach($categoria as $cat)
                                                                <option
                                                                    value="{{$cat->categoria}}" {{(isset($lista) && !empty($lista)) ?(reset($lista)[0]['categoria'] == $cat->categoria ?'selected':''):'' }}>{{$nombres[$cat->categoria]}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-md-6 mb-5">
                                                <div>
                                                    <button type="submit" class="btn btn-success  btn-label w-lg"><i
                                                            class="ri-search-2-line label-icon align-middle fs-16 me-2"></i>Filtrar
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="accordion" id="default-accordion-example">
                                            @if(isset($lista) && !empty($lista))
                                                @foreach($lista as $dato)
                                                    {{--{{dd($dato[0]['numero_pedido'])}}--}}
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header"
                                                            id="headingOne{{$dato[0]['numero_pedido']}}">
                                                            <button class="accordion-button fw-semibold" type="button"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#collapseOne{{$dato[0]['numero_pedido']}}"
                                                                    aria-expanded="false"
                                                                    aria-controls="collapseOne{{$dato[0]['numero_pedido']}}">
                                                                Pedido Nro. {{$dato[0]['numero_pedido']}}
                                                                - {{$dato[0]['fecha_pedido']}}
                                                                - {{ $dato[0]['d_cliente']}}
                                                                - {{ $dato[0]['cliente']}}

                                                            </button>
                                                        </h2>
                                                        <div id="collapseOne{{$dato[0]['numero_pedido']}}"
                                                             class="accordion-collapse collapse"
                                                             aria-labelledby="headingOne{{$dato[0]['numero_pedido']}}"
                                                             data-bs-parent="#default-accordion-example">
                                                            <div class="accordion-body">
                                                                @foreach($dato as $info)
                                                                    <div
                                                                        class="alert alert-success alert-dismissible alert-outline fade show"
                                                                        role="alert">
                                                                        <strong>Cod Artículo:</strong> - {{$info['articulo']}}
                                                                        <br>
                                                                        <strong>Artículo:</strong> - {{$info['descripcion_articulo']}}
                                                                        <br>
                                                                        <strong>Valor pedido:</strong>  {{$info['cantidad_perdida']}}
                                                                        <br>
                                                                        <strong>U. P:</strong> - {{$info['un_pendiente']}} - <strong>V. P:</strong> - {{$info['valor_pendiente']}} Bs.
                                                                        @if($categoriaSe === "DRECUP12")
                                                                        <br>
                                                                        <strong>Vida útil:</strong>  {{$info['observacion']}}
                                                                        @endif
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @else
                                                <!-- Primary Alert -->
                                                <div
                                                    class="alert alert-primary alert-border-left alert-dismissible fade show"
                                                    role="alert">
                                                    <i class="ri-user-smile-line me-3 align-middle"></i> <strong>Información</strong>
                                                    - no se encontraron datos.
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                            aria-label="Close"></button>
                                                </div>
                                            @endif
                                                <!-- Base Example -->

                                            {{--<div class="accordion-item">
                                                <h2 class="accordion-header" id="headingThree">
                                                    <button class="accordion-button fw-semibold collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                            aria-expanded="false" aria-controls="collapseThree">
                                                        Data 3
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse"
                                                     aria-labelledby="headingThree"
                                                     data-bs-parent="#default-accordion-example">
                                                    <div class="accordion-body">
                                                        info 3
                                                    </div>
                                                </div>
                                            </div>--}}
                                        </div>
                                        {{--<div class="accordion" id="default-accordion-example">
                                            @if(isset($lista))
                                                @foreach($lista as $dato)
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="headingOne{{$dato->id}}">
                                                            <button class="accordion-button fw-semibold" type="button"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#collapseOne{{$dato->id}}"
                                                                    aria-expanded="false"
                                                                    aria-controls="collapseOne{{$dato->id}}">
                                                                {{$dato->fecha_pedido}} - {{ $dato->d_cliente}} - {{$dato->descripcion_articulo}}
                                                            </button>
                                                        </h2>
                                                        <div id="collapseOne{{$dato->id}}"
                                                             class="accordion-collapse collapse"
                                                             aria-labelledby="headingOne{{$dato->id}}"
                                                             data-bs-parent="#default-accordion-example">
                                                            <div class="accordion-body">
                                                                <label for=""><strong>DCliente:</strong></label><br>
                                                                {{$dato->d_cliente}}<br>
                                                                <label for=""><strong>Número
                                                                        pedido:</strong></label><br>
                                                                {{$dato->numero_pedido}}<br>
                                                                <label for=""><strong>Artículo:</strong></label><br>
                                                                {{$dato->articulo}}<br>
                                                                <label for=""><strong>D Artículo:</strong></label><br>
                                                                {{$dato->descripcion_articulo}}<br>
                                                                <label for=""><strong>U Pendiente:</strong></label><br>
                                                                {{$dato->un_pendiente}}<br>
                                                                <label for=""><strong>V Pendiente:</strong></label><br>
                                                                {{$dato->valor_pendiente}} Bs.
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @endif
                                            --}}{{--<div class="accordion-item">
                                                <h2 class="accordion-header" id="headingThree">
                                                    <button class="accordion-button fw-semibold collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                            aria-expanded="false" aria-controls="collapseThree">
                                                        Data 3
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse"
                                                     aria-labelledby="headingThree"
                                                     data-bs-parent="#default-accordion-example">
                                                    <div class="accordion-body">
                                                        info 3
                                                    </div>
                                                </div>
                                            </div>--}}{{--
                                        </div>--}}
                                    </div>
                                </div>
                                <div class="card-footer d-flex">
                                    {{--<div class="align-items-center">
                                        <button type="button" class="btn btn-success btn-label"><i class="ri-save-3-line label-icon align-middle fs-16 me-2"></i> Guardar información</button>
                                    </div>--}}
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
{{--<div class="live-preview">
    <div class="table-responsive">
        <table class="table table-bordered table-nowrap">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Fecha Pedido</th>
                <th scope="col">Pedido</th>
                <th scope="col">Cliente</th>
                <th scope="col">D Cliente</th>
                <th scope="col">Artículo</th>
                <th scope="col">D Artículo</th>
                <th scope="col">U Pendiente</th>
                <th scope="col">V Pendiente</th>
            </tr>
            </thead>
            <tbody>
            @if(isset($lista))
                @foreach($lista as $dato)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$dato->fecha_pedido}}</td>
                        <td>{{$dato->numero_pedido}}</td>
                        <td>{{$dato->cliente}}</td>
                        <td>{{$dato->d_cliente}}</td>
                        <td>{{$dato->articulo}}</td>
                        <td>{{$dato->descripcion_articulo}}</td>
                        <td>{{$dato->un_pendiente}}</td>
                        <td>{{$dato->valor_pendiente}}</td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>
</div>--}}
