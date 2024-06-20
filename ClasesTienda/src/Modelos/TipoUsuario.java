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
}

