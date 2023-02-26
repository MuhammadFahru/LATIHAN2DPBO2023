using namespace std;
#include <bits/stdc++.h>
#include "Mahasiswa.cpp"

int main()
{
    Mahasiswa mhs1("3273201234567890", "Muhammad Fahru Rozi", "Laki-laki", "UPI", "muhammadfahru@upi.edu", "2108927", "Ilmu Komputer", "FPMIPA");
    cout << "+------------------------------------------+" << endl;
    cout << "|            Data Mahasiswa 1              |" << endl;
    cout << "+------------------------------------------+" << endl;
    mhs1.displayDaya();
    cout << "+------------------------------------------+" << endl;

    Mahasiswa mhs2;
    mhs2.setNik("3273201234567893");
    mhs2.setNama("Chelsea Islan");
    mhs2.setGender("Perempuan");
    mhs2.setAsalUniversitas("ITB");
    mhs2.setEmailEdu("chelsea@itb.ac.id");
    mhs2.setNim("2108929");
    mhs2.setProdi("Matematika");
    mhs2.setFakultas("FMIPA");
    cout << "+------------------------------------------+" << endl;
    cout << "|            Data Mahasiswa 2              |" << endl;
    cout << "+------------------------------------------+" << endl;
    mhs2.displayDaya();
    cout << "+------------------------------------------+" << endl;

    return 0;
}