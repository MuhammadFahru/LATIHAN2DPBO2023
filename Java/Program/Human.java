public class Human {
  public String nik;
  public String nama;
  public String gender;

  public Human() {}

  public Human(String nik, String nama, String gender) {
    this.nik    = nik;
    this.nama   = nama;
    this.gender = gender;
  }

  public void setNik(String nik)
  {
    this.nik = nik;
  }

  public String getNik()
  {
    return this.nik;
  }

  public void setNama(String nama)
  {
    this.nama = nama;
  }

  public String getNama()
  {
    return this.nama;
  }

  public void setGender(String gender)
  {
    this.gender = gender;
  }

  public String getGender()
  {
    return this.gender;
  }

  public void displayData() {
    System.out.println("| NIK              : " + this.nik);
    System.out.println("| Nama             : " + this.nama);
    System.out.println("| Jenis Kelamin    : " + this.gender);
  }
}
