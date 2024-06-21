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
public class VistaProductos {
    
    private int IdProducto;
    private String NombreProducto;
    private String DirIMGProd;
    private float Precio;
    private int Stock;
    private String Categoria;
    private String Actividad;
    
    public VistaProductos() {

    }
    
    public VistaProductos(int IdProducto, String NombreProducto, String DirIMGProd, float Precio, int Stock, String Categoria, String Actividad) {
        this.IdProducto = IdProducto;
        this.NombreProducto = NombreProducto;
        this.DirIMGProd = DirIMGProd;
        this.Precio = Precio;
        this.Stock = Stock;
        this.Categoria = Categoria;
        this.Actividad = Actividad;
    }
    
    public List<VistaProductos> ListarProductosVista (){
        
        try {
            
            Connection conexion = Conexion.getConection();
            Statement stnt = conexion.createStatement();
            ResultSet rs;
            String Consulta = "select a.IdProducto, a.Nombre, a.Precio, a.DireccionIMGProd, a.Stock, b.NombreCategoria as Categoria, c.NombreCtividad\n" +
                              "from Productos a\n" +
                              "join Categorias b on a.IdCategoria=b.IdCategoria\n" +
                              "join Actividad c on a.IdActividad=c.IdActividad;";
            stnt.executeQuery(Consulta);
            rs = stnt.executeQuery(Consulta);
            
            List<VistaProductos> ListaProductos = new ArrayList<>();
            
            while (rs.next()){
                int IdProducto = rs.getInt("IdProducto");
                String NombreProducto = rs.getString("Nombre");
                String DirIMGProd = rs.getString("DireccionIMGProd");
                float Precio = rs.getInt("Precio");
                int Stock = rs.getInt("Stock");
                String Categoria = rs.getString("Nombre");
                String Actividad = rs.getString("Nombre");
                
                
                
                VistaProductos VistaProductos = new VistaProductos(IdProducto, NombreProducto,DirIMGProd,Precio,Stock,Categoria,Actividad);
                
                ListaProductos.add(VistaProductos);

            }
            
            rs.close();
            stnt.close();
            conexion.close();
            
            return ListaProductos;
            
        } catch (SQLException ex) {
            
            Logger.getLogger(VistaProductos.class.getName()).log(Level.SEVERE, null, ex);
            return null;
        }   
    }
    
    public VistaProductos MostrarProductos (int _Id){
        
        try {
            
            Connection conexion = Conexion.getConection();
            Statement stnt = conexion.createStatement();
            ResultSet rs;
            String Consulta = "select a.IdProducto, a.Nombre, a.Precio, a.DireccionIMGProd, a.Stock, b.NombreCategoria as Categoria, c.NombreCtividad\n" +
                              "from Productos a\n" +
                              "join Categorias b on a.IdCategoria=b.IdCategoria\n" +
                              "join Actividad c on a.IdActividad=c.IdActividad"
                              + "\n where a.IdProducto =  " + _Id;
            stnt.executeQuery(Consulta);
            rs = stnt.executeQuery(Consulta);
            
            VistaProductos VistaProductos = null;
            
            while (rs.next()){
                int IdProducto = rs.getInt("IdProducto");
                String NombreProducto = rs.getString("Nombre");
                String DirIMGProd = rs.getString("DireccionIMGProd");
                float Precio = rs.getInt("Precio");
                int Stock = rs.getInt("Stock");
                String Categoria = rs.getString("Nombre");
                String Actividad = rs.getString("Nombre");
                
                
                
                VistaProductos = new VistaProductos(IdProducto, NombreProducto,DirIMGProd,Precio,Stock,Categoria,Actividad);
                

            }
            
            rs.close();
            stnt.close();
            conexion.close();
            
            return VistaProductos;
            
        } catch (SQLException ex) {
            
            Logger.getLogger(VistaProductos.class.getName()).log(Level.SEVERE, null, ex);
            return null;
        }   
    }
    
    public List<VistaProductos> ListarProductosVista (String Nombre){
        
        try {
            
            Connection conexion = Conexion.getConection();
            Statement stnt = conexion.createStatement();
            ResultSet rs;
            String Consulta = "select a.IdProducto, a.Nombre, a.Precio, a.DireccionIMGProd, a.Stock, b.NombreCategoria as Categoria, c.NombreCtividad\n" +
                              "from Productos a\n" +
                              "join Categorias b on a.IdCategoria=b.IdCategoria\n" +
                              "join Actividad c on a.IdActividad=c.IdActividad;"
                              + "\n where a.Nombre =  '"+Nombre+"%'";
            stnt.executeQuery(Consulta);
            rs = stnt.executeQuery(Consulta);
            
            List<VistaProductos> ListaProductosAdmin = new ArrayList<>();
            
            while (rs.next()){
                int IdProducto = rs.getInt("IdProducto");
                String NombreProducto = rs.getString("Nombre");
                String DirIMGProd = rs.getString("DireccionIMGProd");
                float Precio = rs.getInt("Precio");
                int Stock = rs.getInt("Stock");
                String Categoria = rs.getString("Nombre");
                String Actividad = rs.getString("Nombre");
                
                
                
                VistaProductos VistaProductos = new VistaProductos(IdProducto, NombreProducto,DirIMGProd,Precio,Stock,Categoria,Actividad);
                
                ListaProductosAdmin.add(VistaProductos);

            }
            
            rs.close();
            stnt.close();
            conexion.close();
            
            return ListaProductosAdmin;
            
        } catch (SQLException ex) {
            
            Logger.getLogger(VistaProductos.class.getName()).log(Level.SEVERE, null, ex);
            return null;
        }   
    }
    
    public List<VistaProductos> ListarProductosVista (int _Id){
        
        try {
            
            Connection conexion = Conexion.getConection();
            Statement stnt = conexion.createStatement();
            ResultSet rs;
            String Consulta = "select a.IdProducto, a.Nombre, a.Precio, a.DireccionIMGProd, a.Stock, b.NombreCategoria as Categoria, c.NombreCtividad\n" +
                              "from Productos a\n" +
                              "join Categorias b on a.IdCategoria=b.IdCategoria\n" +
                              "join Actividad c on a.IdActividad=c.IdActividad;"
                              + "\n where a.IdProducto = "+_Id;
            stnt.executeQuery(Consulta);
            rs = stnt.executeQuery(Consulta);
            
            List<VistaProductos> ListaProductosAdmin = new ArrayList<>();
            
            while (rs.next()){
                int IdProducto = rs.getInt("IdProducto");
                String NombreProducto = rs.getString("Nombre");
                String DirIMGProd = rs.getString("DireccionIMGProd");
                float Precio = rs.getInt("Precio");
                int Stock = rs.getInt("Stock");
                String Categoria = rs.getString("Nombre");
                String Actividad = rs.getString("Nombre");
                
                
                
                VistaProductos VistaProductos = new VistaProductos(IdProducto, NombreProducto,DirIMGProd,Precio,Stock,Categoria,Actividad);
                
                ListaProductosAdmin.add(VistaProductos);

            }
            
            rs.close();
            stnt.close();
            conexion.close();
            
            return ListaProductosAdmin;
            
        } catch (SQLException ex) {
            
            Logger.getLogger(VistaProductos.class.getName()).log(Level.SEVERE, null, ex);
            return null;
        }   
    }
    
    
    
}
    

