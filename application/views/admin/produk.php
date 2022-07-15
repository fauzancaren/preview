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
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">EDIT PRODUK</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid" style="background-color: #fefdf9;">
                    <div class="row row-cols-1 row-cols-lg-2 p-lg-5 shadow-sm pb-5">
                        <div class="col mb-5 mb-lg-0 text-center d-flex justify-content-center" style="height: 600px;">
                            <img class="img-fluid" id="MsItemImage" src="<?= base_url("asset/image/test.jpg") ?>" alt="">
                        </div>
                        <div class="col d-flex px-4 px-lg-5 flex-column justify-content-lg-center">
                            <div class="row">
                                <h2 class="mb-2" id="MsItemName"></h2>
                                <h6 class="mb-2" id="MsItemCode"></h6>
                                <span class="mb-4" id="MsItemSize"></span>
                                <h4 class="mb-4 fw-normal" id="MsItemPrice"></h4><small class="fw-light" id="MsItemUoM">/</small>

                                <div class="col col-sm-6 col-lg-8 col-xl-6">
                                    <a class="btn d-flex justify-content-center align-items-center" style="background-color: #26a69a; color: white;">
                                        <i class="fab fa-whatsapp fs-2" style="margin-right: 1rem;"></i>
                                        <span>Order Via Whatsapp</span>
                                    </a>
                                </div>

                            </div>
                            <hr class="mb-4">
                            <div class="p-0" id="list-tab" role="tablist">
                                <a class="px-4 py-1 active border border-1 border-dark text-dark" style="text-decoration: none;" id="list-home-list" data-bs-toggle="list" href="#list-home" role="tab" aria-controls="list-home">Deskripsi</a>
                                <a class="px-4 py-1 border border-1 border-dark text-dark" style="text-decoration: none;" id="list-profile-list" data-bs-toggle="list" href="#list-profile" role="tab" aria-controls="list-profile">Info Tambahan</a>
                            </div>
                            <div class="tab-content mt-3" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                                    <blockquote class="mb-3" style="white-space: pre-wrap; " id="MsItemDeskripsiText"></blockquote>
                                </div>
                                <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                                    <table>
                                        <tr>
                                            <td><small class="fw-bold">Warna</small></td>
                                            <td style="width: 1rem;"> : </td>
                                            <td id="MsItemColor"></td>
                                        </tr>
                                        <tr>
                                            <td><small class="fw-bold">Material</small> </td>
                                            <td style="width: 1rem;"> : </td>
                                            <td id="MsItemMaterial"></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-fluid p-5" style="background-color: #fefdf9;">
                    <h4 class="text-center mb-5">Gallery Product</h4>
                    <div class="row row-cols-2 row-cols-lg-4 row-cols-sm-3 row-cols-xxl-5 text-center">
                        <div class="col mb-5">
                            <!-- <img class="img-fluid" src="<?= base_url() ?>/asset/image/subProduct/BXP0001.png" alt=""> -->
                        </div>
                    </div>
                </div>
                <div class="accordion-item mt-2">
                    <h2 class="accordion-header" style="background-color: #d77777;" id="panelstay-basic-information">
                        <button class="accordion-button" style="height: 100px; color: white; font-size: 30px; margin: 10px; background-color: #d77777;" type="button" data-bs-toggle="collapse" data-bs-target="#panel-basic-information" aria-expanded="true" aria-controls="panelstay-basic-information">
                            <i class="fas fa-info-circle pe-2"></i> Detail Item
                        </button>
                    </h2>
                    <div id="panel-basic-information" class="accordion-collapse collapse show" aria-labelledby="panelstay-basic-information">
                        <div class="accordion-body">
                            <div class="container">
                                <div class="row mb-1">
                                    <label for="input-pencarian" class="col-2 col-form-label">Deskripsi</label>
                                    <div class="col-10">
                                        <textarea class="form-control" placeholder="Leave a comment here" id="input-MsItemDeskripsiText" style="height: 200px"></textarea>
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <label for="input-pencarian" class="col-2 col-form-label">Warna</label>
                                    <div class="col-10">
                                        <input type="text" class="form-control form-control" id="input-MsItemColor">
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <label for="input-pencarian" class="col-2 col-form-label">Material</label>
                                    <div class="col-10">
                                        <input type="text" class="form-control form-control" id="input-MsItemMaterial">
                                    </div>
                                </div>

                                <div class="row mb-1">
                                    <label for="input-pencarian" class="col-2 col-form-label">Foto Produk</label>
                                    <div class="col-10">
                                        <input type="file" class="form-control form-control" id="input-MsItemImage" accept="image/*" onchange="loadFile(event)">
                                    </div>
                                </div>
                            </div>
                        </div>
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
                data.search['colstatus'] = "MsItemDeskripsiVisible";
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

    var defaultImageLocation = "<?= base_url("upload.php?kode=") ?>"
    $('#tb_data').on('click', 'td.action', function() {
        var row = table.row(this).data(); // returns undefined  
        $("#MsItemCode").text(row[1]);
        $("#MsItemName").text(row[2]);
        $("#MsItemPrice").text(new Intl.NumberFormat().format(row[3]));
        $("#MsItemUoM").text(row[4]);
        $("#MsItemDeskripsiText").text(row[9]);
        $("#MsItemColor").text(row[10]);
        $("#MsItemMaterial").text(row[11]);
        $("#btn-simpan").data("id", row[8]);

        $("#input-MsItemDeskripsiText").val(row[9]);
        $("#input-MsItemColor").val(row[10]);
        $("#input-MsItemMaterial").val(row[11]);
        loadURLToInputFiled($(row[5]).prop('src'));
        $("#modal-edit").modal("show");
    })

        $('#input-MsItemDeskripsiText').keyup(function() {
            $("#MsItemDeskripsiText").text($(this).val());
        });

        $('#input-MsItemColor').keyup(function() {
            $("#MsItemColor").text($(this).val());
        });

        $('#input-MsItemMaterial').keyup(function() {
            $("#MsItemMaterial").text($(this).val());
        });

        function loadURLToInputFiled(url) {
            getImgURL(url, (imgBlob) => {
                // Load img blob to input
                // WIP: UTF8 character error 
                let fileName = url.replace(defaultImageLocation, "");
                let file = new File([imgBlob], fileName, {
                    type: "image/jpg",
                    lastModified: new Date().getTime()
                }, 'utf-8');
                let container = new DataTransfer();
                container.items.add(file);
                document.querySelector('#input-MsItemImage').files = container.files;

                var reader = new window.FileReader();
                reader.readAsDataURL(imgBlob);
                reader.onloadend = function() {
                    base64data = reader.result;
                    $("#MsItemImage").prop("src", base64data);
                }
            })
        }

        // xmlHTTP return blob respond
        function getImgURL(url, callback) {
            var xhr = new XMLHttpRequest();
            xhr.onload = function() {
                callback(xhr.response);
            };
            xhr.open('GET', url);
            xhr.responseType = 'blob';
            xhr.send();
        }

        //auto show from input file
        var loadFile = function(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('MsItemImage');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        };
   
</script>