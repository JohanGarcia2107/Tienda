/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package Modelos;

/**
 *
 * @author jdavi
 */
public class Administrador extends Usuarios {
    
    public Administrador(String NombreUsuario, String EmailUsuario, String TelefonoUsuario, String ContraseñaUsuario, int IdTipoUsuario){
        this.NombreUsuario=NombreUsuario;
        this.EmailUsuario=EmailUsuario;
        this.TelefonoUsuario=TelefonoUsuario;
        this.ContraseñaUsuario=ContraseñaUsuario;
        this.IdTipoUsuario=IdTipoUsuario;
    }
    
}
