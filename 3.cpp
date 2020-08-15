#include <iostream>

using namespace std;

void cetakGambar(char arr[], int len){
    for (int i = 0; i < len; i++){
        for (int j = 0; j < len; j++){
            if (j==i || j+i == len-1)
                cout << arr[i];
            else
                cout << "=";
            cout << " ";
        }
        cout << endl;
    }
}

int main()
{
    char arr[] = {'D', 'U', 'M', 'B', 'W', 'A', 'Y', 'S', 'I', 'D'};
    
    int len = sizeof(arr)/sizeof(arr[0]); //untuk mengetahui panjang array.. beberapa orang menyarankan menggunakan vector karena langsung ada built-in functionnya (size)
    
    cetakGambar(arr, len);
}

//https://stackoverflow.com/questions/4108313/how-do-i-find-the-length-of-an-array
//https://www.tutorialspoint.com/cplusplus/cpp_passing_arrays_to_functions.htm