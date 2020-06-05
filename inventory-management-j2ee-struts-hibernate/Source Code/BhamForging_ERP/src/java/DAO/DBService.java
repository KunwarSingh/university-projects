package DAO;
import java.sql.*;
public class DBService {
    private static Connection con;
    static{
        try{
            Class.forName("com.mysql.jdbc.Driver");
                       con=DriverManager.getConnection("jdbc:mysql://localhost:3306/bham_erp","root","");
        }catch(Exception E){
            System.out.println("Error in Database Connection");}
    
    }
    
    public static Connection getConnection(){
    return con;
    }
    
    public static int updateData(String query)
    {   int i=-1;
        try{
      Statement stmt=con.createStatement();
      i = stmt.executeUpdate(query);
      
        }catch(Exception E){
            
            System.out.println(" Error while updating :" + -1);
        }
        return i;
    
    }
    
    public static ResultSet getData(String query){
        ResultSet rs=null;
    try{
     Statement stmt=con.createStatement();
     rs=stmt.executeQuery(query);
     //return rs;
    }
    catch(Exception E){System.out.println(" Error while updating :" + rs);}
    return rs;
       
    
    }
    
    public static ResultSetMetaData getMetaData(String query){
    Statement stmt=null;
    ResultSet rs=null;
    ResultSetMetaData rsmd = null;
        try{
          stmt=con.createStatement();
          rs=stmt.executeQuery(query);
          rsmd = rs.getMetaData();
          
    
    }
    catch(Exception E){
    System.out.println(" Error while updating :" + rsmd);
    }
        return rsmd;
    }
}

