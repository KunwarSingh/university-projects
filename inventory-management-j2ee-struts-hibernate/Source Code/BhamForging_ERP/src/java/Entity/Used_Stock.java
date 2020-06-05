/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package Entity;

import java.io.Serializable;
import javax.persistence.Entity;
import javax.persistence.Id;
import javax.persistence.ManyToOne;

/**
 *
 * @author Kunwar
 */
@Entity
public class Used_Stock implements Serializable {
    private int itemId;
    private int quantity;
    private String Date;
    
    private Order_Details order_details_FK;

     @Id
    public int getItemId() {
        return itemId;
    }

    public void setItemId(int itemId) {
        this.itemId = itemId;
    }

    public int getQuantity() {
        return quantity;
    }

    public void setQuantity(int quantity) {
        this.quantity = quantity;
    }

    public String getDate() {
        return Date;
    }

    public void setDate(String Date) {
        this.Date = Date;
    }

@ManyToOne
    public Order_Details getOrder_details_FK() {
        return order_details_FK;
    }

    public void setOrder_details_FK(Order_Details order_details_FK) {
        this.order_details_FK = order_details_FK;
    }
     
}
