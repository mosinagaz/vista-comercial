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
                <i class="ri-notification-off-line me-3 align-middle fs-16 text-success"></i><strong>Acción exitosa</strong>
                - {{ $message }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @elseif($message = Session::get('error'))
            <div class="alert alert-danger alert-top-border alert-dismissible fade show" role="alert">
                <i class="ri-notification-off-line me-3 align-middle fs-16 text-danger"></i><strong>Ocurrio un error</strong>
                - {{ $message }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="row">
            <div class="col-lg-12">
                <div class="d-flex flex-column h-100">
                    <div class="row">
                        <div class="col-lg-12">
                            <form action="{{route('personal.importar')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card">
                                    <div class="card-header align-items-center d-flex">
                                        <h4 class="card-title mb-0 flex-grow-1">Cargar datos de personal</h4>
                                        <div class="flex-shrink-0">
                                            <div class="form-check form-switch form-switch-right form-switch-md">

                                            </div>
                                        </div>
                                    </div><!-- end card header -->
                                    <div class="card-body">
                                        <div class="live-preview">
                                            <div class="row align-items-center g-3">
                                                <div class="col-lg-12">
                                                    <div>
                                                        <label for="formFile" class="form-label">Archivo excel</label>
                                                        <p class="text-muted">Tome en cuenta que debe cargar un archivo
                                                            de tipo.
                                                            <code>xlsx , xls</code>.
                                                        </p>
                                                        <input class="form-control" type="file" id="formFile"
                                                               name="archivo" required>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="card-footer d-flex">
                                        <div class="align-items-center">
                                            <button type="submit" class="btn btn-success btn-label"><i
                                                    class="ri-save-3-line label-icon align-middle fs-16 me-2"></i>
                                                Guardar información
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!--end col-->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
