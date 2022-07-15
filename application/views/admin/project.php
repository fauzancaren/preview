<div class="container-fluid">
    <!-- Page Heading -->
    <h3 class="fw-bold mb-4 text-gray-800 text-uppercase">Customer Project</h3>
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
                        <th>Title</th>
                        <th>Date</th>
                        <th>Deskripsi</th>
                        <th>Address</th>
                        <th>Header</th>
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
                <h5 class="modal-title">EDIT CUSTOMER PROJECT</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row row-cols-1 row-cols-lg-2 p-2 p-lg-5 mb-3">
                    <div class="row mb-5 col-lg">
                        <img id="CustomerProjectHeaderImg" src="asset/image/test.jpg" class="img-fluid p-4 rounded-1" style="height: 500px; background-size: cover; background-position: center; object-fit: cover;">
                        </img>
                    </div>
                    <div class="row col-lg justify-content-lg-evenly align-content-center">
                        <div class="row">
                            <h2 class="mb-4" id="CustomerProjectTitle"></h2>
                            <small class="mb-2" id="CustomerProjectDeskripsi"></small>
                            <span id="CustomerProjectDate"></span>
                            <span id="CustomerProjectAddress"></span>
                        </div>
                    </div>
                </div>
                <hr>

                <div class="row row-cols-2 p-2">
                    <div class="col-9">
                        <h4 class="p-lg-5 p-sm-4 mb-3">Gallery Project</h4>
                        <div class="row row-cols-1 p-sm-4 p-lg-5 text-center">
                            <div class="col mb-1 mb-lg-5">
                                <img class="img-fluid mb-4" src="#" alt="img">
                                <small>deskripsi gallery</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">

                    </div>
                </div>

                <div class="row p-2 p-xl-5">
                    <span class="mb-3 p-lg-5 p-sm-4">Item yang digunakan</span>
                    <div class="row row-cols-2 row-cols-md-4 row-cols-xl-5 row-cols-xxl-6  m-auto">
                        <div class="col mb-3 shadow shadow-sm mb-4 p-2 justify-content-center">
                            <div class="d-flex flex-column justify-content-center text-center">
                                <img class="img-fluid" src="#" alt="img">
                                <span class="fw-normal mt-2 p-2">nama item</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion-item mt-2">
                    <h2 class="accordion-header" style="background-color: #d77777;" id="panelstay-basic-information">
                        <button class="accordion-button" style="height: 100px; color: white; font-size: 30px; margin: 10px; background-color: #d77777;" type="button" data-bs-toggle="collapse" data-bs-target="#panel-basic-information" aria-expanded="true" aria-controls="panelstay-basic-information">
                            <i class="fas fa-info-circle pe-2"></i> Customer Project
                        </button>
                    </h2>
                    <div id="panel-basic-information" class="accordion-collapse collapse show" aria-labelledby="panelstay-basic-information">
                        <div class="accordion-body">
                            <div class="row mb-1 mt-5">
                                <p class="col-2"></p>
                                <label for="input-pencarian" class="col-2 col-form-label">Title</label>
                                <div class="col-6">
                                    <input type="text" class="form-control form-control" id="input-CustomerProjectTitle">
                                </div>
                                <p class="col-2"></p>
                            </div>

                            <div class="row mb-1">
                                <p class="col-2"></p>
                                <label for="input-pencarian" class="col-2 col-form-label">Address</label>
                                <div class="col-6">
                                    <input type="text" class="form-control form-control" id="input-CustomerProjectAddress">
                                </div>
                                <p class="col-2"></p>
                            </div>

                            <div class="row mb-1">
                                <p class="col-2"></p>
                                <label for="input-pencarian" class="col-2 col-form-label">Deskripsi</label>
                                <div class="col-6">
                                    <textarea class="form-control" placeholder="Leave a comment here" id="input-CustomerProjectDeskripsi" style="height: 200px"></textarea>
                                </div>
                                <p class="col-2"></p>
                            </div>

                            <div class="row mb-1">
                                <p class="col-2"></p>
                                <label for="input-pencarian" class="col-2 col-form-label">Date</label>
                                <div class="col-6">
                                    <input type="text" class="form-control form-control" id="input-CustomerProjectDate">
                                </div>
                                <p class="col-2"></p>
                            </div>

                            <div class="row mb-1">
                                <p class="col-2"></p>
                                <label for="input-pencarian" class="col-2 col-form-label">Header Image</label>
                                <div class="col-6">
                                    <input type="file" class="form-control form-control" id="input-CustomerProjectHeaderImg" accept="image/*" onchange="loadFile(event)">
                                    <small class="text-secondary">Optimal ukuran file gambar 1200 x 400 px </small>
                                </div>
                                <p class="col-2"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item mt-2 mb-5">
                    <h2 class="accordion-header" style="background-color: #d77777;" id="panelstay-Gallery-product">
                        <button class="accordion-button" style="height: 100px; color: white; font-size: 30px; margin: 10px; background-color: #d77777;" type="button" data-bs-toggle="collapse" data-bs-target="#panel-Gallery-product" aria-expanded="true" aria-controls="panelstay-Gallery-product">
                            <i class="fas fa-info-circle pe-2"></i> Gallery Product
                        </button>
                    </h2>
                    <div id="panel-Gallery-product" class="accordion-collapse collapse show" aria-labelledby="panelstay-Gallery-product">
                        <div class="accordion-body">
                            <div class="row mb-1 mt-5">
                                <p class="col-2"></p>
                                <label for="input-pencarian" class="col-2 col-form-label">Gallery Customer Project</label>
                                <div class="col-6">
                                    <input type="file" class="form-control form-control" id="input-CustomerProjectHeaderImg" accept="image/*" onchange="loadFile(event)">
                                    <small class="text-secondary">Optimal ukuran file gambar 1200 x 400 px </small>
                                </div>
                                <p class="col-2"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batalkan</button>
                <button type="button" class="btn btn-success" id="btn-simpan" data-id="0">Simpan</button>
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
            "url": "<?php echo site_url('function/Datatable_admin/get_data_project') ?>",
            "type": "POST",
            "data": function(data) {
                data.search['value'] = $('#input-pencarian').val();
                data.search['status'] = $('#input-status').val();
                data.search['colstatus'] = "CostumerProjectVisible";
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
                "width": "10%",
                targets: 1
            },

            {
                "orderable": false,
                "className": "text-center",
                "width": "20%",
                targets: 3,
            },

            {
                "orderable": false,
                "className": "text-center",
                targets: 4,
            },
            {
                "orderable": false,
                "width": "35%",
                targets: 5,
            },
            {
                "orderable": false,
                targets: 7,
                "width": "5%",
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

    var defaultImageLocation = "<?= base_url("asset/image/project/") ?>"
    $('#tb_data').on('click', 'td.action', function() {
        var row = table.row(this).data(); // returns undefined  
        $("#CustomerProjectTitle").text(row[1]);
        $("#CustomerProjectDate").text(row[2]);
        $("#CustomerProjectDeskripsi").text(row[3]);
        $("#CustomerProjectAddress").text(row[4]);
        $("#btn-simpan").data("id", row[8]);

        $("#input-CustomerProjectTitle").val(row[1]);
        $("#input-CustomerProjectDate").val(row[2]);
        $("#input-CustomerProjectDeskripsi").val(row[3]);
        $("#input-CustomerProjectAddress").val(row[4]);
        loadURLToInputFiled($(row[5]).prop('src'));
        $("#modal-edit").modal("show");

    })
    
        $('#input-CustomerProjectTitle').keyup(function() {
            $("#CustomerProjectTitle").text($(this).val());
        });

        $('#input-CustomerProjectDate').keyup(function() {
            $("#CustomerProjectDate").text($(this).val());
        });

        $('#input-CustomerProjectDeskripsi').keyup(function() {
            $("#CustomerProjectDeskripsi").text($(this).val());
        });

        $('#input-CustomerProjectAddress').keyup(function() {
            $("#CustomerProjectAddress").text($(this).val());
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
                document.querySelector('#input-CustomerProjectHeaderImg').files = container.files;

                var reader = new window.FileReader();
                reader.readAsDataURL(imgBlob);
                reader.onloadend = function() {
                    base64data = reader.result;
                    $("#CustomerProjectHeaderImg").prop("src", base64data);
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
                var output = document.getElementById('CustomerProjectHeaderImg');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        };
</script>