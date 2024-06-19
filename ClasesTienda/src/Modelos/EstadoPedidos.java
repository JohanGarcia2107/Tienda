
package Modelos;

/**
 *
 * @author jdavi
 */
public class EstadoPedidos {
    private int IdEstado;
    private String NombreEstado;
    
    public EstadoPedidos(int IdEstado, String NombreEstado){
        this.IdEstado=IdEstado;
        this.NombreEstado=NombreEstado;
    }
    
    public String VerEstadoPedidos (int IdEstado){
        String Id = Integer.toString(getIdEstado());
        String Nombre = getNombreEstado();
        return "El valor del id del Estado es "+Id+"y su nombre es "+Nombre ;
    }

    public int getIdEstado() {
        return IdEstado;
    }

    public void setIdEstado(int IdEstado) {
        this.IdEstado = IdEstado;
    }

    public String getNombreEstado() {
        return NombreEstado;
    }

    public void setNombreEstado(String NombreEstado) {
        this.NombreEstado = NombreEstado;
    }
    
    public boolean ChangeNombreEstado(String NombreEstado) {
        
         String AntNombreEstado=getNombreEstado();
         String NewNombreEstado = NombreEstado;
         this.NombreEstado = NombreEstado;
         
         if(NewNombreEstado==AntNombreEstado){
               return false;
         }else{
               return true;
         }
    }
}
