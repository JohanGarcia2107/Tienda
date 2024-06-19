
package Modelos.ModelosParteProductos;

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

    public String VerProducto (int IdProducto){
    String Id = Integer.toString(getIdProducto());
    String Nombre = getNombreProducto();
    String Img = getDirIMGProd();
    String Precio1 = Float.toString(getPrecio());
    String Stock1 = Integer.toString(getStock());
    String IdCategoria1 = Integer.toString(getIdCategoria());
        return "El valor del id del producto es "+Id+", su nombre es "+Nombre+", su Direccion de imagen "+Img+", su precio "+Precio1+", su Stock "+Stock1+", su IdTCategoria " +IdCategoria1 ;
    }
    
    public boolean EliminarProducto(int IdProducto){
   
        String vacio=null;
        
        setIdProducto(0);
        setNombreProducto(vacio);
        setDirIMGProd(vacio);
        setPrecio(0);
        setStock(0);
        setIdCategoria(0);
        
        return true;
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
    
    public boolean ChangeNombreProducto(String NombreProducto) {
        
         String AntNombreProducto=getNombreProducto();
         String NewNombreProducto = NombreProducto;
         this.NombreProducto = NombreProducto;
         
         if(NewNombreProducto==AntNombreProducto){
               return false;
         }else{
               return true;
         }
    }

    public String getDirIMGProd() {
        return DirIMGProd;
    }

    public void setDirIMGProd(String DirIMGProd) {
        this.DirIMGProd = DirIMGProd;
    }

    public boolean ChangeDirIMGProd(String DirIMGProd) {
        
         String AntDirIMGProd=getDirIMGProd();
         String NewDirIMGProd = DirIMGProd;
         this.DirIMGProd = DirIMGProd;
         
         if(NewDirIMGProd==AntDirIMGProd){
               return false;
         }else{
               return true;
         }
    }
    
    public float getPrecio() {
        return Precio;
    }

    public void setPrecio(float Precio) {
        this.Precio = Precio;
    }

    public boolean ChangePrecio(float Precio) {
        
         float AntPrecio=getPrecio();
         float NewPrecio = Precio;
         this.Precio = Precio;
         
         if(NewPrecio==AntPrecio){
               return false;
         }else{
               return true;
         }
    }
    
    public int getStock() {
        return Stock;
    }

    public void setStock(int Stock) {
        this.Stock = Stock;
    }

    public boolean AgregarStock(int Stock) {
        
         int AntStock=getStock();
         this.Stock = (getStock() + Stock);
         int NewStock = getStock();
         
         
         if(NewStock==AntStock){
               return false;
         }else{
               return true;
         }
    }
    
    public int getIdCategoria() {
        return IdCategoria;
    }

    public void setIdCategoria(int IdCategoria) {
        this.IdCategoria = IdCategoria;
    }
    
    public boolean CambiarIdCategoria(int IdCategoria) {
        
         int AntIdCategoria=getIdCategoria();
         int NewStock = IdCategoria;
         this.IdCategoria = IdCategoria;
         
         
         
         if(NewStock==AntIdCategoria){
               return false;
         }else{
               return true;
         }
    }
}
