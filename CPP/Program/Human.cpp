#include <bits/stdc++.h>
using namespace std;

class Human
{

private:
    string nik;
    string nama;
    string gender;

public:
    // Constructor
    Human()
    {
        this->nik = "";
        this->nama = "";
        this->gender = "";
    }

    Human(string nik, string nama, string gender)
    {
        this->nik = nik;
        this->nama = nama;
        this->gender = gender;
    }

    // Setter & Getter

    void setNik(string nik)
    {
        this->nik = nik;
    }

    string getNik()
    {
        return nik;
    }

    void setNama(string nama)
    {
        this->nama = nama;
    }

    string getNama()
    {
        return nama;
    }

    void setGender(string gender)
    {
        this->gender = gender;
    }

    string getGender()
    {
        return gender;
    }

    void displayDaya()
    {
        cout << "| NIK              : " << this->getNik() << endl;
        cout << "| Nama             : " << this->getNama() << endl;
        cout << "| Jenis Kelamin    : " << this->getGender() << endl;
    }

    // Destructor
    ~Human() {}
};