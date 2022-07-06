<div class="container-fluid">
    <!-- Page Heading -->
    <h3 class="fw-bold mb-4 text-gray-800 text-uppercase">Produk</h3>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="row mb-1">
                        <label for="input-pencarian" class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-10">
                            <select class="form-select form-select-sm" id="input-status">
                                <option value="-">Semua Status</option>
                                <option value="1" selected>aktif</option>
                                <option value="0">tidak aktif</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="input-pencarian" class="col-sm-2 col-form-label">Pencarian</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm" id="input-pencarian">
                        </div>
                    </div>
                </div>
            </div>
            <table id="tb_data" class="table table-hover table-sm" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Kategory</th>
                        <th>Nama</th>
                        <th>Harga</th>
                        <th>Satuan</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-edit" tabindex="-1">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">EDIT PRODUK</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="row mb-1">
                    <label for="input-pencarian" class="col-sm-2 col-form-label">Code</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm" id="MsItemCode">
                    </div>
                </div>
                <div class="row mb-1">
                    <label for="input-pencarian" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm" id="MsItemName">
                    </div>
                </div>

                <div class="row mb-1">
                    <label for="input-pencarian" class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-4">
                        <input type="text" class="form-control form-control-sm" id="MsItemPrice">
                    </div>

                    <label for="input-pencarian" class="col-sm-2 col-form-label">Satuan</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control form-control-sm" id="MsItemUoM">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batalkan</button>
                <button type="button" class="btn btn-success" id="btn-simpan" data-id=0>Simpan</button>
            </div>
        </div>
    </div>
</div>

<script>
    var table = $('#tb_data').DataTable({
        "responsive": true,
        "searching": false,
        "lengthChange": false,
        "pageLength": 25,
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": "<?php echo site_url('function/Datatable_admin/get_data_produk') ?>",
            "type": "POST",
            "data": function(data) {
                data.search['value'] = $('#input-pencarian').val();
                data.search['status'] = $('#input-status').val();
                data.search['colstatus'] = "MsItemIsActive";
            }
        },
        "order": [],
        "columnDefs": [{
                "orderable": false,
                targets: 0
            },
            {
                "orderable": false,
                "className": "text-center",
                targets: 5
            },
            {
                "orderable": false,
                "className": "text-center",
                targets: 6
            },
            {
                "orderable": false,
                targets: 7,
                className: 'action'
            },
            {
                "visible": false,
                targets: 8
            },
        ],

    });

    $('#input-pencarian').keyup(function() {
        table.ajax.reload(null, false).responsive.recalc().columns.adjust();
    });
    $('#input-status').change(function() {
        table.ajax.reload(null, false).responsive.recalc().columns.adjust();
    });

    $('#tb_data').on('click', 'td.action', function() {
        var row = table.row(this).data(); // returns undefined  
        $("#MsItemCode").text(row[1]);
        $("#MsItemName").text(row[2]);

        $("#MsItemCode").val(row[1]);
        $("#MsItemName").val(row[2]);
        $("#MsItemPrice").val(row[3]);
        $("#MsItemUoM").val(row[4]);
        $("#modal-edit").modal("show");
        // $("#btn-simpan").data("id", row[6]);

        // $("#input-CategoryDetailHeader").val(row[1]);
        // $("#input-CategoryDetailText").val(row[2]);
        // loadURLToInputFiled($(row[4]).prop('src'));
        // $("#modal-edit").modal("show");
    })
</script>