/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
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
import Utility.HibernateUtil;
import com.opensymphony.xwork2.ActionSupport;
import java.util.ArrayList;
import java.util.List;
import javax.servlet.http.HttpServletRequest;
import org.apache.struts2.interceptor.ServletRequestAware;
import org.hibernate.Criteria;
import org.hibernate.Query;
import org.hibernate.Session;
import org.hibernate.Transaction;

/**
 *
 * @author Kunwar
 */
public class OrderManagement extends ActionSupport implements ServletRequestAware{
     private int orderId;
    private String orderDescription;
    private String contactPerson;
    private String status;
    private int progress;
    private double productCost;
    private String newMaterialRequired;
    private int companyId;
    private String companyName;
    private String street1;
    private String street2;
    private String city;
    private String province;
    private String pincode;
    private String emailId;
    private String companyHead;
    private String contactNo1;
    private String contactNo2;
    private int productId;
    private String Name;
    private String Quantity;
    private double rateFixed;
    private String deliveryDate;
    private String Name2;
    private String Quantity2;
    private double rateFixed2;
    private String deliveryDate2;
    private String Name3;
    private String Quantity3;
    private double rateFixed3;
    private String deliveryDate3;
    private String Name4;
    private String Quantity4;
    private double rateFixed4;
    private String deliveryDate4;
    private String Name5;
    private String Quantity5;
    private double rateFixed5;
    private String deliveryDate5;
    private int itemsProcessed;
   private String processingStage;
   private int pStageId;
   private int processingStageId;
   private Product_Details product_details_FK;
     
    private ArrayList companyNamesList = new ArrayList();
     private HttpServletRequest req;
     
      @Override
    public void setServletRequest(HttpServletRequest hsr){
        setReq(hsr);
    }

     public String fillCompanyNames()throws NullPointerException{
        Session s = HibernateUtil.getSession();
      Transaction t = s.beginTransaction();
   
    Company_Details company_Details;
     Query q=s.createQuery(" from Company_Details"); 
         List<Company_Details> data=q.list();
         if(data.isEmpty()) {
        } else {
             for(Company_Details cid : data)
             {
                 
                 getCompanyNamesList().add(cid.getCompanyName());
              
             }
        }
         
         t.commit();   
       return "success";
       }
      public String fillCompanyDetails()throws NullPointerException{
             Session s = HibernateUtil.getSession();
      Transaction t = s.beginTransaction();
   
   Company_Details company_Details;
     Query q=s.createQuery(" from Company_Details where companyName='"+getCompanyName()+"'"); 
         List<Company_Details> data=q.list();
          for(Company_Details sid : data)
          {
              setCity(sid.getCity());
              setProvince(sid.getProvince());
              setStreet1(sid.getStreet1());
              setStreet2(sid.getStreet2());
              setPincode(sid.getPincode());
              setEmailId(sid.getEmailId());
              setContactNo1(sid.getContactNo1());
              setContactNo2(sid.getContactNo2());
              setCompanyHead(sid.getCompanyHead());
          }
            t.commit(); 
            
            return "success";
        }
        
     public String addOrder()throws NullPointerException{
   Session s = HibernateUtil.getSession();
      Transaction t = s.beginTransaction();
   
    Company_Details company_Details;
    Query q1=s.createQuery(" from Company_Details where companyName='"+getCompanyName()+"'"); 
     List<Company_Details> data1=q1.list();
     company_Details=new Company_Details(0,getCompanyName(),getStreet1(),getStreet2(),getCity(),getProvince(),getPincode(),getEmailId(), getCompanyHead(), getContactNo1(), getContactNo2());
     
         if(data1.isEmpty()){
          s.save(company_Details); 
          System.out.println("sssss");
         }
         
         setNewMaterialRequired("  Pieces ."+"Material Required for Order  - 1. "+getName()+"  "+getQuantity()+"  Pieces   2. "+getName2()+"  "+getQuantity2());
          Order_Details order_Details;
          order_Details= new Order_Details(0,getOrderDescription(),getContactPerson(),"Pending",0,0,getNewMaterialRequired(),company_Details);
        s.save(order_Details);
        
       if(getName2().isEmpty()){
        } else {
            Product_Details product_Details;
            product_Details = new Product_Details( 0, getName(), getQuantity(),getRateFixed(),getDeliveryDate(),order_Details);
            s.save(product_Details);
            
            Product_Processing product_processing11;
            product_processing11 = new Product_Processing(0,0,"Process 1",product_Details);
            s.save(product_processing11);
            Product_Processing product_processing12;
            product_processing12 = new Product_Processing(0,0,"Process 2",product_Details);
            s.save(product_processing12);
            Product_Processing product_processing13;
            product_processing13 = new Product_Processing(0,0,"Process 3",product_Details);
            s.save(product_processing13);
            Product_Processing product_processing14;
            product_processing14 = new Product_Processing(0,0,"Process 4",product_Details);
            s.save(product_processing14);
            Product_Processing product_processing15;
            product_processing15 = new Product_Processing(0,0,"Process 5",product_Details);
            s.save(product_processing15);
       }
        
            if(getName2().isEmpty()){
        } else {
          Product_Details product_Details2;
          product_Details2 = new Product_Details( 0, getName2(), getQuantity2(),getRateFixed2(),getDeliveryDate2(),order_Details);
          s.save(product_Details2);
          
           Product_Processing product_processing21;
          product_processing21 = new Product_Processing(0,0,"Process 1",product_Details2);
          s.save(product_processing21);
          Product_Processing product_processing22;
          product_processing22 = new Product_Processing(0,0,"Process 2",product_Details2);
          s.save(product_processing22);
          Product_Processing product_processing23;
          product_processing23 = new Product_Processing(0,0,"Process 3",product_Details2);
          s.save(product_processing23);
          Product_Processing product_processing24;
          product_processing24 = new Product_Processing(0,0,"Process 4",product_Details2);
          s.save(product_processing24);
          Product_Processing product_processing25;
          product_processing25 = new Product_Processing(0,0,"Process 5",product_Details2);
          s.save(product_processing25);
            }
             /*  if(Name3.isEmpty()){        // To be corrected
        } else {
          Product_Details product_Details3;
          product_Details3 = new Product_Details( 0, Name3, Quantity3,rateFixed3,deliveryDate3,order_Details);
          s.save(product_Details3);
          Product_Details product_Details4;
          product_Details4 = new Product_Details( 0, Name4, Quantity4,rateFixed4,deliveryDate4,order_Details);
          s.save(product_Details4);
          Product_Details product_Details5;
          product_Details5 = new Product_Details( 0, Name5, Quantity5,rateFixed5,deliveryDate5,order_Details);
          s.save(product_Details5);
               }*/

  t.commit();
  
        return "success";
    }
     
     
       public String fillOrderProgress()throws NullPointerException{
             Session s = HibernateUtil.getSession();
             Transaction t = s.beginTransaction();
           
             List <Order_Details> orderList = new <Order_Details> ArrayList();
             List <Product_Details> productList1 = new <Product_Details> ArrayList();
             List <Product_Details> productList2 = new <Product_Details> ArrayList();
             List <Product_Processing> productProcessList = new <Product_Processing> ArrayList();
   
          
            
         int i=1,j=1,k=1;        // to increment order 1 , 2 3 etc
         
    Query q=s.createQuery(" from Order_Details where status='Pending'");
    List<Order_Details> data=q.list();
    for(Order_Details od : data){
            getReq().setAttribute("order_Details"+i, od); 
            orderList.add(od);
            Query q1=s.createQuery(" from Product_Details where order_details_FK='"+od.getOrderId()+"'");
            List<Product_Details> data1=q1.list();
            for(Product_Details pd : data1){
                         getReq().setAttribute("product_Details"+i+j, pd);
                         if(i==1){
                         productList1.add(pd);}
                         if(i==2){
                             productList2.add(pd);}
                         Query q2=s.createQuery(" from Product_Processing where product_details_FK='"+pd.getProductId()+"'");
                         List<Product_Processing> data2=q2.list();
                         for(Product_Processing pp : data2){
                             productProcessList.add(pp);
                          getReq().setAttribute("product_Processing"+i+j+k, pp);
                          k++;
                         }j++;
            }i++;
    }
    getReq().setAttribute("orderList", orderList);
    getReq().setAttribute("productList1", productList1);
    getReq().setAttribute("productList2", productList2);
    
     
            t.commit(); 
       return "success";
       }  
       
       public String updateProgress(){
             Session s = HibernateUtil.getSession();
             Transaction t = s.beginTransaction();
          //  int itemsProcess=Integer.parseInt(getReq().getParameter("itemsProcess"));
          //  int  pStage=Integer.parseInt(getReq().getParameter("pStage"));
          
             Product_Processing product_Processing =(Product_Processing)s.get(Product_Processing.class, getProcessingStageId());
             product_Processing.setItemsProcessed(getItemsProcessed());
             s.update(product_Processing);
     
       t.commit(); 
       return "success";
       }  
    public HttpServletRequest getReq() {
        return req;
    }

    public void setReq(HttpServletRequest req) {
        this.req = req;
    }

    public int getOrderId() {
        return orderId;
    }

    public void setOrderId(int orderId) {
        this.orderId = orderId;
    }

    public String getOrderDescription() {
        return orderDescription;
    }

    public void setOrderDescription(String orderDescription) {
        this.orderDescription = orderDescription;
    }

    public String getContactPerson() {
        return contactPerson;
    }

    public void setContactPerson(String contactPerson) {
        this.contactPerson = contactPerson;
    }

    public String getStatus() {
        return status;
    }

    public void setStatus(String status) {
        this.status = status;
    }

    public int getProgress() {
        return progress;
    }

    public void setProgress(int progress) {
        this.progress = progress;
    }

    public double getProductCost() {
        return productCost;
    }

    public void setProductCost(double productCost) {
        this.productCost = productCost;
    }

    public String getNewMaterialRequired() {
        return newMaterialRequired;
    }

    public void setNewMaterialRequired(String newMaterialRequired) {
        this.newMaterialRequired = newMaterialRequired;
    }

    public int getCompanyId() {
        return companyId;
    }

    public void setCompanyId(int companyId) {
        this.companyId = companyId;
    }

    public String getCompanyName() {
        return companyName;
    }

    public void setCompanyName(String companyName) {
        this.companyName = companyName;
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

    public String getCompanyHead() {
        return companyHead;
    }

    public void setCompanyHead(String companyHead) {
        this.companyHead = companyHead;
    }

    public String getContactNo1() {
        return contactNo1;
    }

    public void setContactNo1(String contactNo1) {
        this.contactNo1 = contactNo1;
    }

    public String getContactNo2() {
        return contactNo2;
    }

    public void setContactNo2(String contactNo2) {
        this.contactNo2 = contactNo2;
    }

    public int getProductId() {
        return productId;
    }

    public void setProductId(int productId) {
        this.productId = productId;
    }

    public String getName() {
        return Name;
    }

    public void setName(String Name) {
        this.Name = Name;
    }

    public String getQuantity() {
        return Quantity;
    }

    public void setQuantity(String Quantity) {
        this.Quantity = Quantity;
    }

    public double getRateFixed() {
        return rateFixed;
    }

    public void setRateFixed(double rateFixed) {
        this.rateFixed = rateFixed;
    }

    public String getDeliveryDate() {
        return deliveryDate;
    }

    public void setDeliveryDate(String deliveryDate) {
        this.deliveryDate = deliveryDate;
    }

    public String getName2() {
        return Name2;
    }

    public void setName2(String Name2) {
        this.Name2 = Name2;
    }

    public String getQuantity2() {
        return Quantity2;
    }

    public void setQuantity2(String Quantity2) {
        this.Quantity2 = Quantity2;
    }

    public double getRateFixed2() {
        return rateFixed2;
    }

    public void setRateFixed2(double rateFixed2) {
        this.rateFixed2 = rateFixed2;
    }

    public String getDeliveryDate2() {
        return deliveryDate2;
    }

    public void setDeliveryDate2(String deliveryDate2) {
        this.deliveryDate2 = deliveryDate2;
    }

    public String getName3() {
        return Name3;
    }

    public void setName3(String Name3) {
        this.Name3 = Name3;
    }

    public String getQuantity3() {
        return Quantity3;
    }

    public void setQuantity3(String Quantity3) {
        this.Quantity3 = Quantity3;
    }

    public double getRateFixed3() {
        return rateFixed3;
    }

    public void setRateFixed3(double rateFixed3) {
        this.rateFixed3 = rateFixed3;
    }

    public String getDeliveryDate3() {
        return deliveryDate3;
    }

    public void setDeliveryDate3(String deliveryDate3) {
        this.deliveryDate3 = deliveryDate3;
    }

    public String getName4() {
        return Name4;
    }

    public void setName4(String Name4) {
        this.Name4 = Name4;
    }

    public String getQuantity4() {
        return Quantity4;
    }

    public void setQuantity4(String Quantity4) {
        this.Quantity4 = Quantity4;
    }

    public double getRateFixed4() {
        return rateFixed4;
    }

    public void setRateFixed4(double rateFixed4) {
        this.rateFixed4 = rateFixed4;
    }

    public String getDeliveryDate4() {
        return deliveryDate4;
    }

    public void setDeliveryDate4(String deliveryDate4) {
        this.deliveryDate4 = deliveryDate4;
    }

    public String getName5() {
        return Name5;
    }

    public void setName5(String Name5) {
        this.Name5 = Name5;
    }

    public String getQuantity5() {
        return Quantity5;
    }

    public void setQuantity5(String Quantity5) {
        this.Quantity5 = Quantity5;
    }

    public double getRateFixed5() {
        return rateFixed5;
    }

    public void setRateFixed5(double rateFixed5) {
        this.rateFixed5 = rateFixed5;
    }

    public String getDeliveryDate5() {
        return deliveryDate5;
    }

    public void setDeliveryDate5(String deliveryDate5) {
        this.deliveryDate5 = deliveryDate5;
    }

    public int getItemsProcessed() {
        return itemsProcessed;
    }

    public void setItemsProcessed(int itemsProcessed) {
        this.itemsProcessed = itemsProcessed;
    }

    public String getProcessingStage() {
        return processingStage;
    }

    public void setProcessingStage(String processingStage) {
        this.processingStage = processingStage;
    }

    public ArrayList getCompanyNamesList() {
        return companyNamesList;
    }

    public void setCompanyNamesList(ArrayList companyNamesList) {
        this.companyNamesList = companyNamesList;
    }

    public int getpStageId() {
        return pStageId;
    }

    public void setpStageId(int pStageId) {
        this.pStageId = pStageId;
    }

    public int getProcessingStageId() {
        return processingStageId;
    }

    public void setProcessingStageId(int processingStageId) {
        this.processingStageId = processingStageId;
    }

    public Product_Details getProduct_details_FK() {
        return product_details_FK;
    }

    public void setProduct_details_FK(Product_Details product_details_FK) {
        this.product_details_FK = product_details_FK;
    }
    
}
