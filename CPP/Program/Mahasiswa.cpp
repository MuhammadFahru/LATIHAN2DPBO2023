using namespace std;
#include <bits/stdc++.h>
#include "SivitasAkademik.cpp"
class Mahasiswa : public SivitasAkademik
{
private:
    string nim;
    string prodi;
    string fakultas;

public:
    // Constructor
    Mahasiswa()
    {
        this->nim = "";
        this->prodi = "";
        this->fakultas = "";
    }

    Mahasiswa(string nik, string nama, string gender, string asal_universitas, string email_edu, string nim, string prodi, string fakultas) : SivitasAkademik(nik, nama, gender, asal_universitas, email_edu)
    {
        this->nim = nim;
        this->prodi = prodi;
        this->fakultas = fakultas;
    }

    // Setter & Getter

    void setNim(string nim)
    {
        this->nim = nim;
    }

    string getNim()
    {
        return nim;
    }

    void setProdi(string prodi)
    {
        this->prodi = prodi;
    }

    string getProdi()
    {
        return prodi;
    }

    void setFakultas(string fakultas)
    {
        this->fakultas = fakultas;
    }

    string getFakultas()
    {
        return fakultas;
    }

    void displayDaya()
    {
        SivitasAkademik::displayDaya();
        cout << "| NIM              : " << this->getNim() << endl;
        cout << "| Program Studi    : " << this->getProdi() << endl;
        cout << "| Fakultas         : " << this->getFakultas() << endl;
    }

    // Destructor
    ~Mahasiswa() {}
};