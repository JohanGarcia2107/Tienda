/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Other/File.java to edit this template
 */
package Practica;

import Modelos.*;
import MetodosSQL.*;
import java.util.List;
import ClasesParaVistas.*;

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
           
        AdministradorSQL a = new AdministradorSQL();
        
        
        
        boolean b = a.InicioDeSesion("Juan Perez","$p@ssw0rd123");
        
        System.out.println(b);
            
            
        
    }
}
