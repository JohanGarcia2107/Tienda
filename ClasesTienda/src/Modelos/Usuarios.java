package Modelos;




/**
 *
 * @author jdavi
 */
public class Usuarios {
    protected int IdUsuario;
    protected String NombreUsuario;
    protected String EmailUsuario;
    protected String TelefonoUsuario;
    protected String ContraseñaUsuario;
    protected int IdTipoUsuario;

    public int getIdUsuario() {
        return IdUsuario;
    }

    public void setIdUsuario(int IdUsuario) {
        this.IdUsuario = IdUsuario;
    }

    public String getNombreUsuario() {
        return NombreUsuario;
    }

    public void setNombreUsuario(String Nombre) {
        this.NombreUsuario = Nombre;
    }

    public String getEmailUsuario() {
        return EmailUsuario;
    }

    public void setEmailUsuario(String Email) {
        this.EmailUsuario = Email;
    }
    

    public String getTelefonoUsuario() {
        return TelefonoUsuario;
    }

    public void setTelefonoUsuario(String Telefono) {
        this.TelefonoUsuario = Telefono;
    }
    

    public String getContraseñaUsuario() {
        return ContraseñaUsuario;
    }

    public void setContraseñaUsuario(String Contraseña) {
        this.ContraseñaUsuario = Contraseña;
    }

    public int getIdTipoUsuario() {
        return IdTipoUsuario;
    }

    public void setIdTipoUsuario(int IdTipo) {
        this.IdTipoUsuario = IdTipo;
    }
    
}


