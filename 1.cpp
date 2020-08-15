#include <iostream>

using namespace std;

int main(){
	int jarak = 64500; //meter
	
	int kecepatan = 3;
	int jarakDitempuh = 0;
	int detik = 0;
	while (jarakDitempuh <= jarak){ //selama jarakDitempuh <= jarak
		if (!(detik%1380)) //1380 detik = 23 menit -> setiap 23 menit berlalu, kecepatan berubah menjadi 5
			kecepatan = 5;
		
		if (detik>1380 && !(detik%720)) //720 detik = 12 menit -> setelah 23 menit pertama berlalu, maka setiap 12 menit berikutnya kecepatan menjadi 2 ("lebih lambat 3m/s dibanding 23 menit sebelumnya")
			kecepatan = 2;
		
		jarakDitempuh += kecepatan;
		detik++;
	}
	
	
	cout << detik/3600 << ":" << (detik%3600)/60 << ":" << (detik%3600)%60; //jam:menit:detik
}

/*pemahaman soal:
kecepatan awal Ismail adalah 3m/s.
setelah 23 menit, kecepatannya berubah menjadi 5m/s (sepertinya berlaku menit kelipatan -> menit 23, menit 46, menit 69, dst)
setelah melewati 23 menit pertama, maka setiap 12 menit berikutnya kecepatan Ismail akan lebih lambat 3m/s dibanding 23 menit seblumnya (terjadi pada menit ke-35, 47, 59, 71, dst)
dimana dalam 23 menit kecepatan Ismail selalu berubah menjadi 5, makaa setiap 12 menit (setelah 23 menit pertama terlewat) kecepatan Ismail berubah menjadi 2m/s,

sehinnga dapat disimpulkan timeframe kecepatan Ismail adalah:
menit 1 - menit 23 = 3m/s
menit 23 - menit xxx = bergantian antara 5m/s atau 2m/s
*/