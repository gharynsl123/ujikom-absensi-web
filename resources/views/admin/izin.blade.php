<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>FormWizard_v6</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="colorlib.com">

    <!-- MATERIAL DESIGN ICONIC FONT -->
    <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.css">

    <!-- STYLE CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="{{asset('css/style.css')}}"> -->
</head>

<body>
    <div class="col-md-8 m-auto my-5">
        <div class="card h-auto">
            <div class="card-header px-3">
                <h6 class="mb-0 p-3">Buat Perizinan</h6>
            </div>
            <div class="card-body">
                <form action="{{route('izin.store')}}" method="post">
                    {{method_field('POST')}}
                    @csrf
                    <div class="row align-items-center">
                        <div class="col-2 mb-2">
                            <label class="form-label">Nama Lengkap</label>
                        </div>
                        <div class="col-md-10 mb-2">
                            <input type="text" required class="form-control" name="nama_lengkap">
                        </div>
                        <div class="col-2 mb-2">
                            <label class="form-label">Kelas</label>
                        </div>
                        <div class="col-md-10 mb-2">
                            <input type="text" required class="form-control" name="kelas">
                        </div>
                        <div class="col-md-2 mb-2">
                            <label class="label-form">Keterangan</label>
                        </div>
                        <div class="col-md-10 mb-2">
                            <select type="text" required class="form-control" name="keterangan">
                                <option value="">Pilih Opsi</option>
                                <option value="Izin">Izin</option>
                                <option value="Sakit">Sakit</option>
                                <option value="Izin">Lainnya</option>
                            </select>
                        </div>
                        <div class="col-md-2"></div>
                        <div class="col-md-10">
                            <!-- <label for="formFile" class="form-label">Default file input example</label> -->
                            <input class="form-control" required type="file" id="formFile" style="height: 100px;" name="bukti_foto">
                            <div id="passwordHelpBlock" class="form-text">
                                Kirim bukti keterangan
                            </div>
                        </div>

                        <div class="d-flex justify-content-end form-group ">
                            <button type="submit" class="btn btn-success">Submit</button>
                           
                        </div>
                    </div>


                </form>
            </div>
        </div>
    </div>


    <script src="js/jquery-3.3.1.min.js"></script>

    <!-- JQUERY STEP -->
    <script src="js/jquery.steps.js"></script>

    <script src="js/main.js"></script>
    <!-- Template created and distributed by Colorlib -->
</body>

</html>
