/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package MetodosSQL;

import Modelos.TipoUsuario;
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
    
    public boolean EliminarTipoUsuario(int _Id){
        int Id = _Id;
        
        try {
            
            Connection conexion = Conexion.getConection();
            String Delete = "delete \n from tipousuarios \n where IdTipo = "+Id;
            Statement stnt = conexion.createStatement();
            stnt.executeUpdate(Delete);

            

            stnt.close();
            conexion.close();
            
            return true;
        } catch (SQLException ex) {
            Logger.getLogger(TipoUsuariosSQL.class.getName()).log(Level.SEVERE, null, ex);
            return false;
        }   
    }
    
    public List<TipoUsuario> ListarTipoUsuario (){
        
        try {
            
            Connection conexion = Conexion.getConection();
            Statement stnt = conexion.createStatement();
            ResultSet rs;
            String Consulta = "select IdTipo, NombreTipo from TipoUsuarios";
            stnt.executeQuery(Consulta);
            rs = stnt.executeQuery(Consulta);
            
            List<TipoUsuario> ListaTU = new ArrayList<>();
            
            while (rs.next()){
                int idTipo = rs.getInt("IdTipo");
                String NombreTipo = rs.getString("NombreTipo");
                
                TipoUsuario TipoUsuario = new TipoUsuario(idTipo, NombreTipo);
                
                ListaTU.add(TipoUsuario);

            }
            
            rs.close();
            stnt.close();
            conexion.close();
            
            return ListaTU;
            
        } catch (SQLException ex) {
            
            Logger.getLogger(TipoUsuariosSQL.class.getName()).log(Level.SEVERE, null, ex);
            return null;
        }   
    }
    
    public TipoUsuario MostrarTipoUsuario (int _Id ){
       
        try {
            
            
            Connection conexion = Conexion.getConection();
            
            
            Statement stnt = conexion.createStatement();
            ResultSet rs;
            String Consulta = "select IdTipo, NombreTipo from TipoUsuarios\nwhere IdTipo = "+_Id;
            stnt.executeQuery(Consulta);
            rs = stnt.executeQuery(Consulta);
            
            TipoUsuario TipoUsuario = null ;
            
            while (rs.next()){

                int id = rs.getInt("IdTipo");
                String Nombre = rs.getString("NombreTipo");
                
                TipoUsuario = new TipoUsuario(id, Nombre);
                

            }
            
            rs.close();
            stnt.close();
            conexion.close();
            
            return TipoUsuario;
            
        } catch (SQLException ex) {
            
            Logger.getLogger(TipoUsuariosSQL.class.getName()).log(Level.SEVERE, null, ex);
            return null;
        }   
    }
    
}
    


    





