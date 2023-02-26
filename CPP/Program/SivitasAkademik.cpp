using namespace std;
#include <bits/stdc++.h>
#include "Human.cpp"
class SivitasAkademik : public Human
{
private:
    string asal_universitas;
    string email_edu;

public:
    // Constructor
    SivitasAkademik()
    {
        this->asal_universitas = "";
        this->email_edu = "";
    }

    SivitasAkademik(string nik, string nama, string gender, string asal_universitas, string email_edu) : Human(nik, nama, gender)
    {
        this->asal_universitas = asal_universitas;
        this->email_edu = email_edu;
    }

    // Setter & Getter

    void setAsalUniversitas(string asal_universitas)
    {
        this->asal_universitas = asal_universitas;
    }

    string getAsalUniversitas()
    {
        return asal_universitas;
    }

    void setEmailEdu(string email_edu)
    {
        this->email_edu = email_edu;
    }

    string getEmailEdu()
    {
        return email_edu;
    }

    void displayDaya()
    {
        Human::displayDaya();
        cout << "| Asal Universitas : " << this->getAsalUniversitas() << endl;
        cout << "| Email Edu        : " << this->getEmailEdu() << endl;
    }

    // Destructor
    ~SivitasAkademik() {}
};