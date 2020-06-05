/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package Action;


import Entity.Criminal_Activity;
import Entity.Criminal_Record;
import Entity.News;
import Entity.Police_Station;
import Entity.User_Complaint;
import org.hibernate.cfg.AnnotationConfiguration;
import org.hibernate.tool.hbm2ddl.SchemaExport;

/**
 *
 * @author Legend
 */
public class TableCreator {





    public static void main(String[] args) {
        AnnotationConfiguration cfg = new AnnotationConfiguration();
        cfg.addAnnotatedClass(Criminal_Activity.class);
          cfg.addAnnotatedClass(Criminal_Record.class);
            cfg.addAnnotatedClass(News.class);
              cfg.addAnnotatedClass(Police_Station.class);
                cfg.addAnnotatedClass(User_Complaint.class);
        cfg.configure("hibernate.cfg.xml");
        
        SchemaExport se = new SchemaExport(cfg);
        se.create(true,true);        System.out.println("Table created succesfully");
        
    }
    
}

    

