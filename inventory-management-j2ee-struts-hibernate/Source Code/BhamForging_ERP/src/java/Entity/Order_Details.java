/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package Entity;

import Utility.HibernateUtil;
import java.io.Serializable;
import java.util.List;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.Id;
import javax.persistence.ManyToOne;
import javax.persistence.OneToMany;
import org.hibernate.Query;
import org.hibernate.Session;
import org.hibernate.Transaction;

/**
 *
 * @author Kunwar
 */
@Entity
public class Order_Details implements Serializable {
    private int orderId;
    private String orderDescription;
    private String contactPerson;
    private String status;
    private int progress;
    private double productCost;
    private String newMaterialRequired;
    private List <Used_Stock> used_Stock;
    private Company_Details company_details_FK;
    private List <Product_Details> product_Details;

    public Order_Details() {
    }

    public Order_Details(int orderId, String orderDescription, String contactPerson, String status, int progress, double productCost, String newMaterialRequired, Company_Details company_details_FK) {
        this.orderId = orderId;
        this.orderDescription = orderDescription;
        this.contactPerson = contactPerson;
        this.status = status;
        this.progress = progress;
        this.productCost = productCost;
        this.newMaterialRequired = newMaterialRequired;
        this.company_details_FK = company_details_FK;
    }
    
    
    
    
    
    
     @Id
     @GeneratedValue
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

    
    public String isStatus() {
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

@OneToMany
    public List <Used_Stock> getUsed_Stock() {
        return used_Stock;
    }

    public void setUsed_Stock(List <Used_Stock> used_Stock) {
        this.used_Stock = used_Stock;
    }

@ManyToOne
    public Company_Details getCompany_details_FK() {
        return company_details_FK;
    }

    public void setCompany_details_FK(Company_Details company_details_FK) {
        this.company_details_FK = company_details_FK;
    }

    public String getContactPerson() {
        return contactPerson;
    }

    public void setContactPerson(String contactPerson) {
        this.contactPerson = contactPerson;
    }

    /**
     *
     * @return
     */
    @OneToMany
    public List <Product_Details> getProduct_Details() {
        return product_Details;
    }

    public void setProduct_Details(List <Product_Details> product_Details) {
        this.product_Details = product_Details;
    }
    
    
}
