    <div class="modal fade" id="formMejaModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Form Tambah Meja</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card card-primary">
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="post" action="meja">
                            @csrf
                            <div id="method"></div>

                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputMeja">Nomor Meja</label>
                                    <input type="number" class="form-control" id="nomor_meja" value=""
                                        name="nomor_meja">
                                    <label for="exampleInputMeja">Kapasitas</label>
                                    <input type="number" class="form-control" id="kapasitas" value=""
                                        name="kapasitas">
                                    <label for="exampleInputMeja" class="form-label">Pilih Status</label>
                                    <select class="form-select" name="status" id="status">
                                        <option value="kosong">Kosong</option>
                                        <option value="terisi">Terisi</option>s
                                    </select>

                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>

                        </form>
                    </div>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    </div>
