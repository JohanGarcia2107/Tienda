/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package MetodosSQL;

import Modelos.DetalleFactura;
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
public class DetalleFacturaSQL {

    public DetalleFacturaSQL() {
    }
    
    public boolean InsertarDetalleFactura(DetalleFactura DetalleFactura){
       
    int IdProducto = DetalleFactura.getIdProducto();
    int Cantidad = DetalleFactura.getCantidad();
    int IdFactura = DetalleFactura.getIdFactura()/*return que se llama claveGenerada Traida del metodo de FacturaSQL 
            InsertarFacturaYObtenerIdFactura(Factura Factura) que inserta la factura en la base de datos*/;
        
        try {
            
            Connection conexion = Conexion.getConection();
            String Insert = "insert into DetalleFactura (IdProducto,Cantidad,IdFactura) "
                    + "values("+IdProducto+","+Cantidad+","+IdFactura+");"
                    +"' \n update DetalleFactura c"
                    +"' \n set c.Precio = (select Precio from Productos  where c.IdProducto = IdProducto);"
                    +"' \n update DetalleFactura c"
                    +"' \n set c.PrecioTotal = (Precio*Cantidad);"
                    +"' \n update factura c"
                    +"' \n set c.TotalAPagar = (select sum(Preciototal) PrecioTotal from DetalleFactura  where c.IdFactura = IdFactura);"
                    +"' \n update factura c"
                    +"' \n set c.PagoFinal = c.TotalAPagar*IVA;";
            Statement stnt = conexion.createStatement();
            stnt.executeUpdate(Insert);

            

            stnt.close();
            conexion.close();
            
            return true;
        } catch (SQLException ex) {
            Logger.getLogger(DetalleFacturaSQL.class.getName()).log(Level.SEVERE, null, ex);
            return false;
        }   
    }
    
}
