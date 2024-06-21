/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package MetodosSQL;

import Modelos.Productos;
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
public class ProductosSQL {
    
    public ProductosSQL(){
    
    }
    
    public boolean InsertarProducto(Productos Productos){
       
    String NombreProducto = Productos.getNombreProducto();
    String DirIMGProd = Productos.getDirIMGProd();
    float Precio = Productos.getPrecio();
    int Stock = Productos.getStock();
    int IdCategoria = Productos.getIdCategoria();
        
        try {
            
            Connection conexion = Conexion.getConection();
            String Insert = "insert into productos (DireccionIMGProd,Nombre,Precio,Stock,IdCategoria) "
                    + "values('"+DirIMGProd+"','"+NombreProducto+"','"+Precio+"','"+Stock+"','"+IdCategoria+"')";
            Statement stnt = conexion.createStatement();
            stnt.executeUpdate(Insert);

            

            stnt.close();
            conexion.close();
            
            return true;
        } catch (SQLException ex) {
            Logger.getLogger(ProductosSQL.class.getName()).log(Level.SEVERE, null, ex);
            return false;
        }   
    }
    
    public boolean EliminarProducto(int Id){
        
        try {
            
            Connection conexion = Conexion.getConection();
            String Delete = "update productos \n set IdActividad = 2 "+
                    "' \n where Nombre = "+Id ;
            Statement stnt = conexion.createStatement();
            stnt.executeUpdate(Delete);

            

            stnt.close();
            conexion.close();
            
            return true;
        } catch (SQLException ex) {
            Logger.getLogger(ProductosSQL.class.getName()).log(Level.SEVERE, null, ex);
            return false;
        }   
    }
    
    public boolean ModificarNombreProductos(int IdProducto, String NombreProducto){
        
        try {
            
            Connection conexion = Conexion.getConection();
            String Update = "update productos \n set Nombre = '"+NombreProducto+
                    "' \n where IdProducto = "+IdProducto ;
            Statement stnt = conexion.createStatement();
            stnt.executeUpdate(Update);

            

            stnt.close();
            conexion.close();
            
            return true;
        } catch (SQLException ex) {
            Logger.getLogger(ProductosSQL.class.getName()).log(Level.SEVERE, null, ex);
            return false;
        }   
    }
    
    public boolean ModificarPrecio(int IdProducto, float precio){
        
        try {
            
            Connection conexion = Conexion.getConection();
            String Update = "update productos \n set Precio = "+precio+
                    " \n where IdProducto = "+IdProducto ;
            Statement stnt = conexion.createStatement();
            stnt.executeUpdate(Update);

            

            stnt.close();
            conexion.close();
            
            return true;
        } catch (SQLException ex) {
            Logger.getLogger(ProductosSQL.class.getName()).log(Level.SEVERE, null, ex);
            return false;
        }   
    }
    
    public boolean ModificarStock(int IdProducto, int Stock){
                
        try {
            
            Connection conexion = Conexion.getConection();
            String Update = "update productos \n set Stock = "+Stock+
                    " \n where IdProducto = "+IdProducto ;
            Statement stnt = conexion.createStatement();
            stnt.executeUpdate(Update);

            

            stnt.close();
            conexion.close();
            
            return true;
        } catch (SQLException ex) {
            Logger.getLogger(ProductosSQL.class.getName()).log(Level.SEVERE, null, ex);
            return false;
        }   
    }
    
    public boolean ModificarCategoria(int IdProducto, int IdCategoria){
        
        try {
            
            Connection conexion = Conexion.getConection();
            String Update = "update productos \n set IdCategoria = "+IdCategoria+
                    " \n where IdProducto = "+IdProducto ;
            Statement stnt = conexion.createStatement();
            stnt.executeUpdate(Update);

            

            stnt.close();
            conexion.close();
            
            return true;
        } catch (SQLException ex) {
            Logger.getLogger(ProductosSQL.class.getName()).log(Level.SEVERE, null, ex);
            return false;
        }   
    }
    
}     
