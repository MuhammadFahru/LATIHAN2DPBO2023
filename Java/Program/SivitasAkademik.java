public class SivitasAkademik extends Human {
  public String asal_universitas;
  public String email_edu;

  public SivitasAkademik() {}

  public SivitasAkademik(String nik, String nama, String gender, String asal_universitas, String email_edu) {
    super(nik, nama, gender);
    this.asal_universitas = asal_universitas;
    this.email_edu        = email_edu;
  }

  public void setAsalUniversitas(String asal_universitas)
  {
    this.asal_universitas = asal_universitas;
  }

  public String getAsalUniversitas()
  {
    return this.asal_universitas;
  }

  public void setEmailEdu(String email_edu)
  {
    this.email_edu = email_edu;
  }

  public String getEmailEdu()
  {
    return this.email_edu;
  }

  public void displayData() {
    super.displayData();
    System.out.println("| Asal Universitas : " + this.asal_universitas);
    System.out.println("| Email Edu        : " + this.email_edu);
  }
}
