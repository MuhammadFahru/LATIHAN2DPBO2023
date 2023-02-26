class Human:

    __nik = ""
    __nama = ""
    __gender = ""

    def __init__(self, nik="", nama="", gender=""):
        self.__nik = nik
        self.__nama = nama
        self.__gender = gender

    def set_nik(self, nik):
        self.__nik = nik

    def get_nik(self):
        return self.__nik

    def set_nama(self, nama):
        self.__nama = nama

    def get_nama(self):
        return self.__nama

    def set_gender(self, gender):
        self.__gender = gender

    def get_gender(self):
        return self.__gender

    def display_data(self):
        print("| NIK              : ", self.__nik)
        print("| Nama             : ", self.__nama)
        print("| Jenis Kelamin    : ", self.__gender)
