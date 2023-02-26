from Human import Human
from SivitasAkademik import SivitasAkademik
from Mahasiswa import Mahasiswa

mhs1 = Mahasiswa("3273201234567890", "Muhammad Fahru Rozi", "Laki-laki",
                 "UPI", "muhammadfahru@upi.edu", "2108927", "Ilmu Komputer", "FPMIPA")
print("+------------------------------------------+")
print("|            Data Mahasiswa 1              |")
print("+------------------------------------------+")
mhs1.display_data()
print("+------------------------------------------+")

mhs2 = Mahasiswa()
mhs2.set_nik("3273201234567893")
mhs2.set_nama("Chelsea Islan")
mhs2.set_gender("Perempuan")
mhs2.set_asal_universitas("ITB")
mhs2.set_email_edu("chelsea@itb.ac.id")
mhs2.set_nim("2108929")
mhs2.set_prodi("Matematika")
mhs2.set_fakultas("FMIPA")
print("+------------------------------------------+")
print("|            Data Mahasiswa 2              |")
print("+------------------------------------------+")
mhs2.display_data()
print("+------------------------------------------+")
