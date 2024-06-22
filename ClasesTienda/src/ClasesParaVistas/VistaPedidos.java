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
public class VistaPedidos {

    private int IdFactura;
    private String Nombre;
    private float MontoAPagar;
    private String Fecha;
    private String Direccion;
    private String NombreEstado;

    public int getIdFactura() {
        return IdFactura;
    }

    public void setIdFactura(int IdFactura) {
        this.IdFactura = IdFactura;
    }

    public String getNombre() {
        return Nombre;
    }

    public void setNombre(String Nombre) {
        this.Nombre = Nombre;
    }

    public float getMontoAPagar() {
        return MontoAPagar;
    }

    public void setMontoAPagar(float MontoAPagar) {
        this.MontoAPagar = MontoAPagar;
    }

    public String getFecha() {
        return Fecha;
    }

    public void setFecha(String Fecha) {
        this.Fecha = Fecha;
    }

    public String getDireccion() {
        return Direccion;
    }

    public void setDireccion(String Direccion) {
        this.Direccion = Direccion;
    }

    public String getNombreEstado() {
        return NombreEstado;
    }

    public void setNombreEstado(String NombreEstado) {
        this.NombreEstado = NombreEstado;
    }

    public VistaPedidos(int IdFactura, String Nombre, float MontoAPagar, String Fecha, String Direccion, String NombreEstado) {
        this.IdFactura = IdFactura;
        this.Nombre = Nombre;
        this.MontoAPagar = MontoAPagar;
        this.Fecha = Fecha;
        this.Direccion = Direccion;
        this.NombreEstado = NombreEstado;
    }
    
    
    public VistaPedidos() {
    }
    
    public List<VistaPedidos> ListarPedidos (){
        
        try {
            
            Connection conexion = Conexion.getConection();
            Statement stnt = conexion.createStatement();
            ResultSet rs;
            String Consulta = "select a.IdFactura, b.Nombre, a.MontoAPagar, a.Fecha, a.Direccion, c.NombreEstado\n" +
                              "from pedidos a\n" +
                              "join Usuarios b on a.IdUser=b.IdUsuario\n" +
                              "join EstadoPedidos c on a.Estado=c.IdEstado\n" +
                              "order by a.IdFactura;";
            stnt.executeQuery(Consulta);
            rs = stnt.executeQuery(Consulta);
            
            List<VistaPedidos> ListaPedidos = new ArrayList<>();
            
            while (rs.next()){
                
                int IdFactura = rs.getInt("IdFactura");
                String Nombre = rs.getString("Nombre");
                float MontoAPagar = rs.getFloat("MontoAPagar");
                String Fecha = rs.getString("Fecha");
                String Direccion = rs.getString("Direccion");
                String NombreEstado = rs.getString("NombreEstado");
                
                
                
                VistaPedidos VistaPedidos = new VistaPedidos(IdFactura, Nombre,MontoAPagar,Fecha,Direccion,NombreEstado);
                
                ListaPedidos.add(VistaPedidos);

            }
            
            rs.close();
            stnt.close();
            conexion.close();
            
            return ListaPedidos;
            
        } catch (SQLException ex) {
            
            Logger.getLogger(VistaPedidos.class.getName()).log(Level.SEVERE, null, ex);
            return null;
        }   
    }
    
    public List<VistaPedidos> ListarPedidos (int _Id){
        
        try {
            
            Connection conexion = Conexion.getConection();
            Statement stnt = conexion.createStatement();
            ResultSet rs;
            String Consulta = "select a.IdFactura, b.Nombre, a.MontoAPagar, a.Fecha, a.Direccion, c.NombreEstado\n" +
                              "from pedidos a\n" +
                              "join Usuarios b on a.IdUser=b.IdUsuario\n" +
                              "join EstadoPedidos c on a.Estado=c.IdEstado\n" +
                              "where a.IdUser = "+_Id +
                              "\norder by a.IdFactura;";
            stnt.executeQuery(Consulta);
            rs = stnt.executeQuery(Consulta);
            
            List<VistaPedidos> ListaPedidos = new ArrayList<>();
            
            while (rs.next()){
                
                int IdFactura = rs.getInt("IdFactura");
                String Nombre = rs.getString("Nombre");
                float MontoAPagar = rs.getFloat("MontoAPagar");
                String Fecha = rs.getString("Fecha");
                String Direccion = rs.getString("Direccion");
                String NombreEstado = rs.getString("NombreEstado");
                
                
                
                VistaPedidos VistaPedidos = new VistaPedidos(IdFactura, Nombre,MontoAPagar,Fecha,Direccion,NombreEstado);
                
                ListaPedidos.add(VistaPedidos);

            }
            
            rs.close();
            stnt.close();
            conexion.close();
            
            return ListaPedidos;
            
        } catch (SQLException ex) {
            
            Logger.getLogger(VistaPedidos.class.getName()).log(Level.SEVERE, null, ex);
            return null;
        }   
    }
    
    public List<VistaPedidos> ListarPedidos (String _Nombre){
        
        try {
            
            Connection conexion = Conexion.getConection();
            Statement stnt = conexion.createStatement();
            ResultSet rs;
            String Consulta = "select a.IdFactura, b.Nombre, a.MontoAPagar, a.Fecha, a.Direccion, c.NombreEstado\n" +
                              "from pedidos a\n" +
                              "join Usuarios b on a.IdUser=b.IdUsuario\n" +
                              "join EstadoPedidos c on a.Estado=c.IdEstado\n" +
                              "where NombreEstado like '"+_Nombre+"%'" +
                              "\norder by a.IdFactura;";
            stnt.executeQuery(Consulta);
            rs = stnt.executeQuery(Consulta);
            
            List<VistaPedidos> ListaPedidos = new ArrayList<>();
            
            while (rs.next()){
                
                int IdFactura = rs.getInt("IdFactura");
                String Nombre = rs.getString("Nombre");
                float MontoAPagar = rs.getFloat("MontoAPagar");
                String Fecha = rs.getString("Fecha");
                String Direccion = rs.getString("Direccion");
                String NombreEstado = rs.getString("NombreEstado");
                
                
                
                VistaPedidos VistaPedidos = new VistaPedidos(IdFactura, Nombre,MontoAPagar,Fecha,Direccion,NombreEstado);
                
                ListaPedidos.add(VistaPedidos);

            }
            
            rs.close();
            stnt.close();
            conexion.close();
            
            return ListaPedidos;
            
        } catch (SQLException ex) {
            
            Logger.getLogger(VistaPedidos.class.getName()).log(Level.SEVERE, null, ex);
            return null;
        }   
    }
    
    
    
}
