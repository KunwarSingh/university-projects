/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package Action;


import Entity.Company_Details;
import Entity.Current_Stock;
import Entity.Item_History;
import Entity.Order_Details;
import Entity.Product_Details;
import Entity.Product_Processing;
import Entity.Supplier_Details;
import Entity.Used_Stock;
import org.hibernate.cfg.AnnotationConfiguration;
import org.hibernate.tool.hbm2ddl.SchemaExport;

/**
 *
 * @author Legend
 */
public class TableCreator {





    public static void main(String[] args) {
        AnnotationConfiguration cfg = new AnnotationConfiguration();
     // cfg.addAnnotatedClass(Item_History.class);
           cfg.addAnnotatedClass(Company_Details.class);
       //   cfg.addAnnotatedClass(Current_Stock.class);
            cfg.addAnnotatedClass(Order_Details.class);
        //   cfg.addAnnotatedClass(Supplier_Details.class);
            cfg.addAnnotatedClass(Used_Stock.class);
           cfg.addAnnotatedClass(Product_Details.class);
            cfg.addAnnotatedClass(Product_Processing.class);
            
        cfg.configure("hibernate.cfg.xml");
        
        SchemaExport se = new SchemaExport(cfg);
        se.create(true,true);        System.out.println("Table created succesfully");
        
    }
    
}

    

