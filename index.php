<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>

<div class="container-md mt-5 col-10">
    <h1>Weton</h1>
    <div class="card">
        <div class="card-body" >
            <form>
                <div class="mb-3 row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputNama">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputNama" class="col-sm-2 col-form-label">Tanggal</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="inputTanggal">
                    </div>
                </div>
                <input type="button" value="Submit" id="submit" class="btn btn-primary" >
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