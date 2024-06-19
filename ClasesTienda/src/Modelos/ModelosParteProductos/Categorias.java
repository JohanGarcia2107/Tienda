
package Modelos.ModelosParteProductos;

/**
 *
 * @author jdavi
 */
public class Categorias {
    private int IdCategoria;
    private String NombreCategoria;
    
    public Categorias(int IdCategoria, String NombreCategoria){
        this.IdCategoria=IdCategoria;
        this.NombreCategoria=NombreCategoria;
    }
    
    public String VerCategorias (int IdCategoria){
        String Id = Integer.toString(getIdCategoria());
        String Nombre = getNombreCategoria();
        return "El valor del id de la categoria es "+Id+"y su nombre es "+Nombre ;
    }

    public int getIdCategoria() {
        return IdCategoria;
    }

    public void setIdCategoria(int IdCategoria) {
        this.IdCategoria = IdCategoria;
    }

    public String getNombreCategoria() {
        return NombreCategoria;
    }

    public void setNombreCategoria(String NombreCategoria) {
        this.NombreCategoria = NombreCategoria;
    }
    
    public boolean ChangeNombreCategoria(String NombreCategoria) {
        
         String AntNombreCategoria=getNombreCategoria();
         String NewNombreCategoria = NombreCategoria;
         this.NombreCategoria = NombreCategoria;
         
         if(NewNombreCategoria==AntNombreCategoria){
               return false;
         }else{
               return true;
         }
    }
}
