/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package MetodosSQL;

import Modelos.Categorias;
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
public class CategoriasSQL {
    
    public CategoriasSQL(){
    
    }
    
    public boolean InsertarCategoria(Categorias Categorias){
        String Nombre = Categorias.getNombreCategoria();
        
        try {
            
            Connection conexion = Conexion.getConection();
            String Insert = "insert into categorias (NombreCategoria)"
                    +"values('"+Nombre+"')";
            Statement stnt = conexion.createStatement();
            stnt.executeUpdate(Insert);

            

            stnt.close();
            conexion.close();
            
            return true;
        } catch (SQLException ex) {
            Logger.getLogger(CategoriasSQL.class.getName()).log(Level.SEVERE, null, ex);
            return false;
        }   
    }
    
    public boolean ActualizarCategorias(int Id, String Nombre){
        
        try {
            
            Connection conexion = Conexion.getConection();
            String Update = "update Categorias \n set NombreCategoria = '"+Nombre+
                    "' \n where IdCategoria = "+Id;
            Statement stnt = conexion.createStatement();
            stnt.executeUpdate(Update);

            

            stnt.close();
            conexion.close();
            
            return true;
        } catch (SQLException ex) {
            Logger.getLogger(CategoriasSQL.class.getName()).log(Level.SEVERE, null, ex);
            return false;
        }   
    }
    
}
