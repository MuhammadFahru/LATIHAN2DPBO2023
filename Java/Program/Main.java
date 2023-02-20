public class Main {
  public static void main(String[] args) {

    // Buat objek dari kelas Mahasiswa dan isi data pada constructor
    Mahasiswa mhs1 = new Mahasiswa("3273201234567890", "Muhammad Fahru Rozi", "Laki-laki", "UPI", "muhammadfahru@upi.edu", "2108927", "Ilmu Komputer", "FPMIPA");
    Mahasiswa mhs2 = new Mahasiswa("3273201234567891", "Muhammad Rapi Arsalan", "Laki-laki", "UPI", "rapiarsalan@upi.edu", "2108928", "Ilmu Komputer", "FPMIPA");
    Mahasiswa mhs3 = new Mahasiswa("3273201234567892", "Muhammad Rayhan Nur", "Laki-laki", "UPI", "reyhan@upi.edu", "2108929", "Ilmu Komputer", "FPMIPA");
    Mahasiswa mhs4 = new Mahasiswa();

    // Set Data
    mhs4.setNik("3273201234567893");
    mhs4.setNama("Chelsea Islan");
    mhs4.setGender("Perempuan");
    mhs4.setAsalUniversitas("ITB");
    mhs4.setEmailEdu("chelsea@itb.ac.id");
    mhs4.setNim("2108929");
    mhs4.setProdi("Matematika");
    mhs4.setFakultas("FMIPA");

    // Tampilkan data mahasiswa
    System.out.println("+------------------------------------------+");
    System.out.println("|             Data Mahasiswa               |");
    System.out.println("+------------------------------------------+");
    mhs1.displayData();
    System.out.println("+------------------------------------------+");
    mhs2.displayData();
    System.out.println("+------------------------------------------+");
    mhs3.displayData();
    System.out.println("+------------------------------------------+");
    mhs4.displayData();
    System.out.println("+------------------------------------------+");
  }
}
