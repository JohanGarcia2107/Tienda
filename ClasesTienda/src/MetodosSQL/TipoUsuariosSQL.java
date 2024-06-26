/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package MetodosSQL;

import Modelos.TipoUsuario;
import Sql.Conexion;
import java.sql.Connection;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.logging.Level;
import java.util.logging.Logger;

/**
 *
 * @author jdavi
 */
public class TipoUsuariosSQL {
    
    public TipoUsuariosSQL(){
    
    }
    
    public boolean InsertarTipoUsuario(TipoUsuario TipoUsuario){
        String Nombre = TipoUsuario.getNombreTipo();
        
        try {
            
            Connection conexion = Conexion.getConection();
            String Insert = "insert into tipousuarios (NombreTipo)"
                    +"values('"+Nombre+"')";
            Statement stnt = conexion.createStatement();
            stnt.executeUpdate(Insert);

            

            stnt.close();
            conexion.close();
            
            return true;
        } catch (SQLException ex) {
            Logger.getLogger(TipoUsuariosSQL.class.getName()).log(Level.SEVERE, null, ex);
            return false;
        }   
    }
    
    public boolean ActualizarTipoUsuario(int Id, String Nombre){
        
        try {
            
            Connection conexion = Conexion.getConection();
            String Update = "update tipousuarios \n set NombreTipo = '"+Nombre+
                    "' \n where IdTipo = "+Id;
            Statement stnt = conexion.createStatement();
            stnt.executeUpdate(Update);

            

            stnt.close();
            conexion.close();
            
            return true;
        } catch (SQLException ex) {
            Logger.getLogger(TipoUsuariosSQL.class.getName()).log(Level.SEVERE, null, ex);
            return false;
        }   
    }
    
}
    


    





