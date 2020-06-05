/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package Action;


 import Entity.Criminal_Activity;
import Entity.Criminal_Record;
import Entity.Police_Station;
import Entity.Employee;
import Utility.HibernateUtil;
import java.util.List;
import org.hibernate.Query;
import org.hibernate.Session;
import org.hibernate.Transaction;
/**
 *
 * @author Legend
 */
public class crudMain {
   

/**
 *
 * @author Legend
 */

    public static void main(String[] args) {
        add();
        //delete();
       // update();
        //readHQL(); 
    }
    
    public static void add(){
    Session s=HibernateUtil.getSession();
    Transaction t =s.beginTransaction();
  
    Criminal_Record cr=null;
    Criminal_Activity ca=null;
       Query q=s.createQuery("from Police_Station where name='Rajiv Chowk'");      
         List<Police_Station> data=q.list();
         for(Police_Station ps: data){
 //Police_Station  p= new Police_Station(101,"B-488 Tilak Nagar","Tilak Nagar Metro","01123784589","987987345","Rajiv Chowk","This is located near Tilak Nagar Metro Station.","tilaknagar123","DP Suresh Malhotra","01134892345","@tilaknagar1");
  
  cr=new Criminal_Record(901,"5+","Kasab","Male" ,"5 ft. 12 inches","dawood.jpg","Ibrahim",0, "75.6 kg" ,ps);
  
    ca = new Criminal_Activity(9901,"none","Cyber Crime","08-Jan-1998", cr);
    
         }  
    //  s.save(p);
      s.save(cr);
      s.save(ca);
 
    t.commit();
    s.close();
    } 
    
    public static void update(){
    Session s=HibernateUtil.getSession();
    Transaction t =s.beginTransaction();
    Employee e=(Employee)s.get(Employee.class,4);
    e.setName("manav");
    e.setDepName("ECE");
    s.update(e);
    t.commit();
    s.close();
    
    
    
    
    }
    
    public static void delete(){
    Session s=HibernateUtil.getSession();
    Transaction t =s.beginTransaction();
    Employee e=new Employee();
    e.setEmployeeId(3);
    s.delete(e);
    t.commit();
    s.close();
    
    }
    
    public static void readSQL(){
       Session s=HibernateUtil.getSession();
       Query q=s.createSQLQuery("Select * from Employee");
       List data=q.list();
       for(Object x: data){
        Object [] d=(Object [])x;   
        System.out.println("d[0] :"+d[0]+"  d[1]  :"+d[1]+"    d[2]"+d[2]);
       }
        
       }
    
    public static void readHQL(){
         Session s=HibernateUtil.getSession();
         Query q=s.createQuery("from Employee");
         List<Employee> data=q.list();
         for(Employee e: data){
             System.out.println("Eid  : "+e.getEmployeeId()+"Name   : "+e.getName());
         
         }     
    
    
    }
       
    
    }



