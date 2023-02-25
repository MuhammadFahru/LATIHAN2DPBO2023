from Human import Human
from SivitasAkademik import SivitasAkademik
from Mahasiswa import Mahasiswa

mhs = Mahasiswa("3273201234567890", "Muhammad Fahru Rozi", "Laki-laki",
                "UPI", "muhammadfahru@upi.edu", "2108927", "Ilmu Komputer", "FPMIPA")
print("+------------------------------------------+")
print("|            Data Mahasiswa 1              |")
print("+------------------------------------------+")
mhs.display_data()
print("+------------------------------------------+")

mhs.set_nik("3273201234567893")
mhs.set_nama("Chelsea Islan")
mhs.set_gender("Perempuan")
mhs.set_asal_universitas("ITB")
mhs.set_email_edu("chelsea@itb.ac.id")
mhs.set_nim("2108929")
mhs.set_prodi("Matematika")
mhs.set_fakultas("FMIPA")
print("+------------------------------------------+")
print("|            Data Mahasiswa 2              |")
print("+------------------------------------------+")
mhs.display_data()
print("+------------------------------------------+")
