
package Modelos;

/**
 *
 * @author jdavi
 */
public class Factura {
    private int IdFactura;
    private String Direccion;
    private String MedioDePago;
    private String Fecha;
    private float TotalAPagar;
    private float IVA;
    private float PagoFinal;
    private int IdUsuario;
    
    public Factura(int IdFactura, String Direccion, String MedioDePago, String Fecha, float TotalAPagar, float IVA, float PagoFinal, int IdUsuario){
        this.IdFactura=IdFactura;
        this.Direccion=Direccion;
        this.MedioDePago=MedioDePago;
        this.Fecha=Fecha;
        this.TotalAPagar=TotalAPagar;
        this.IVA=IVA;
        this.PagoFinal=PagoFinal;
        this.IdUsuario=IdUsuario;
    }
    
    public Factura(int IdFactura, String Direccion, String MedioDePago, String Fecha, int IdUsuario){
        this.IdFactura=IdFactura;
        this.Direccion=Direccion;
        this.MedioDePago=MedioDePago;
        this.Fecha=Fecha;
        this.IdUsuario=IdUsuario;
    }
    
    public String VerFactura (int IdFactura){
    String Id = Integer.toString(getIdFactura());
    String Dir = getDireccion();
    String MdP = getMedioDePago();
    String Date = getFecha();
    String TP = Float.toString(getTotalAPagar());
    String V = Float.toString(getIVA());
    String PF = Float.toString(getPagoFinal());
    String IdU = Integer.toString(getIdUsuario());
        return "El valor del id de la factura es "+Id+", la direccion es "+Dir+", el medio de pago es "+MdP+", su fecha "+Date+", su Total "+TP+", el iva es igual a "+V+" El pago final es "+PF+"y el Id Usuario es "+IdU ;
    }

    public int getIdFactura() {
        return IdFactura;
    }

    public void setIdFactura(int IdFactura) {
        this.IdFactura = IdFactura;
    }

    public String getDireccion() {
        return Direccion;
    }

    public void setDireccion(String Direccion) {
        this.Direccion = Direccion;
    }

    public String getMedioDePago() {
        return MedioDePago;
    }

    public void setMedioDePago(String MedioDePago) {
        this.MedioDePago = MedioDePago;
    }

    public String getFecha() {
        return Fecha;
    }

    public void setFecha(String Fecha) {
        this.Fecha = Fecha;
    }

    public float getTotalAPagar() {
        return TotalAPagar;
    }

    public void setTotalAPagar(float TotalAPagar) {
        this.TotalAPagar = TotalAPagar;
    }

    public float getIVA() {
        return IVA;
    }

    public void setIVA(float IVA) {
        this.IVA = IVA;
    }

    public float getPagoFinal() {
        return PagoFinal;
    }

    public void setPagoFinal(float PagoFinal) {
        this.PagoFinal = PagoFinal;
    }

    public int getIdUsuario() {
        return IdUsuario;
    }

    public void setIdUsuario(int IdUsuario) {
        this.IdUsuario = IdUsuario;
    }
}
