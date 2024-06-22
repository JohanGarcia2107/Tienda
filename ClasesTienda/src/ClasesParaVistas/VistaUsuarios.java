/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package ClasesParaVistas;

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
public class VistaUsuarios {
    private int IdUsuario;
    private String NombreUsuario;
    private String EmailUsuario;
    private String TelefonoUsuario;
    private String TipoUsuario;
    private String NombreActividad;

    public VistaUsuarios (int IdUsuario, String NombreUsuario, String EmailUsuario, String TelefonoUsuario, String TipoUsuario, String NombreActividad) {
        this.IdUsuario = IdUsuario;
        this.NombreUsuario = NombreUsuario;
        this.EmailUsuario = EmailUsuario;
        this.TelefonoUsuario = TelefonoUsuario;
        this.TipoUsuario = TipoUsuario;
        this.NombreActividad = NombreActividad;
    }
    
    public VistaUsuarios () {
       
    }
    
    public List<VistaUsuarios> ListarUsuarios (){
        
        try {
            
            Connection conexion = Conexion.getConection();
            Statement stnt = conexion.createStatement();
            ResultSet rs;
            String Consulta = "select a.IdUsuario, a.Nombre, a.Email, a.Telefono, b.NombreTipo, c.NombreCtividad from Usuarios a"
                    + "\n left join TipoUsuarios b on a.IdTipo =  b.IdTipo "
                    + "\n left join Actividad c on c.IdActividad =  a.IdActividad ";
            stnt.executeQuery(Consulta);
            rs = stnt.executeQuery(Consulta);
            
            List<VistaUsuarios> ListaUsers = new ArrayList<>();
            
            while (rs.next()){
                int idUsuario = rs.getInt("IdUsuario");
                String NombreUsuario = rs.getString("Nombre");
                String EmailUsuario = rs.getString("Email");
                String TelefonoUsuario = rs.getString("Telefono");
                String TipoUsuario =rs.getString("NombreTipo");
                String NombreActividad =rs.getString("NombreCtividad");
                
                
                
                VistaUsuarios VistaUsuarios = new VistaUsuarios(idUsuario, NombreUsuario,EmailUsuario,TelefonoUsuario,TipoUsuario,NombreActividad);
                
                ListaUsers.add(VistaUsuarios);

            }
            
            rs.close();
            stnt.close();
            conexion.close();
            
            return ListaUsers;
            
        } catch (SQLException ex) {
            
            Logger.getLogger(VistaUsuarios.class.getName()).log(Level.SEVERE, null, ex);
            return null;
        }   
    }
    
    public List<VistaUsuarios> ListarUsuarios (String Nombre){
        
        try {
            
            Connection conexion = Conexion.getConection();
            Statement stnt = conexion.createStatement();
            ResultSet rs;
            String Consulta = "select a.IdUsuario, a.Nombre, a.Email, a.Telefono, b.NombreTipo, c.NombreCtividad from Usuarios a"
                    + "\n left join TipoUsuarios b on a.IdTipo =  b.IdTipo "
                    + "\n left join Actividad c on c.IdActividad =  a.IdActividad "
                    + "\n where a.Nombre like  '"+Nombre+"%'";
            stnt.executeQuery(Consulta);
            rs = stnt.executeQuery(Consulta);
            
            List<VistaUsuarios> ListaUsers = new ArrayList<>();
            
            while (rs.next()){
                int idUsuario = rs.getInt("IdUsuario");
                String NombreUsuario = rs.getString("Nombre");
                String EmailUsuario = rs.getString("Email");
                String TelefonoUsuario = rs.getString("Telefono");
                String TipoUsuario =rs.getString("NombreTipo");
                String NombreActividad =rs.getString("NombreCtividad");
                
                
                
                VistaUsuarios VistaUsuarios = new VistaUsuarios(idUsuario, NombreUsuario,EmailUsuario,TelefonoUsuario,TipoUsuario,NombreActividad);
                
                ListaUsers.add(VistaUsuarios);

            }
            
            rs.close();
            stnt.close();
            conexion.close();
            
            return ListaUsers;
            
        } catch (SQLException ex) {
            
            Logger.getLogger(VistaUsuarios.class.getName()).log(Level.SEVERE, null, ex);
            return null;
        }   
    }
    
    public List<VistaUsuarios> ListarUsuarios (int _Id){
        
        try {
            
            Connection conexion = Conexion.getConection();
            Statement stnt = conexion.createStatement();
            ResultSet rs;
            String Consulta = "select a.IdUsuario, a.Nombre, a.Email, a.Telefono, b.NombreTipo, c.NombreCtividad from Usuarios a"
                    + "\n left join TipoUsuarios b on a.IdTipo =  b.IdTipo "
                    + "\n left join Actividad c on c.IdActividad =  a.IdActividad "
                    + "\n where a.IdUsuario =  "+_Id;
            stnt.executeQuery(Consulta);
            rs = stnt.executeQuery(Consulta);
            
            List<VistaUsuarios> ListaUsers = new ArrayList<>();
            
            while (rs.next()){
                int idUsuario = rs.getInt("IdUsuario");
                String NombreUsuario = rs.getString("Nombre");
                String EmailUsuario = rs.getString("Email");
                String TelefonoUsuario = rs.getString("Telefono");
                String TipoUsuario =rs.getString("NombreTipo");
                String NombreActividad =rs.getString("NombreCtividad");
                
                
                
                VistaUsuarios VistaUsuarios = new VistaUsuarios(idUsuario, NombreUsuario,EmailUsuario,TelefonoUsuario,TipoUsuario,NombreActividad);
                
                ListaUsers.add(VistaUsuarios);

            }
            
            rs.close();
            stnt.close();
            conexion.close();
            
            return ListaUsers;
            
        } catch (SQLException ex) {
            
            Logger.getLogger(VistaUsuarios.class.getName()).log(Level.SEVERE, null, ex);
            return null;
        }   
    }
    
    public VistaUsuarios MostrarUsuarios (int _Id ){
       
        try {
            
            
            Connection conexion = Conexion.getConection();
            
            
            Statement stnt = conexion.createStatement();
            ResultSet rs;
            String Consulta = "select a.IdUsuario, a.Nombre, a.Email, a.Telefono, b.NombreTipo, c.NombreCtividad from Usuarios a"
                    + "\n left join TipoUsuarios b on a.IdTipo =  b.IdTipo "
                    + "\n left join Actividad c on c.IdActividad =  a.IdActividad "
                    + "\n where a.IdUsuario =  " + _Id;
            stnt.executeQuery(Consulta);
            rs = stnt.executeQuery(Consulta);
            
            VistaUsuarios VistaUsuarios = null ;
            
            while (rs.next()){
                int idUsuario = rs.getInt("IdUsuario");
                String NombreUsuario = rs.getString("Nombre");
                String EmailUsuario = rs.getString("Email");
                String TelefonoUsuario = rs.getString("Telefono");
                String TipoUsuario =rs.getString("NombreTipo");
                String NombreActividad =rs.getString("NombreCtividad");
                
                VistaUsuarios = new VistaUsuarios(idUsuario, NombreUsuario,EmailUsuario,TelefonoUsuario,TipoUsuario,NombreActividad);
                

            }
            
            rs.close();
            stnt.close();
            conexion.close();
            
            return VistaUsuarios;
            
        } catch (SQLException ex) {
            
            Logger.getLogger(VistaUsuarios.class.getName()).log(Level.SEVERE, null, ex);
            return null;
        }   
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

    public void setNombreUsuario(String NombreUsuario) {
        this.NombreUsuario = NombreUsuario;
    }

    public String getEmailUsuario() {
        return EmailUsuario;
    }

    public void setEmailUsuario(String EmailUsuario) {
        this.EmailUsuario = EmailUsuario;
    }

    public String getTelefonoUsuario() {
        return TelefonoUsuario;
    }

    public void setTelefonoUsuario(String TelefonoUsuario) {
        this.TelefonoUsuario = TelefonoUsuario;
    }

    public String getTipoUsuario() {
        return TipoUsuario;
    }

    public void setTipoUsuario(String TipoUsuario) {
        this.TipoUsuario = TipoUsuario;
    }

    public String getNombreActividad() {
        return NombreActividad;
    }

    public void setNombreActividad(String NombreActividad) {
        this.NombreActividad = NombreActividad;
    }
    
    

    
}
