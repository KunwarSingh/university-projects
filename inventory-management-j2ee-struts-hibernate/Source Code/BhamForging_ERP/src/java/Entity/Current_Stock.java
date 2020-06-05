/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package Entity;

import java.io.Serializable;
import javax.persistence.Entity;
import javax.persistence.Id;

/**
 *
 * @author Kunwar
 */
@Entity
public class Current_Stock implements Serializable {
    private int itemId;
    private String name;
    private double quantity;
    private double costPerPiece;
    private String type;
    private String description;

    public Current_Stock() {
    }

    public Current_Stock(int itemId, String name, double quantity, double costPerPiece, String type, String description) {
        this.itemId = itemId;
        this.name = name;
        this.quantity = quantity;
        this.costPerPiece = costPerPiece;
        this.type = type;
        this.description = description;
    }

    
   
    

    @Id
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

    

    public double getCostPerPiece() {
        return costPerPiece;
    }

    public void setCostPerPiece(double costPerPiece) {
        this.costPerPiece = costPerPiece;
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

    public double getQuantity() {
        return quantity;
    }

    public void setQuantity(double quantity) {
        this.quantity = quantity;
    }
    
    
}
