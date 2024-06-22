/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Other/File.java to edit this template
 */
package Practica;

import Modelos.*;
import MetodosSQL.*;
import java.util.List;
import ClasesParaVistas.*;
import Sql.Conexion;
import java.sql.Connection;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.logging.Level;
import java.util.logging.Logger;

/**
 *
 * @author jdavi
 */
public class Practica {

    /**
     * @param args the command line arguments
     */
    public static void main(String args[]) {
        
    
    
    
        //try {
            
            //Connection conexion = Conexion.getConection();
            
            
            /*Selecciona la cantidad de filas creada en la tabla*/
            //String Consulta = "select * from productos";
            
            /*Escritura de insertar datos
            String Insert = "insert into productos (Nombre,Precio,Stock,IdCategoria)"
                    +"values('Copa Champions', 5000.75,6,1)";*/
            
            /*Escritura de modificar datos
            String Alter = "update productos \n set nombre = 'Figura messi' "
                    + "\n where idProducto = 7";*/
            
            /*Escritura de Eliminar datos*/
            //String Delete = "delete \n from productos \n where idProducto = 7";

            
            /*Ejecuta las ordenes*/
            //Statement stnt = conexion.createStatement();
            /*Inserta los datos*/
            //stnt.executeUpdate(Insert);
            /*Modifica los datos*/
            //stnt.executeUpdate(Alter);
            /*Elimina los datos*/
            //stnt.executeUpdate(Delete);
            /*Indica si si se puede hacer la consulta y ejecuta esas consultas*/
            //ResultSet rs = stnt.executeQuery(Consulta);
            
            //while (rs.next()){
                //System.out.println("El producto es: "+rs.getString("nombre") 
                        //+  " \n y el precio es: " + rs.getFloat("precio"));//
            //}
            
            
           /* rs.close();
            stnt.close();
            conexion.close();*/
            
            
            
            
            
            
            
            //System.out.println(Precio);*/
        /*} catch (SQLException ex) {
            Logger.getLogger(Practica.class.getName()).log(Level.SEVERE, null, ex);
        }*/
        
        
        /*Productos a = new Productos(0, "NombreProducto", "DirIMGProd", 0, 0, 1);*/
        ProductosSQL b = new ProductosSQL();
        
        VistaProductos d = new VistaProductos();
        
        /*Insert boolean c = b.InsertarProducto(a);*/
        
        /*EliminarProducto boolean c = b.EliminarProducto(8);*/
        
        /*Modificar (Nombre en este caso)*/boolean c = b.ModificarNombreProductos(8, "NuevoNombreProducto");
        
        /*VerProducto*/d = d.MostrarProductos(8);
        
    int IdProducto=d.getIdProducto();
    String NombreProducto=d.getNombreProducto();
    String DirIMGProd=d.getDirIMGProd();
    float Precio=d.getPrecio();
    int Stock=d.getStock();
    String Categoria=d.getCategoria();
    String Actividad=d.getActividad();
        
    
        System.out.println(c);
        System.out.println("Id = "+IdProducto);
        System.out.println("Nombre = "+NombreProducto);
        System.out.println("DirIMG = "+DirIMGProd);
        System.out.println("Precio = "+Precio);
        System.out.println("Stock = "+Stock);
        System.out.println("Categoria = "+Categoria);
        System.out.println("Actividad = "+Actividad);
            
            
        
    }
}
