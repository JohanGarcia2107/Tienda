/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package Sql;

import java.sql.*;

/**
 *
 * @author jdavi
 */
public class Conexion {
    private static final String url = "jdbc:mysql://localhost:3306/proyecto";
    private static final String User = "root";
    private static final String Password = "";
    
    public static Connection getConection() throws SQLException{
        
        try{
            Class.forName("com.mysql.cj.jdbc.Driver");
        } catch (ClassNotFoundException ex){
            System.out.println(ex.toString());
        }
        
        return DriverManager.getConnection(url,User,Password);
    }
}
