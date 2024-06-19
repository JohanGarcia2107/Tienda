package Modelos;




/**
 *
 * @author jdavi
 */
public class TipoUsuario {
    private int IdTipo;
    private String NombreTipo;
    
    public TipoUsuario(int IdTipo, String NombreTipo){
        this.IdTipo=IdTipo;
        this.NombreTipo=NombreTipo;
    }
    
    public String VerTipoUsuario (int IdTipo){
        String Id = Integer.toString(getIdTipo());
        String Nombre = getNombreTipo();
        return "El valor del id del tipo user es "+Id+"y su nombre es "+Nombre ;
    }

    public int getIdTipo() {
        return IdTipo;
    }

    public void setIdTipo(int IdTipo) {
        this.IdTipo = IdTipo;
    }

    public String getNombreTipo() {
        return NombreTipo;
    }

    public void setNombreTipo(String NombreTipo) {
        this.NombreTipo = NombreTipo;
    }
    
    public boolean ChangeNombreTipo(String NombreTipo) {
        
         String AntNombreTipo=getNombreTipo();
         String NewNombreTipo = NombreTipo;
         this.NombreTipo = NombreTipo;
         
         if(NewNombreTipo==AntNombreTipo){
               return false;
         }else{
               return true;
         }
    }
}

