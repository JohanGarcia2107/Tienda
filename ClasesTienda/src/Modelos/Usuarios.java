package Modelos;




/**
 *
 * @author jdavi
 */
public class Usuarios {
    private int IdUsuario;
    private String NombreUsuario;
    private String EmailUsuario;
    private String TelefonoUsuario;
    private String ContraseñaUsuario;
    private int IdTipoUsuario;
    
    public Usuarios(int IdUsuario, String NombreUsuario, String EmailUsuario, String TelefonoUsuario, String ContraseñaUsuario, int IdTipoUsuario){
        this.IdUsuario=IdUsuario;
        this.NombreUsuario=NombreUsuario;
        this.EmailUsuario=EmailUsuario;
        this.TelefonoUsuario=TelefonoUsuario;
        this.ContraseñaUsuario=ContraseñaUsuario;
        this.IdTipoUsuario=IdTipoUsuario;
    }
    
    public String VerUsuario (int IdUsuario){
    String Id = Integer.toString(getIdUsuario());
    String Nombre = getNombreUsuario();
    String Email = getEmailUsuario();
    String Telefono = getTelefonoUsuario();
    String Contraseña = getContraseñaUsuario();
    String IdTipo = Integer.toString(getIdTipoUsuario());
        return "El valor del id del usuario es "+Id+", su nombre es "+Nombre+", su correo es "+Email+", su telefono es "+Telefono+", su contraseña es "+Contraseña+", su IdTipo es " +IdTipo ;
    }
    
    public boolean EliminarUsuario(int IdUsuario){
   
        String vacio=null;
        
        setIdUsuario(0);
        setNombreUsuario(vacio);
        setEmailUsuario(vacio);
        setTelefonoUsuario(vacio);
        setContraseñaUsuario(vacio);
        setIdTipoUsuario(0);
        
        return true;
    }

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
    
    public boolean ChangeEmailUsuario(String Email) {
        
         String Mail=getEmailUsuario();
         String NewMail = Email;
         this.ContraseñaUsuario = Email;
         
         if(NewMail==Mail){
               return false;
         }else{
               return true;
         }
    }

    public String getTelefonoUsuario() {
        return TelefonoUsuario;
    }

    public void setTelefonoUsuario(String Telefono) {
        this.TelefonoUsuario = Telefono;
    }
    
    public boolean ChangeTelefonoUsuario(String Telefono) {
        
         String Tel=getTelefonoUsuario();
         String NewTel = Telefono;
         this.TelefonoUsuario = Telefono;
         
         if(NewTel==Tel){
               return false;
         }else{
               return true;
         }
    }

    public String getContraseñaUsuario() {
        return ContraseñaUsuario;
    }

    public void setContraseñaUsuario(String Contraseña) {
        this.ContraseñaUsuario = Contraseña;
    }
    
     public boolean ChangeContraseñaUsuario(String Contraseña) {
        
         String Pass=getContraseñaUsuario();
         String NewPass = Contraseña;
         this.ContraseñaUsuario = Contraseña;
         
         if(getContraseñaUsuario()==Pass){
               return false;
         }else{
               return true;
         }
    }

    public int getIdTipoUsuario() {
        return IdTipoUsuario;
    }

    public void setIdTipoUsuario(int IdTipo) {
        this.IdTipoUsuario = IdTipo;
    }
    
}


