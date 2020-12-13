import os

def abc():
	z = input('Nama : ')
	v = input('Tgl Lahir (20/12/2001): ')
	x = v.split('/')

	if int(x[2])%4 == 0:
		a = ['',31,29,31,30,31,30,31,31,30,31,30,31]
	else:
		a = ['',31,28,31,30,31,30,31,31,30,31,30,31]

	w = int(x[1])
	q = sum(a[1:w])

	b = q+int(x[0])
	c = int((int(x[2])-1)/4)

	d = (int(x[2])+b+c)%7

	e = (c+b)%5
	return d,e,z,v #(hari masehi,pasaran,nama,tgl lahir)

os.system('cls' if os.name=='nt' else 'clear')
print('Weton Checker v1.0\nby. rhxx')
print('='*40)

print('[*]Kamu')
rohman = abc()

print('\n[*]Pasanganmu')
nanda = abc()

os.system('cls' if os.name=='nt' else 'clear')
print('Weton Checker v1.0\nby. rhxx')
print('='*40)

day = ["Jum'at","Sabtu","Minggu","Senin","Selasa","Rabu","Kamis"]
pasaran = ["Legi","Pahing","Pon","Wage","Kliwon"]
ankday = [6,9,5,4,3,7,8]
ankpasaran = [5,9,7,4,8]

print('Nama kamu   :', rohman[2])
print('Tgl lahir   :',rohman[3])
print('Pasaran     :',day[rohman[0]],pasaran[rohman[1]])
print('Jumlah      :',ankday[rohman[0]],'+',ankpasaran[rohman[1]], '=',ankday[rohman[0]]+ankpasaran[rohman[1]])
print('='*13)
print('Pasanganmu  :', nanda[2])
print('Tgl lahir   :',nanda[3])
print('Pasaran     :',day[nanda[0]],pasaran[nanda[1]])
print('Jumlah      :',ankday[nanda[0]],'+',ankpasaran[nanda[1]], '=',ankday[nanda[0]]+ankpasaran[nanda[1]])
print('='*13)

k = (ankday[rohman[0]]+ankpasaran[rohman[1]])+(ankday[nanda[0]]+ankpasaran[nanda[1]])
print('Angka weton :',k)

pegat = [1,9,10,18,19,27,28,36,'Pegat','"Hasil pegat, bahwa menurut hitungan weton jawa kemungkinan pasangan akan sering mendapatkan masalah di kemudian hari, bisa saja masalah ekonomi, kekuasaan, perselingkuhan hingga menyebabkan pasangan bercerai."']

ratu = [2,11,20,29,'Ratu','"Hasil Ratu, menurut hitungan weton jawa bisa dikatakan bahwa pasangan ini memang sudah jodohnya. Karena didalam kehidupan nanti keluarganya akan sangat dihargai dan disegani oleh tetangga maupun masyarakat sekitar. Bahkan banyak orang yang iri hati karena keharmonisannya dalam membina rumah tangga."']

jodo = [3,12,21,30,'Jodoh','"Hasil Jodoh, menurut hitungan weton jawa pasangan ini memang beneran cocok dan berjodoh. Karena dapat saling menerima baik kelebihan atau kekurangannya. Selain itu rumah tangganya dapat rukun sampai tua nanti."']

topo = [4,13,22,31,'Topo','"Hasil Topo, menurut hitungan jawa di gambarkan dalam membina rumah tangga nanti akan mengalami kesusahan di awal, tetapi akan bahagia di akhir nanti. Masalah ini bisa saja karena masalah ekonomi dan masih banyak lagi. Namun ketika sudah mempunyai anak dan cukup lama berumah tangga, di hari itulah kehidupanya akan menjadi sukses dan bahagia."']

tinari = [5, 14, 23, 32,'Tinari','"Hasil Tinari, menurut hitungan weton jawanya berarti akan menemukan kebehagaiaan dimasa nanti. Selain itu gampang dalam mencari rezeki dan sering mendapatkan keberuntungan."']

padu = [6, 15, 24, 33,'Padu','"Hasil Padu, menurut hitungan weton jawa digambarkan dalam berumah tangganya nanti akan sering mengalami sebuah pertengkaran. Namun tidak sampai mengarah ke seuah perceraian. Masalah pertengkaran ini digambarkan hanya masalah yang sifatnya cukup sepele."']

sujanan = [7, 16, 25, 34,'Sujanan','"Hasil sujanan, menurut hitungan weton jawa digambarkan bahwa dalam berumah tangganya nanti akan mengalami sebuah pertengkaran, bisa saja kerana perselingkuhan yang terjadi yang di mulai dari pahak laki-laki atau si perempuan."']

pesthi = [8, 17, 26, 35,'Pesthi','"Hasil Pesthi, menurut hitungan weton jawa digambarkan bahwa dalam berumah tangganya nanti akan selalu rukun, tenteram, adem ayem hingga tua nanti. Meskipun ada masalah, namun tidak akan bisa merusak keharmonisan keluarganya."']


print('='*20)
if k in pegat:
	print(pegat[8],'\n'+pegat[9])
elif k in ratu:
	print(ratu[4],'\n'+ratu[5])
elif k in jodo:
	print(jodo[4],'\n'+jodo[5])
elif k in topo:
	print(topo[4],'\n'+topo[5])
elif k in tinari:
	print(tinari[4],'\n'+tinari[5])
elif k in padu:
	print(padu[4],'\n'+padu[5])
elif k in sujanan:
	print(sujanan[4],'\n'+sujanan[5])
elif k in pesthi:
	print(pesthi[4],'\n'+pesthi[5])
