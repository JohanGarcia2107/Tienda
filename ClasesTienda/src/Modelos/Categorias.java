
package Modelos;

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
    
}
