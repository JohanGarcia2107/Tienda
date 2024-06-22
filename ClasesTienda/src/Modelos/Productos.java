
package Modelos;

/**
 *
 * @author jdavi
 */
public class Productos {
    private int IdProducto;
    private String NombreProducto;
    private String DirIMGProd;
    private float Precio;
    private int Stock;
    private int IdCategoria;
    
    public Productos(int IdProducto, String NombreProducto, String DirIMGProd, float Precio, int Stock, int IdCategoria){
        this.IdProducto=IdProducto;
        this.NombreProducto=NombreProducto;
        this.DirIMGProd=DirIMGProd;
        this.Precio=Precio;
        this.Stock=Stock;
        this.IdCategoria=IdCategoria;
    }

    public int getIdProducto() {
        return IdProducto;
    }

    public void setIdProducto(int IdProducto) {
        this.IdProducto = IdProducto;
    }

    public String getNombreProducto() {
        return NombreProducto;
    }

    public void setNombreProducto(String NombreProducto) {
        this.NombreProducto = NombreProducto;
    }
    
    public String getDirIMGProd() {
        return DirIMGProd;
    }

    public void setDirIMGProd(String DirIMGProd) {
        this.DirIMGProd = DirIMGProd;
    }

    public float getPrecio() {
        return Precio;
    }

    public void setPrecio(float Precio) {
        this.Precio = Precio;
    }

    public int getStock() {
        return Stock;
    }

    public void setStock(int Stock) {
        this.Stock = Stock;
    }
    
    public int getIdCategoria() {
        return IdCategoria;
    }

    public void setIdCategoria(int IdCategoria) {
        this.IdCategoria = IdCategoria;
    }
    
}
