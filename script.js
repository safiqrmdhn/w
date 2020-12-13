

$('#submit').on('click', function () {
    $("#result").html("");
    var nama = $('#inputNama').val();	
    var tanggal = $('#inputTanggal').val();
    var explode =tanggal.split("-");

    // Menampilkan tanggal, bulan, tahun
    var bulan = ["", "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
    
    if (explode[1] == "10" || explode[1] == "11" || explode[1] == "12"){
        
        var bln=explode[1];
    }else {
        bln=explode[1].substr(1,1);
    }

    // Menentukan Hari Masehi

    if (explode[0]%4 == 0){

		a = ['',31,29,31,30,31,30,31,31,30,31,30,31]
    }
	else {

		a = ['',31,28,31,30,31,30,31,31,30,31,30,31]
    }

    var siklus = Math.floor((explode[0]-1)/4);

    var sisaSiklus = (explode[0]-1) % 4;
    
     if (sisaSiklus !== 0 ){
         sisaSiklus = sisaSiklus * 365;
        }
    var hariSiklus = siklus * 1461;

        var w = explode[1];
        
        var q = 0;
            for(var i=1; i<w; i++){
                q = q+a[i];
            }
        var haridalamTahun = q + parseInt(explode[2]);

    var jumlahHari = hariSiklus + sisaSiklus + haridalamTahun;

    //Koreksi Gregorius dan selisih hijriyah dan masehi

    var selisihdankoreksi = 227029;
    jumlahHari = jumlahHari - selisihdankoreksi;
  
    var day = ["Kamis", "Jum'at","Sabtu","Minggu","Senin","Selasa","Rabu","Kamis"]
    var pasaran = ["Kliwon","Legi","Pahing","Pon","Wage","Kliwon"]
    
    // Masehi
    var xmasehi = jumlahHari % 7;

    // Pasaran
    var xpasaran = jumlahHari % 5;
    console.log(pasaran[xpasaran]);

    $("#result").append(`                    
    <div class="card mt-2">
    <div class="card-body">
    <div class="row">
        <div class=col-4>Nama </div> <div class=col-6>: `+nama+ `</div>
        <div class=col-4>Tanggal </div> <div class=col-8>: `+explode[2]+` `+bulan[bln]+` `+explode[0]+`</div>
        </div>    
    </div>
    </div>
                     `);

})