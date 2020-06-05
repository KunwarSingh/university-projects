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
public class Product_Processing implements Serializable {
   private int processingStageId; 
   private int itemsProcessed;
   private String processingStage;
   private Product_Details product_details_FK;

    public Product_Processing() {
    }

    public Product_Processing(int processingStageId, int itemsProcessed, String processingStage, Product_Details product_details_FK) {
        this.processingStageId = processingStageId;
        this.itemsProcessed = itemsProcessed;
        this.processingStage = processingStage;
        this.product_details_FK = product_details_FK;
    }
    
   @Id
   @GeneratedValue
    public int getProcessingStageId() {
        return processingStageId;
    }

    public void setProcessingStageId(int processingStageId) {
        this.processingStageId = processingStageId;
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
@ManyToOne
    public Product_Details getProduct_details_FK() {
        return product_details_FK;
    }

    public void setProduct_details_FK(Product_Details product_details_FK) {
        this.product_details_FK = product_details_FK;
    }
    
}
