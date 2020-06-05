/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package Action;
import Entity.Current_Stock;
import Entity.Item_History;
import Entity.Supplier_Details;
import Utility.HibernateUtil;
import com.opensymphony.xwork2.ActionSupport;
import java.io.Serializable;
import java.util.ArrayList;
import java.util.List;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpSession;
import org.apache.struts2.interceptor.ServletRequestAware;
import org.hibernate.Query;
import org.hibernate.Criteria;
import org.hibernate.Session;
import org.hibernate.Transaction;
/**
 *
 * @author Kunwar
 */
public class StockManagement extends ActionSupport implements ServletRequestAware{
    private int itemId;
    private String name;
    private String companyName;
    private double quantity;
    private double costPerPiece;
    private String dateOfPurchase;   
    private int supplierId;
    private String supplierName;
    private String street1;
    private String street2;
    private String city;
    private String province;
    private String pincode;
    private String emailId;
    private String result;
    private String contactNo1;
    private String contactNo2;
    private String type;
    private String description;
    private int i=0;
    
    
    private HttpServletRequest req;
          
    private ArrayList stateslist = new ArrayList();
    private ArrayList supplierNamesList = new ArrayList();
    private ArrayList itemNamesList = new ArrayList();
    private String state;
    @Override
    public void setServletRequest(HttpServletRequest hsr){
        setReq(hsr);
    }
     public String viewStock()throws NullPointerException{
             Session s = HibernateUtil.getSession();
             Transaction t = s.beginTransaction();
   
          Criteria c=s.createCriteria(Current_Stock.class);  
           c.setFirstResult(0);  
          c.setMaxResults(10);
          List<Current_Stock> list=c.list(); 
          getReq().setAttribute("cs",list);
            
         
         
            /* Query q=s.createQuery(" from Current_Stock"); 
         List<Current_Stock> data=q.list();
         req.setAttribute("cs",data);
         int i=0;
          req.setAttribute("next",i);*/
     
            t.commit(); 
       return "success";
       }
    
      public String viewNext()throws NullPointerException{
         Session s = HibernateUtil.getSession();
             Transaction t = s.beginTransaction();
           
            // int i=Integer.parseInt(req.getParameter("first"));
          Criteria c=s.createCriteria(Current_Stock.class);  
           c.setFirstResult(10);  
          c.setMaxResults(10);
          List<Current_Stock> list=c.list(); 
          getReq().setAttribute("cs",list);
        
         // req.setAttribute("first",i+2);
            /* Query q=s.createQuery(" from Current_Stock"); 
         List<Current_Stock> data=q.list();
         req.setAttribute("cs",data);
         int i=0;
          req.setAttribute("next",i);*/
     
            t.commit(); 
       return "success";
       }
       public String updateStock()throws NullPointerException{
           setPincode("0000000");
       return "success";
       }
           public String fillItemDetails()throws NullPointerException{
         getReq().setAttribute("hello", getResult());
         //setCity("Kunwar");
             Session s = HibernateUtil.getSession();
      Transaction t = s.beginTransaction();
   
    Current_Stock current_Stock;
     Query q=s.createQuery(" from Current_Stock where name='"+getName()+"'"); 
         List<Current_Stock> data=q.list();
          for(Current_Stock cs : data)
          {
              
              setType(cs.getType());
              setDescription(cs.getDescription());
              setItemId(cs.getItemId());
          }
            t.commit(); 
            
            return "success";
        }
       
        public String fillSupplierDetails()throws NullPointerException{
         getReq().setAttribute("hello", getResult());
         //setCity("Kunwar");
             Session s = HibernateUtil.getSession();
      Transaction t = s.beginTransaction();
   
    Supplier_Details supplier_Details;
     Query q=s.createQuery(" from Supplier_Details where supplierName='"+getSupplierName()+"'"); 
         List<Supplier_Details> data=q.list();
          for(Supplier_Details sid : data)
          {
              setCity(sid.getCity());
              setProvince(sid.getProvince());
              setStreet1(sid.getStreet1());
              setStreet2(sid.getStreet2());
              setPincode(sid.getPincode());
              setEmailId(sid.getEmailId());
              setContactNo1(sid.getContactNo1());
              setContactNo2(sid.getContactNo2());
              setSupplierId(sid.getSupplierId());
          }
            t.commit(); 
            
            return "success";
        }
        
        public String fillSupplierDetails1()throws NullPointerException{
         getReq().setAttribute("hello", getResult());
         //setCity("Kunwar");
             Session s = HibernateUtil.getSession();
      Transaction t = s.beginTransaction();
   
    Supplier_Details supplier_Details;
     Query q=s.createQuery(" from Supplier_Details where supplierName='"+getSupplierName()+"'"); 
         List<Supplier_Details> data=q.list();
          for(Supplier_Details sid : data)
          {
              setCity(sid.getCity());
              setProvince(sid.getProvince());
              setStreet1(sid.getStreet1());
              setStreet2(sid.getStreet2());
              setPincode(sid.getPincode());
              setEmailId(sid.getEmailId());
              setContactNo1(sid.getContactNo1());
              setContactNo2(sid.getContactNo2());
              setSupplierName(sid.getSupplierName());
          }
            t.commit(); 
            
            return "success";
        }
       public String fillSupplierId()throws NullPointerException{
        Session s = HibernateUtil.getSession();
      Transaction t = s.beginTransaction();
   
    Supplier_Details supplier_Details;
     Query q=s.createQuery(" from Supplier_Details"); 
         List<Supplier_Details> data=q.list();
         if(data.isEmpty()) {
        } else {
             for(Supplier_Details sid : data)
             {
                 getStateslist().add(sid.getSupplierId());
                 getSupplierNamesList().add(sid.getSupplierName());
              
             }
        }
         
         t.commit(); 
         
         Session s1 = HibernateUtil.getSession();
      Transaction t1 = s1.beginTransaction();
         
         Current_Stock current_Stock;
     Query q1=s1.createQuery(" from Current_Stock"); 
         List<Current_Stock> data1=q1.list();
         if(data1.isEmpty()) {
        } else {
             for(Current_Stock cs : data1)
             {
                
                 getItemNamesList().add(cs.getName());
             }
        }
            t1.commit(); 
       return "success";
       }

    public String addStock()throws NullPointerException{
   Session s = HibernateUtil.getSession();
      Transaction t = s.beginTransaction();
   
    Supplier_Details supplier_Details;
    Query q1=s.createQuery(" from Supplier_Details where SupplierId='"+getSupplierId()+"'"); 
     List<Supplier_Details> data1=q1.list();
     supplier_Details=new Supplier_Details(getSupplierId(), getSupplierName(), getStreet1(), getStreet2(), getCity(), getProvince(), getPincode(), getEmailId(), getContactNo1(), getContactNo2());
      
         if(data1.isEmpty()){
          s.save(supplier_Details); 
         }
      
     
        getReq().setAttribute(getSupplierName(), getResult());
         
  t.commit();
   Session s1 = HibernateUtil.getSession();
      Transaction t1 = s1.beginTransaction();
    Item_History item_History;
      Query q=s1.createQuery(" from Current_Stock where itemId='"+getItemId()+"'"); 
         List<Current_Stock> data=q.list();
         if(data.isEmpty()){
          item_History=new Item_History(0, getName(), getCompanyName(), getQuantity(),getType(),getDescription(), getCostPerPiece(),getDateOfPurchase(),supplier_Details);
          Current_Stock current_Stock = new Current_Stock(getItemId(), getName(), getQuantity(), getCostPerPiece(),getType(),getDescription());
          s1.save(item_History);
          s1.save(current_Stock);          
         }
         else{
              item_History=new Item_History(0, getName(), getCompanyName(), getQuantity(),getType(),getDescription(), getCostPerPiece(),getDateOfPurchase(),supplier_Details);
          Current_Stock current_Stock =(Current_Stock)s1.get(Current_Stock.class, getItemId());
              current_Stock.setQuantity(getQuantity() + current_Stock.getQuantity());
              double newCost= ((current_Stock.getCostPerPiece()*current_Stock.getQuantity() + getQuantity()*getCostPerPiece())/current_Stock.getQuantity()+getQuantity());
              current_Stock.setCostPerPiece(newCost);
               s1.save(item_History);
               s1.save(current_Stock);
         
         }
             
     
        getReq().setAttribute(getSupplierName(), getResult());
         
  t1.commit(); 
       
        
        
        return "success";
    }

    public String getResult() {
        return result;
    }

    public void setResult(String result) {
        this.result = result;
    }

    public HttpServletRequest getReq() {
        return req;
    }

    public void setReq(HttpServletRequest req) {
        this.req = req;
    }

    public int getItemId() {
        return itemId;
    }

    public void setItemId(int itemId) {
        this.itemId = itemId;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public String getCompanyName() {
        return companyName;
    }

    public void setCompanyName(String companyName) {
        this.companyName = companyName;
    }

    public double getQuantity() {
        return quantity;
    }

    public void setQuantity(double quantity) {
        this.quantity=quantity;
    }

    public double getCostPerPiece() {
        return costPerPiece;
    }

    public void setCostPerPiece(double costPerPiece) {
        this.costPerPiece = costPerPiece;
    }

    

public int getSupplierId() {
        return supplierId;
    }

    public void setSupplierId(int supplierId) {
        this.supplierId = supplierId;
    }

    public String getSupplierName() {
        return supplierName;
    }

    public void setSupplierName(String supplierName) {
        this.supplierName = supplierName;
    }

    public String getStreet1() {
        return street1;
    }

    public void setStreet1(String street1) {
        this.street1 = street1;
    }

    public String getStreet2() {
        return street2;
    }

    public void setStreet2(String street2) {
        this.street2 = street2;
    }

    public String getCity() {
        return city;
    }

    public void setCity(String city) {
        this.city = city;
    }

    public String getProvince() {
        return province;
    }

    public void setProvince(String province) {
        this.province = province;
    }

    public String getPincode() {
        return pincode;
    }

    public void setPincode(String pincode) {
        this.pincode = pincode;
    }

    public String getEmailId() {
        return emailId;
    }

    public void setEmailId(String emailId) {
        this.emailId = emailId;
    }

    

    /**
     * @return the dateOfPurchase
     */
    public String getDateOfPurchase() {
        return dateOfPurchase;
    }

    /**
     * @param dateOfPurchase the dateOfPurchase to set
     */
    public void setDateOfPurchase(String dateOfPurchase) {
        this.dateOfPurchase = dateOfPurchase;
    }

    /**
     * @return the contactNo1
     */
    public String getContactNo1() {
        return contactNo1;
    }

    /**
     * @param contactNo1 the contactNo1 to set
     */
    public void setContactNo1(String contactNo1) {
        this.contactNo1 = contactNo1;
    }

    /**
     * @return the contactNo2
     */
    public String getContactNo2() {
        return contactNo2;
    }

    /**
     * @param contactNo2 the contactNo2 to set
     */
    public void setContactNo2(String contactNo2) {
        this.contactNo2 = contactNo2;
    }

    /**
     * @return the i
     */
    public int getI() {
        return i;
    }

    /**
     * @param i the i to set
     */
    public void setI(int i) {
        this.i = i;
    }

    /**
     * @return the stateslist
     */
    public ArrayList getStateslist() {
        return stateslist;
    }

    /**
     * @param stateslist the stateslist to set
     */
    public void setStateslist(ArrayList stateslist) {
        this.stateslist = stateslist;
    }

    /**
     * @return the state
     */
    public String getState() {
        return state;
    }

    /**
     * @param state the state to set
     */
    public void setState(String state) {
        this.state = state;
    }

    public String getType() {
        return type;
    }

    public void setType(String type) {
        this.type = type;
    }

    public String getDescription() {
        return description;
    }

    public void setDescription(String description) {
        this.description = description;
    }

    public ArrayList getSupplierNamesList() {
        return supplierNamesList;
    }

    public void setSupplierNamesList(ArrayList supplierNamesList) {
        this.supplierNamesList = supplierNamesList;
    }

    public ArrayList getItemNamesList() {
        return itemNamesList;
    }

    public void setItemNamesList(ArrayList itemNamesList) {
        this.itemNamesList = itemNamesList;
    }
}
