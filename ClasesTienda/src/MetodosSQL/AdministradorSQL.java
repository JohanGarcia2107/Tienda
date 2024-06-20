/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package MetodosSQL;

import ClasesParaVistas.VistaUsuarios;
import Modelos.Administrador;
import Sql.Conexion;
import java.sql.Connection;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;
import java.util.logging.Level;
import java.util.logging.Logger;

/**
 *
 * @author jdavi
 */
public class AdministradorSQL {
    
    public AdministradorSQL(){
    
    }
    
    public boolean InsertarUsuario(Administrador Administrador){
       
        String NombreUsuario = Administrador.getNombreUsuario();
        String EmailUsuario = Administrador.getEmailUsuario();
        String TelefonoUsuario = Administrador.getTelefonoUsuario();
        String ContraseñaUsuario = Administrador.getContraseñaUsuario();
        int IdTipoUsuario = Administrador.getIdTipoUsuario();
        
        try {
            
            Connection conexion = Conexion.getConection();
            String Insert = "insert into usuarios (Nombre,Email,Telefono,Contraseña,IdTipo) "
                    + "values('"+NombreUsuario+"','"+EmailUsuario+"','"+TelefonoUsuario+"','"+ContraseñaUsuario+"','"+IdTipoUsuario+"')";
            Statement stnt = conexion.createStatement();
            stnt.executeUpdate(Insert);

            

            stnt.close();
            conexion.close();
            
            return true;
        } catch (SQLException ex) {
            Logger.getLogger(AdministradorSQL.class.getName()).log(Level.SEVERE, null, ex);
            return false;
        }   
    }
    
    public boolean InicioDeSesion(String Usuario, String Contraseña){
        
        try {
            
            Connection conexion = Conexion.getConection();
            String Sesion = "select * from usuarios \n where (Nombre = '"+ Usuario+"') and (Contraseña ='"+Contraseña+"')";
            Statement stnt = conexion.createStatement();
            ResultSet rs = stnt.executeQuery(Sesion);
            int i=0;
            
            while(rs.next())
            {
                i=i+1;
            }
            
            rs.close();
            stnt.close();
            conexion.close();
            System.out.println(rs);
            
            if(i>0){
                return true;
            }else{
                return false;
            }
            
        } catch (SQLException ex) {
            Logger.getLogger(AdministradorSQL.class.getName()).log(Level.SEVERE, null, ex);
            return false;
        }   
    }
    
    public boolean EliminarUsuario(int Id){
        
        try {
            
            Connection conexion = Conexion.getConection();
            String Delete = "delete \n from usuarios \n where IdUsuario = "+ Id;
            Statement stnt = conexion.createStatement();
            stnt.executeUpdate(Delete);

            

            stnt.close();
            conexion.close();
            
            return true;
        } catch (SQLException ex) {
            Logger.getLogger(AdministradorSQL.class.getName()).log(Level.SEVERE, null, ex);
            return false;
        }   
    }
    
    public boolean ModificarNombreUsuario(int IdUsuario, String NombreUsuario){
        
        try {
            
            Connection conexion = Conexion.getConection();
            String Update = "update tipousuarios \n set Nombre = '"+NombreUsuario+
                    "' \n where IdUsuario = "+IdUsuario ;
            Statement stnt = conexion.createStatement();
            stnt.executeUpdate(Update);

            

            stnt.close();
            conexion.close();
            
            return true;
        } catch (SQLException ex) {
            Logger.getLogger(AdministradorSQL.class.getName()).log(Level.SEVERE, null, ex);
            return false;
        }   
    }
    
    public boolean ModificarEmailUsuario(int IdUsuario, String EmailUsuario){
        
        try {
            
            Connection conexion = Conexion.getConection();
            String Update = "update tipousuarios \n set Email = '"+EmailUsuario+
                    "' \n where IdUsuario = "+IdUsuario ;
            Statement stnt = conexion.createStatement();
            stnt.executeUpdate(Update);

            

            stnt.close();
            conexion.close();
            
            return true;
        } catch (SQLException ex) {
            Logger.getLogger(AdministradorSQL.class.getName()).log(Level.SEVERE, null, ex);
            return false;
        }   
    }
    
    public boolean ModificarTelefonoUsuario(int IdUsuario, String TelefonoUsuario){
                
        try {
            
            Connection conexion = Conexion.getConection();
            String Update = "update tipousuarios \n set Telefono = '"+TelefonoUsuario+
                    "' \n where IdUsuario = "+IdUsuario ;
            Statement stnt = conexion.createStatement();
            stnt.executeUpdate(Update);

            

            stnt.close();
            conexion.close();
            
            return true;
        } catch (SQLException ex) {
            Logger.getLogger(AdministradorSQL.class.getName()).log(Level.SEVERE, null, ex);
            return false;
        }   
    }
    
    public boolean ModificarContraseña(int IdUsuario, String ContraseñaUsuario){
        
        try {
            
            Connection conexion = Conexion.getConection();
            String Update = "update tipousuarios \n set Contraseña = '"+ContraseñaUsuario+
                    "' \n where IdUsuario = "+IdUsuario ;
            Statement stnt = conexion.createStatement();
            stnt.executeUpdate(Update);

            

            stnt.close();
            conexion.close();
            
            return true;
        } catch (SQLException ex) {
            Logger.getLogger(AdministradorSQL.class.getName()).log(Level.SEVERE, null, ex);
            return false;
        }   
    }
    

    
    
    
}
