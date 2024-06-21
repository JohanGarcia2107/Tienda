/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package MetodosSQL;

import Modelos.Factura;
import Sql.Conexion;
import java.sql.Connection;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.logging.Level;
import java.util.logging.Logger;
import java.sql.ResultSet;

/**
 *
 * @author jdavi
 */
public class FacturaSQL {
    
    public FacturaSQL(){
    
    }
    
    public int InsertarFacturaYObtenerIdFactura(Factura Factura){
     
    String Direccion = Factura.getDireccion();
    String MedioDePago = Factura.getDireccion();
    String Fecha = Factura.getDireccion();
    int IdUsuario = Factura.getIdUsuario();
        
        try {
            
            Connection conexion = Conexion.getConection();
            String Insert = "insert into factura (Direccion,MedioDePago,Fecha,IdUsuario)" 
                    + "values('"+Direccion+"','"+MedioDePago+"','"+Fecha+"',"+IdUsuario+")";
            Statement stnt = conexion.createStatement();
            stnt.executeUpdate(Insert,Statement.RETURN_GENERATED_KEYS);

            
            int claveGenerada =0;
            ResultSet rs = stnt.getGeneratedKeys();
            
            while (rs.next()) {
              claveGenerada = rs.getInt(1);
              System.out.println("Clave generada = " + claveGenerada);
            }
            

            
            
            stnt.close();
            conexion.close();
            
            return claveGenerada;
        } catch (SQLException ex) {
            Logger.getLogger(FacturaSQL.class.getName()).log(Level.SEVERE, null, ex);
            return 0;
        }   
    }
    
}
