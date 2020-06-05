/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package Utility;


import Entity.Company_Details;
import Entity.Current_Stock;
import Entity.Item_History;
import Entity.Order_Details;
import Entity.Product_Details;
import Entity.Product_Processing;
import Entity.Supplier_Details;
import Entity.Used_Stock;
import org.hibernate.Session;
import org.hibernate.SessionFactory;
import org.hibernate.cfg.AnnotationConfiguration;

/**
 * Hibernate Utility class with a convenient method to get Session Factory
 * object.
 *
 * @author Legend
 */
public class HibernateUtil {

     private static SessionFactory sessionFactory;
    
    static {
        try {
            AnnotationConfiguration cfg = new AnnotationConfiguration();
            cfg.addAnnotatedClass(Item_History.class);
            cfg.addAnnotatedClass(Company_Details.class);
            cfg.addAnnotatedClass(Current_Stock.class);
            cfg.addAnnotatedClass(Order_Details.class);
            cfg.addAnnotatedClass(Supplier_Details.class);
            cfg.addAnnotatedClass(Used_Stock.class);
            cfg.addAnnotatedClass(Product_Processing.class);
            cfg.addAnnotatedClass(Product_Details.class);
            
              
            
            cfg.configure();
            sessionFactory = cfg.buildSessionFactory();
        } catch (Throwable ex) {
            // Log the exception. 
            System.err.println("Initial SessionFactory creation failed." + ex);
            throw new ExceptionInInitializerError(ex);
        }
    }
    
    public static SessionFactory getSessionFactory() {
        return sessionFactory;
    }
    
    public static Session getSession() {
        return sessionFactory.openSession();
    }
}
