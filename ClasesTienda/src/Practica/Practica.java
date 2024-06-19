/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Other/File.java to edit this template
 */
package Practica;

import Modelos.ModelosParteProductos.Productos;
import Modelos.ModelosParteProductos.Categorias;
import Modelos.ParteUsuarios.Usuarios;
import Modelos.ModelosPartePedidosYFacturas.EstadoPedidos;
import Modelos.ParteUsuarios.TipoUsuario;
import Modelos.ModelosPartePedidosYFacturas.Pedidos;
import Modelos.ModelosPartePedidosYFacturas.Factura;
import Modelos.ModelosPartePedidosYFacturas.DetalleFactura;

/**
 *
 * @author jdavi
 */
public class Practica {

    /**
     * @param args the command line arguments
     */
    public static void main(String args[]) {
        Productos a = new Productos(1, "Figura", null, 10000, 2, 3);
        
        a.EliminarProducto(1);
        
        String Precio= a.VerProducto(1);
        
            System.out.println(Precio);
    }
}
