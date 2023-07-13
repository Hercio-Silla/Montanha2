@extends('admin.layouts.master')
@section('title', 'Forum')

@section('content')

    <div class="card card-outline card-primary">
        <div class="card-header with-border d-flex flex-row justify-content-between">
            <h3 class="card-title">Data Postingna Forum</h3>
            <button type="button" class="btn btn-primary create" data-toggle="modal" data-target="#formModal">Tambah</button>
        </div>
        
        
        <div class="card-body">
            <table id="table" class="table table-bordered table_pasien">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Thumnail</th>
                        <th scope="col">title</th>
                        <th scope="col">Deskripsi Singkat</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel1">Form Forum</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <form id="form" method="POST" action="{{ route('admin.' . $action . '.store') }}">
                        
                        <div class="form-group" field="thumbnail">
                            <label for="thumbnail" class="control-label">Foto Thumnail:</label>
                            <input type="file" class="form-control" id="thumbnail" name="thumbnail">
                            <div class="error text-danger"></div>
                        </div>

                        <div class="form-group" field="title">
                            <label for="title" class="control-label">Judul:</label>
                            <input type="text" class="form-control" id="title" name="title">
                            <div class="error text-danger"></div>
                        </div>

                        <div class="form-group" field="small_description">
                            <label for="small_description" class="control-label">Deskripsi Singkat:</label>
                            <textarea type="text" class="form-control" id="small_description" name="small_description"></textarea>
                            <div class="error text-danger"></div>
                        </div>

                        <hr>

                        <div class="form-group" field="description">
                            <label for="description" class="control-label">Deskripsi:</label>
                            <textarea type="text" class="form-control" id="description" name="description"></textarea>
                            <div class="error text-danger"></div>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                    <button type="button" id="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>
    

@endsection
@section('script')
    <script>
        $(document).ready(function() {
            window.page_url = window.base_url + `admin/{{ $action }}`;
            window.form = $('#form');
            window.serialize = form.serializeArray();
            window.serialize.push({
                name: "id",
                value: ""
            });

            console.log(window.serialize);

            window.table = $('#table').DataTable({
                "lengthChange": false,
                stateSave: true,
                processing: true,
                serverSide: true,
                ajax: {
                    url: `{{ route('admin.' . $action . '.data') }}`,
                    type: 'GET',
                },
                columns: [
                    {
                        data: 'id'
                    },
                    {
                        data: 'thumbnail',
                        render: function(value, row, data) {
                            return `<img src="${window.base_url}${value}" class="img-responsive" width="50" alt="">`;
                        }
                    },
                    {
                        data: 'title'
                    },
                    {
                        data: 'small_description'
                    },
                    {
                        data: 'id',
                        render: function(value, row, data) {
                            return `
                                <button type="button" class="btn btn-primary update">Edit</button>
                                <button type="button" class="btn btn-danger delete">Hapus</button>
                            `;
                        }
                    }

                ],
            });
        })
    </script>
@endsection