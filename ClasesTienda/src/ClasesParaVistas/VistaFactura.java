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
public class VistaFactura {

    private int IdFactura;
    private String NombreUsuario;
    private String Email;
    private String Telefono;
    private String NombreProducto;
    private float Precio;
    private int Cantidad;
    private int PrecioTotal;
    private int PagoFinalFactura;
    
    public VistaFactura(int IdFactura, String NombreUsuario, String Email, String Telefono, String NombreProducto, float Precio, int Cantidad, int PrecioTotal, int PagoFinalFactura) {
        this.IdFactura = IdFactura;
        this.NombreUsuario = NombreUsuario;
        this.Email = Email;
        this.Telefono = Telefono;
        this.NombreProducto = NombreProducto;
        this.Precio = Precio;
        this.Cantidad = Cantidad;
        this.PrecioTotal = PrecioTotal;
        this.PagoFinalFactura = PagoFinalFactura;
    }
    
    public VistaFactura() {
    
    }
        
    
    public List<VistaFactura> ListarFacturas (){
        
        try {
            
            Connection conexion = Conexion.getConection();
            Statement stnt = conexion.createStatement();
            ResultSet rs;
            String Consulta = "select b.IdFactura, d.Nombre, d.Email, d.Telefono, c.Nombre as Producto, a.Precio, a.Cantidad, a.PrecioTotal, b.PagoFinal as TotalaPagarmasIVA\n" +
                              "from DetalleFactura a\n" +
                              "join Factura b on a.IdFactura=b.IdFactura\n" +
                              "join Productos c on a.IdProducto=c.IdProducto\n" +
                              "join Usuarios d on b.IdUsuario=d.IdUsuario\n" +
                              "order by a.IdFactura;";
            stnt.executeQuery(Consulta);
            rs = stnt.executeQuery(Consulta);
            
            List<VistaFactura> ListaFacturas = new ArrayList<>();
            
            while (rs.next()){
                int IdFactura = rs.getInt("IdFactura");
                String NombreUsuario = rs.getString("Nombre");
                String Email = rs.getString("Email");
                String Telefono = rs.getString("Telefono");
                String NombreProducto = rs.getString("Producto");
                float Precio = rs.getInt("Precio");
                int Cantidad = rs.getInt("Cantidad");
                int PrecioTotal = rs.getInt("PrecioTotal");
                int PagoFinalFactura = rs.getInt("TotalaPagarmasIVA");
                
                
                
                VistaFactura VistaFactura = new VistaFactura(IdFactura, NombreUsuario,Email,Telefono,NombreProducto,Precio,Cantidad,PrecioTotal,PagoFinalFactura);
                
                ListaFacturas.add(VistaFactura);

            }
            
            rs.close();
            stnt.close();
            conexion.close();
            
            return ListaFacturas;
            
        } catch (SQLException ex) {
            
            Logger.getLogger(VistaFactura.class.getName()).log(Level.SEVERE, null, ex);
            return null;
        }   
    }
    
    public List<VistaFactura> ListarFacturas ( int _Id){
        
        try {
            
            Connection conexion = Conexion.getConection();
            Statement stnt = conexion.createStatement();
            ResultSet rs;
            String Consulta = "select b.IdFactura, d.Nombre, d.Email, d.Telefono, c.Nombre as Producto, a.Precio, a.Cantidad, a.PrecioTotal, b.PagoFinal as TotalaPagarmasIVA\n" +
                              "from DetalleFactura a\n" +
                              "join Factura b on a.IdFactura=b.IdFactura\n" +
                              "join Productos c on a.IdProducto=c.IdProducto\n" +
                              "join Usuarios d on b.IdUsuario=d.IdUsuario\n" +
                              "where b.IdFactura = " + _Id+
                              "\n order by a.IdFactura;";
            stnt.executeQuery(Consulta);
            rs = stnt.executeQuery(Consulta);
            
            List<VistaFactura> ListaFacturas = new ArrayList<>();
            
            while (rs.next()){
                int IdFactura = rs.getInt("IdFactura");
                String NombreUsuario = rs.getString("Nombre");
                String Email = rs.getString("Email");
                String Telefono = rs.getString("Telefono");
                String NombreProducto = rs.getString("Producto");
                float Precio = rs.getInt("Precio");
                int Cantidad = rs.getInt("Cantidad");
                int PrecioTotal = rs.getInt("PrecioTotal");
                int PagoFinalFactura = rs.getInt("TotalaPagarmasIVA");
                
                
                
                VistaFactura VistaFactura = new VistaFactura(IdFactura, NombreUsuario,Email,Telefono,NombreProducto,Precio,Cantidad,PrecioTotal,PagoFinalFactura);
                
                ListaFacturas.add(VistaFactura);

            }
            
            rs.close();
            stnt.close();
            conexion.close();
            
            return ListaFacturas;
            
        } catch (SQLException ex) {
            
            Logger.getLogger(VistaFactura.class.getName()).log(Level.SEVERE, null, ex);
            return null;
        }   
    }
    
    public List<VistaFactura> ListarFacturas ( String Nombre){
        
        try {
            
            Connection conexion = Conexion.getConection();
            Statement stnt = conexion.createStatement();
            ResultSet rs;
            String Consulta = "select b.IdFactura, d.Nombre, d.Email, d.Telefono, c.Nombre as Producto, a.Precio, a.Cantidad, a.PrecioTotal, b.PagoFinal as TotalaPagarmasIVA\n" +
                              "from DetalleFactura a\n" +
                              "join Factura b on a.IdFactura=b.IdFactura\n" +
                              "join Productos c on a.IdProducto=c.IdProducto\n" +
                              "join Usuarios d on b.IdUsuario=d.IdUsuario\n" +
                              "where d.Nombre like  '"+Nombre+"%'"+
                              "\n order by a.IdFactura;";
            stnt.executeQuery(Consulta);
            rs = stnt.executeQuery(Consulta);
            
            List<VistaFactura> ListaFacturas = new ArrayList<>();
            
            while (rs.next()){
                int IdFactura = rs.getInt("IdFactura");
                String NombreUsuario = rs.getString("Nombre");
                String Email = rs.getString("Email");
                String Telefono = rs.getString("Telefono");
                String NombreProducto = rs.getString("Producto");
                float Precio = rs.getInt("Precio");
                int Cantidad = rs.getInt("Cantidad");
                int PrecioTotal = rs.getInt("PrecioTotal");
                int PagoFinalFactura = rs.getInt("TotalaPagarmasIVA");
                
                
                
                VistaFactura VistaFactura = new VistaFactura(IdFactura, NombreUsuario,Email,Telefono,NombreProducto,Precio,Cantidad,PrecioTotal,PagoFinalFactura);
                
                ListaFacturas.add(VistaFactura);

            }
            
            rs.close();
            stnt.close();
            conexion.close();
            
            return ListaFacturas;
            
        } catch (SQLException ex) {
            
            Logger.getLogger(VistaFactura.class.getName()).log(Level.SEVERE, null, ex);
            return null;
        }   
    }
    

    public int getIdFactura() {
        return IdFactura;
    }

    public void setIdFactura(int IdFactura) {
        this.IdFactura = IdFactura;
    }

    public String getNombreUsuario() {
        return NombreUsuario;
    }

    public void setNombreUsuario(String NombreUsuario) {
        this.NombreUsuario = NombreUsuario;
    }

    public String getEmail() {
        return Email;
    }

    public void setEmail(String Email) {
        this.Email = Email;
    }

    public String getTelefono() {
        return Telefono;
    }

    public void setTelefono(String Telefono) {
        this.Telefono = Telefono;
    }

    public String getNombreProducto() {
        return NombreProducto;
    }

    public void setNombreProducto(String NombreProducto) {
        this.NombreProducto = NombreProducto;
    }

    public float getPrecio() {
        return Precio;
    }

    public void setPrecio(int Precio) {
        this.Precio = Precio;
    }

    public int getCantidad() {
        return Cantidad;
    }

    public void setCantidad(int Cantidad) {
        this.Cantidad = Cantidad;
    }

    public int getPrecioTotal() {
        return PrecioTotal;
    }

    public void setPrecioTotal(int PrecioTotal) {
        this.PrecioTotal = PrecioTotal;
    }

    public int getPagoFinalFactura() {
        return PagoFinalFactura;
    }

    public void setPagoFinalFactura(int PagoFinalFactura) {
        this.PagoFinalFactura = PagoFinalFactura;
    }

    
    
    
    
}
