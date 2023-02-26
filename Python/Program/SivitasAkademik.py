from Human import Human


class SivitasAkademik(Human):

    __asal_universitas = ""
    __email_edu = ""

    def __init__(self, nik="", nama="", gender="", asal_universitas="", email_edu=""):
        super().__init__(nik, nama, gender)
        self.__asal_universitas = asal_universitas
        self.__email_edu = email_edu

    def set_asal_universitas(self, asal_universitas):
        self.__asal_universitas = asal_universitas

    def get_asal_universitas(self):
        return self.__asal_universitas

    def set_email_edu(self, email_edu):
        self.__email_edu = email_edu

    def get_email_edu(self):
        return self.__email_edu

    def display_data(self):
        super().display_data()
        print("| Asal Universitas : ", self.__asal_universitas)
        print("| Email Edu        : ", self.__email_edu)
