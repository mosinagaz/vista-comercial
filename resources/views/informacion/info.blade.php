@extends('plantilla.app')
@section('contenido')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                </div>
            </div>
        </div>
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
                                        <div class="row gy-4 mb-2">
                                            <div class="col-xxl-4 col-md-6">
                                                <div>
                                                    <label for="basiInput" class="form-label">Usuario</label>
                                                    <input type="password" class="form-control" id="basiInput">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-4 col-md-6">
                                                <div>
                                                    <label for="labelInput" class="form-label">Numero de semana</label>
                                                    <input type="password" class="form-control" id="labelInput">
                                                </div>
                                            </div>

                                            <div class="col-xxl-4 col-md-6">
                                                <div>
                                                    <label for="labelInput" class="form-label">Otro filtro</label>
                                                    <input type="password" class="form-control" id="labelInput">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-md-6 mb-5">
                                            <div>
                                                <button type="button" class="btn btn-success  btn-label w-lg"><i class="ri-search-2-line label-icon align-middle fs-16 me-2"></i>Filtrar</button>
                                            </div>
                                        </div>
                                        <div class="accordion" id="default-accordion-example">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingOne">
                                                    <button class="accordion-button fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        Data 1
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#default-accordion-example">
                                                    <div class="accordion-body">
                                                        info1
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingTwo">
                                                    <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        Data 2
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#default-accordion-example">
                                                    <div class="accordion-body">
                                                        info 2
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingThree">
                                                    <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        Data 3
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#default-accordion-example">
                                                    <div class="accordion-body">
                                                      info 3
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
