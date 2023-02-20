public class Mahasiswa extends SivitasAkademik {
  public String nim;
  public String nama;
  public String gender;
  public String prodi;
  public String fakultas;

  public Mahasiswa() {}

  public Mahasiswa(String nik, String nama, String gender, String asal_universitas, String email_edu, String nim, String prodi, String fakultas) {
    super(nik, nama, gender, asal_universitas, email_edu);
    this.nim      = nim;
    this.prodi    = prodi;
    this.fakultas = fakultas;
  }

  public void setNim(String nim)
  {
    this.nim = nim;
  }

  public String getNim()
  {
    return this.nim;
  }

  public void setProdi(String prodi)
  {
    this.prodi = prodi;
  }

  public String getProdi()
  {
    return this.prodi;
  }

  public void setFakultas(String fakultas)
  {
    this.fakultas = fakultas;
  }

  public String getFakultas()
  {
    return this.fakultas;
  }

  public void displayData() {
    super.displayData();
    System.out.println("| NIM              : " + this.nim);
    System.out.println("| Program Studi    : " + this.prodi);
    System.out.println("| Fakultas         : " + this.fakultas);
  }
}
