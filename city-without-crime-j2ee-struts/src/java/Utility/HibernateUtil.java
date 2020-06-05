/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package Utility;

import Entity.Criminal_Activity;
import Entity.Criminal_Record;
import Entity.Employee;
import Entity.News;
import Entity.Police_Station;
import Entity.User_Complaint;
import org.hibernate.Session;
import org.hibernate.cfg.AnnotationConfiguration;
import org.hibernate.SessionFactory;

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
            cfg.addAnnotatedClass(Police_Station.class);
              cfg.addAnnotatedClass(Criminal_Record.class);
                   cfg.addAnnotatedClass(Criminal_Activity.class);
                   cfg.addAnnotatedClass(News.class);
            cfg.addAnnotatedClass(User_Complaint.class);
            
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
