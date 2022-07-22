<style>
 
    .dropzone .dz-preview:hover .dz-image img { 
        filter: blur(1px) !important;
    }
    .dz-action{
        position: absolute;
        top:0;
        right:0;
        z-index:100;
    }
    .dz-action:hover{
        cursor: pointer;
    }
</style> 
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
                        <th>Gambar</th>
                        <th>Kategori</th>
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>Deskripsi</th>
                        <th>Harga</th>
                        <th>Satuan</th>
                        <th>Status</th>
                        <th>Action</th>
                        <th>type</th>
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
                            <img class="img-fluid" style="object-fit: contain;" id="MsItemImage" src="<?= base_url("asset/image/test.jpg") ?>" alt="">
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
                                <a class="px-4 py-1 border border-1 border-dark text-dark" style="text-decoration: none;" id="list-profile-list" data-bs-toggle="list" href="#list-profile" role="tab" aria-controls="list-profile">Lainnya</a>
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

                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" style="background-color: #d77777;" id="panelstay-detail-item">
                        <button class="accordion-button" style="height: 100px; color: #ffffff; font-size: 1em; padding-left: 5%; background-color: #5a5c69;" type="button" data-bs-toggle="collapse" data-bs-target="#panel-detail-item" aria-expanded="true" aria-controls="panelstay-detail-item">
                            <i class="fas fa-info-circle pe-2"></i> Detail Item
                        </button>
                    </h2>
                    <div id="panel-detail-item" class="accordion-collapse collapse show" aria-labelledby="panelstay-detail-item">
                        <div class="accordion-body py-5">
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
                                <input type="hidden" name="idRef" id="input-MsItemDeskripsiRef">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" style="background-color: #d77777;" id="panelstay-gallery-product">
                        <button class="accordion-button" style="height: 100px; color: #ffffff; font-size: 1em; padding-left: 5%; background-color: #5a5c69;" type="button" data-bs-toggle="collapse" data-bs-target="#panel-gallery-product" aria-expanded="true" aria-controls="panelstay-gallery-product">
                            <i class="fas fa-info-circle pe-2"></i>Gallery Product
                        </button>
                    </h2>
                    <div id="panel-gallery-product" class="accordion-collapse collapse show" aria-labelledby="panelstay-gallery-product">
                        <div class="accordion-body py-5">
                            <div class="container">
                                <div class="row mb-1">
                                    <label for="input-pencarian" class="col-2 col-form-label">Foto Gallery</label>
                                    <div class="col-10">
                                        <div class="dropzone">
                                        </div> 
                                    </div>
                                </div>
                                <button id="test-drop" class="btn btn-primary">test</button>
                                <div id="image-temp"></div>
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
                "className": "text-end",
                targets: 6
            },
            {
                "orderable": false,
                targets: 9,
                className: 'action'
            },
            {
                "visible": false,
                targets: 10
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

        $("#input-MsItemDeskripsiRef").val(row[8]);
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

    Dropzone.autoDiscover = false; 
    var foto_upload = new Dropzone(".dropzone",{
        url: "<?= base_url("uploadGallery/uploadGalleryProduct")?>",
        maxFilesize: 2, 
        autoProcessQueue: false,
        acceptedFiles: "image/*",
        paramName: "userfile",
        dictInvalidFileType: "Type file not allowed",
        addRemoveLink: true, 
    }); 
    var object = {};
    var indexobject = 0;
    foto_upload.on("addedfile", file => { 
        $('.dz-preview').addClass('dz-complete');
        $('.dz-details').addClass('d-none'); 
 
        object[indexobject] = file;
        $(file.previewTemplate).append("<div class='dz-action'><a onclick='remove_dropzone_file(" + indexobject+ ")'><i class='fas fa-times'></i></a></div>"); 
        indexobject++;
    });
    remove_dropzone_file = function(file){ 
        foto_upload.removeFile(object[file]);
        delete object[file]; 
    }
    $("#test-drop").click(function(){
        $("#image-temp").html("");
        console.log(foto_upload.files);
        for(var i = 0;i < foto_upload.files.length;i++){
            $("#image-temp").append("<image src='" + foto_upload.files[i]["dataURL"]+"'/>");
            
        }
    })
 

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

    var req_status_add = 0;

    // loadURLToInputFiled(url);
    $("#btn-simpan").click(function() {
        if (!req_status_add) {
            $("#btn-simpan").html('<i class="fas fa-circle-notch fa-spin"></i> Loading');

            $.ajax({
                type: 'POST',
                url: "<?= site_url("function/FunctionAdmin/product_edit/") ?>" + $("#input-MsItemDeskripsiRef").val(),
                data: {
                    "MsItemDeskripsiText": $("#input-MsItemDeskripsiText").val(),
                    "MsItemColor": $("#input-MsItemColor").val(),
                    "MsItemMaterial": $("#input-MsItemMaterial").val()
                },
                before: function() {
                    req_status_add = 1;
                },
                success: function(data) {
                    req_status_add = 0;
                    $("#btn-simpan").html("Simpan");
                    Swal.fire({
                        icon: 'success',
                        text: 'Edit data berhasil',
                        showConfirmButton: false,
                        allowOutsideClick: false,
                        allowEscapeKey: false,
                        timer: 1500,
                    })
                },
                error: function(err) {
                    Swal.fire({
                        icon: 'error',
                        text: err,
                        showConfirmButton: false,
                        allowOutsideClick: false,
                        allowEscapeKey: false,
                        timer: 1500
                    });
                }
            })
        }
    });
</script>