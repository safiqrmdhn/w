

$('#submit').on('click', function () {
    $("#result").html("");
    var nama = $('#inputNama').val();	
    var tanggal = $('#inputTanggal').val();
    var explode =tanggal.split("-");

    // Menampilkan bulan
    var bulan = ["", "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
    
    if (explode[1] == "10" || explode[1] == "11" || explode[1] == "12"){
        
        var bln=explode[1];
    }else {
        var bln=explode[1].substr(1,1);
    }
    console.log(bln);

    // Menentukan Hari Masehi

    if (explode[0]%4 == 0){

		a = ['',31,29,31,30,31,30,31,31,30,31,30,31]
    }
	else {

		a = ['',31,28,31,30,31,30,31,31,30,31,30,31]
    }

	var w = explode[1];
    
    var q = 0;
        for(var i=1; i<w; i++){
            q = q+a[i];
        }

        var zzz=10/4;
        typeof zzz;
        console.log(zzz);
    // if(explode[0]%4 == 0){
    //     var q = 366
    // }else{
    //     var q = 365
    // }

    var b = q+parseInt(explode[2]);
    
	var c = (explode[0]-1)/4;

	var d = (explode[0]+b+c)%7; // masehi
    var xmasehi = Math.round(d)
    var e = (c+b)%5; // pasaran
    var xpasaran = Math.round(e)
    
    var day = ["Jum'at","Sabtu","Minggu","Senin","Selasa","Rabu","Kamis"]
    var pasaran = ["Legi","Pahing","Pon","Wage","Kliwon"]

    console.log(pasaran[xpasaran])
    console.log(day[xmasehi])
    console.log(d)
    console.log(e)


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