@extends('layouts.app', ['activePage' => 'table', 'titlePage' => __('Table List')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#modal_tambah">Tambah</button>
                        <h4 class="card-title ">Tabel Soal</h4>
                    </div>
                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class=" text-primary">
                                    <th>No</th>
                                    <th>Soal</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>312</td>
                                        <td>Niger</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="modal_tambah" tabindex="-1" aria-labelledby="ModalTambah" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalTambah"><b>Tambah Data</b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="soal_nlp">Soal NLP</label>
                        <textarea class="form-control" id="soal_nlp" aria-describedby="soal_nlp" rows="4"></textarea>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection