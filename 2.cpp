#include <iostream>
#include <math.h>

using namespace std;

int isPrima(int num); //fungsi untuk cek apakah prima

int main()
{
    int tgl, uang, telur, bonusTelur=0;
    int hargaTelur = 2500;
    
    cout << "tanggal beli telur (1-31)? ";
    cin >> tgl;
    
    cout << "uang yang digunakan? ";
    cin >> uang;
  
    telur = uang/hargaTelur;
    if (telur > 12 && tgl%2){ //jika telur > 1 lusin && tgl = ganjil
        bonusTelur = telur/12 * (isPrima(tgl)? 2 : 3); //apakah prima?
        
        if (!(tgl%5)){ //jika tgl kelipatan 5
            if (bonusTelur%2)  bonusTelur *= 5; //jika bonusTelur ganjil
            else bonusTelur *= 10;
        }
    }
    
    cout << "telur yang didapat: " << telur + bonusTelur << endl;
}

int isPrima(int num){
    for (int i = 2; i <= sqrt(num); i++)
        if (!(num%i)) return false;
        
    return true;
}


//https://beginnersbook.com/2017/09/cpp-program-to-check-prime-number-using-function/
//https://en.wikipedia.org/wiki/Primality_test#:~:text=9%20External%20links-,Simple%20methods,composite%2C%20otherwise%20it%20is%20prime.