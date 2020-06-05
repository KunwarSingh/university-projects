/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package Entity;

import java.io.Serializable;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.Id;
import javax.persistence.ManyToOne;

/**
 *
 * @author Kunwar
 */
@Entity
public class Item_History implements Serializable {
    
    private int itemId;
    private String name;
    private String companyName;
    private double quantity;
    private String type;
    private String description;
    private double costPerPiece;
    private String dateOfPurchase;
    private Supplier_Details supplier_details_FK;

    public Item_History() {
    }

    public Item_History(int itemId, String name, String companyName, double quantity, String type, String description, double costPerPiece, String dateOfPurchase, Supplier_Details supplier_details_FK) {
        this.itemId = itemId;
        this.name = name;
        this.companyName = companyName;
        this.quantity = quantity;
        this.type = type;
        this.description = description;
        this.costPerPiece = costPerPiece;
        this.dateOfPurchase = dateOfPurchase;
        this.supplier_details_FK = supplier_details_FK;
    }

    /**
     *
     * @return
     */
    @Id
    @GeneratedValue
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

  

    public double getCostPerPiece() {
        return costPerPiece;
    }

    public void setCostPerPiece(double costPerPiece) {
        this.costPerPiece = costPerPiece;
    }

    public String getDateOfPurchase() {
        return dateOfPurchase;
    }
    
    public void setDateOfPurchase(String dateOfPurchase ){
       this.dateOfPurchase=dateOfPurchase;
    }

    public void setDate(String dateOfPurchase) {
        this.dateOfPurchase = dateOfPurchase;
    }

@ManyToOne
    public Supplier_Details getSupplier_details_FK() {
        return supplier_details_FK;
    }

    public void setSupplier_details_FK(Supplier_Details supplier_details_FK) {
        this.supplier_details_FK = supplier_details_FK;
    }

    public double getQuantity() {
        return quantity;
    }

    public void setQuantity(double quantity) {
        this.quantity = quantity;
    }

    public String getDescription() {
        return description;
    }

    public void setDescription(String description) {
        this.description = description;
    }

    public String getType() {
        return type;
    }

    public void setType(String type) {
        this.type = type;
    }
    
    
}
