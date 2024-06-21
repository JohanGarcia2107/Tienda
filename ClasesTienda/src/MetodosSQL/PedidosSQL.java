/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package MetodosSQL;

import Modelos.Pedidos;
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
public class PedidosSQL {

    public PedidosSQL() {
    }
    
    public boolean InsertarPedido(Pedidos Pedidos){
       
        int IdPedido = Pedidos.getIdPedido();
        int IdFactura = Pedidos.getIdFactura()/*return que se llama claveGenerada Traida del metodo de FacturaSQL 
            InsertarFacturaYObtenerIdFactura(Factura Factura) que inserta la factura en la base de datos*/;
        String Fecha = Pedidos.getFecha();
    
        
        try {
            
            Connection conexion = Conexion.getConection();
            String Insert = "insert into Pedidos(IdPedido,IdFactura,Fecha) "
                    + "values("+IdPedido+","+IdFactura+",'"+Fecha+"');"
                    +"' \n update Pedidos c"
                    +"' \n set IdUser = (select IdUsuario from Factura where IdFactura = c.IdFactura);"
                    +"' \n update Pedidos c"
                    +"' \n set MontoAPagar = (select PagoFinal from Factura where IdFactura = c.IdFactura );"
                    +"' \n update Pedidos c"
                    +"' \n set Direccion = (select Direccion from Factura where IdFactura = c.IdFactura );";
            Statement stnt = conexion.createStatement();
            stnt.executeUpdate(Insert);

            

            stnt.close();
            conexion.close();
            
            return true;
        } catch (SQLException ex) {
            Logger.getLogger(PedidosSQL.class.getName()).log(Level.SEVERE, null, ex);
            return false;
        }   
    }
    
    public boolean PedidoEntregado(int IdPedido){
        
        try {
            
            Connection conexion = Conexion.getConection();
            String Update = "update Pedidos \n set Estado = 2"+
                    " \n where IdPedido = "+IdPedido ;
            Statement stnt = conexion.createStatement();
            stnt.executeUpdate(Update);

            

            stnt.close();
            conexion.close();
            
            return true;
        } catch (SQLException ex) {
            Logger.getLogger(PedidosSQL.class.getName()).log(Level.SEVERE, null, ex);
            return false;
        }   
    }
    
    public boolean PedidoCancelado(int IdPedido){
        
        try {
            
            Connection conexion = Conexion.getConection();
            String Update = "update Pedidos \n set Estado = 3"+
                    " \n where IdPedido = "+IdPedido ;
            Statement stnt = conexion.createStatement();
            stnt.executeUpdate(Update);

            

            stnt.close();
            conexion.close();
            
            return true;
        } catch (SQLException ex) {
            Logger.getLogger(PedidosSQL.class.getName()).log(Level.SEVERE, null, ex);
            return false;
        }   
    }
    
}

    

