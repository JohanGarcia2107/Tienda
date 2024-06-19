
package Modelos;

/**
 *
 * @author jdavi
 */
public class Pedidos {
    private int IdPedido;
    private int IdFactura;
    private int IdUsuario;
    private float MontoAPagar;
    private String Fecha;
    private int IdEstado;
    
    public Pedidos(int IdPedido, int IdFactura, int IdUsuario, String Fecha ){
        this.IdPedido=IdPedido;
        this.IdFactura=IdUsuario;
        this.IdUsuario=IdUsuario;
        this.Fecha=Fecha;
    }
    
    public Pedidos(int IdPedido, int IdFactura, int IdUsuario, float MontoAPagar, String Fecha, int IdEstado ){
        this.IdPedido=IdPedido;
        this.IdFactura=IdUsuario;
        this.IdUsuario=IdUsuario;
        this.MontoAPagar=MontoAPagar;
        this.Fecha=Fecha;
        this.IdEstado=IdEstado;
    }
    
    public String VerPedido (int IdFactura){
    String IdP = Integer.toString(getIdPedido());
    String IdU = Integer.toString(getIdUsuario());
    String IdF = Integer.toString(getIdFactura());
    String MP = Float.toString(getMontoAPagar());
    String Date = getFecha();
    String IdE = Integer.toString(getIdEstado());
        return "El valor del id del pedido es "+IdP+", el Id de usuario es "+IdU+", El id de Factura es "+IdF+", El monto a pagar es "+MP+", su Fecha de entrega es "+Date+"y el Id Usuario es "+IdU ;
    }

    public int getIdPedido() {
        return IdPedido;
    }

    public void setIdPedido(int IdPedido) {
        this.IdPedido = IdPedido;
    }

    public int getIdFactura() {
        return IdFactura;
    }

    public void setIdFactura(int IdFactura) {
        this.IdFactura = IdFactura;
    }

    public int getIdUsuario() {
        return IdUsuario;
    }

    public void setIdUsuario(int IdUsuario) {
        this.IdUsuario = IdUsuario;
    }

    public float getMontoAPagar() {
        return MontoAPagar;
    }

    public void setMontoAPagar(float MontoAPagar) {
        this.MontoAPagar = MontoAPagar;
    }

    public String getFecha() {
        return Fecha;
    }

    public void setFecha(String Fecha) {
        this.Fecha = Fecha;
    }

    public int getIdEstado() {
        return IdEstado;
    }

    public void setIdEstado(int IdEstado) {
        this.IdEstado = IdEstado;
    }
}
