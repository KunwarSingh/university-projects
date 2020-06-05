/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package Entity;

import java.io.Serializable;
import java.util.List;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.Id;
import javax.persistence.ManyToOne;
import javax.persistence.OneToMany;

/**
 *
 * @author Kunwar
 */
@Entity
public class Product_Details implements Serializable {
    
    private int productId;
    private String Name;
    private String Quantity;
    private double rateFixed;
    private String deliveryDate;
    private List <Product_Processing> product_Processing;
    private Order_Details order_details_FK;

    public Product_Details() {
    }

    
    public Product_Details(int productId, String Name, String Quantity, double rateFixed, String deliveryDate, Order_Details order_details_FK) {
        this.productId = productId;
        this.Name = Name;
        this.Quantity = Quantity;
        this.rateFixed = rateFixed;
        this.deliveryDate = deliveryDate;
        this.order_details_FK = order_details_FK;
    }

    @Id
    @GeneratedValue
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
@OneToMany
    public List <Product_Processing> getProduct_Processing() {
        return product_Processing;
    }

    public void setProduct_Processing(List <Product_Processing> product_Processing) {
        this.product_Processing = product_Processing;
    }
@ManyToOne
    public Order_Details getOrder_details_FK() {
        return order_details_FK;
    }

    public void setOrder_details_FK(Order_Details order_details_FK) {
        this.order_details_FK = order_details_FK;
    }
    
    
    
}
