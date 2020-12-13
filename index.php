<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Weton</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" 
    crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@491&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container-md mt-5 col-11">
    <h1>Hitung</h1>
    <img src="head-min.jpg" alt="" srcset="" class="ikon">
    <div class="card mb-3">
        <div class="card-body" >
            <form>
                <div class="mb-1 row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama Kamu</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputNama">
                    </div>
                </div>
                <div class="mb-1 row">
                    <label for="inputNama" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="inputTanggal">
                    </div>
                </div>
                <div class="mb-1 row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama Pasangan</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputNama">
                    </div>
                </div>
                <div class="mb-1 row">
                    <label for="inputNama" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="inputTanggal">
                    </div>
                </div>
                <input type="button" value="Hitung" id="submit" class="btn btn-primary mt-2 col-12 btn-hitung" >
            </form>
        </div>
    </div>
    
    <div id="result"></div>
    
</div>
</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" 
        integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" 
        crossorigin="anonymous">
</script>
<script src="script.js"></script>

</html>