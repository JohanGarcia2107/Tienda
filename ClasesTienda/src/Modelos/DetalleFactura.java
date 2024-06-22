
package Modelos;

/**
 *
 * @author jdavi
 */
public class DetalleFactura {
    private int IdProducto;
    private float Precio;
    private int Cantidad;
    private float PrecioTotal;
    private int IdFactura;
    
    public DetalleFactura (int IdProducto, float Precio, int Cantidad, float PrecioTotal, int IdFactura){
        this.IdProducto=IdProducto;
        this.Precio=Precio;
        this.Cantidad=Cantidad;
        this.PrecioTotal=PrecioTotal;
        this.IdFactura=IdFactura;
    }
    
    public DetalleFactura (int IdProducto, int Cantidad, int IdFactura){
        this.IdProducto=IdProducto;
        this.Cantidad=Cantidad;
        this.IdFactura=IdFactura;
    }

    public int getIdProducto() {
        return IdProducto;
    }

    public void setIdProducto(int IdProducto) {
        this.IdProducto = IdProducto;
    }

    public float getPrecio() {
        return Precio;
    }

    public void setPrecio(float Precio) {
        this.Precio = Precio;
    }

    public int getCantidad() {
        return Cantidad;
    }

    public void setCantidad(int Cantidad) {
        this.Cantidad = Cantidad;
    }

    public float getPrecioTotal() {
        return PrecioTotal;
    }

    public void setPrecioTotal(float PrecioTotal) {
        this.PrecioTotal = PrecioTotal;
    }

    public int getIdFactura() {
        return IdFactura;
    }

    public void setIdFactura(int IdFactura) {
        this.IdFactura = IdFactura;
    }
    
}
