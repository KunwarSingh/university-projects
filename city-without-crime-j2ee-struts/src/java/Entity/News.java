/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package Entity;

/**
 *
 * @author Legend
 */
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.Id;
import javax.persistence.ManyToOne;

@Entity
  public class News {
    @Id
    @GeneratedValue
    private int nId;
    private String datetime;
    private String description;
    private String image;
    private String type;
   
    
    @ManyToOne
    private Police_Station police_Station_FK;
    
    public News(){}
    
    public News(int nId,String datetime,String description,String image,String type,Police_Station police_Station_FK){
        this.nId=nId;
        this.description=description;
        this.datetime=datetime;
        this.type=type;
        this.image=image;
        this.police_Station_FK=police_Station_FK;
        
    }

   
    public int getnId() {
        return nId;
    }

    
    public void setnId(int nId) {
        this.nId = nId;
    }

   
    public String getDescription() {
        return description;
    }

   
    public void setDescription(String description) {
        this.description = description;
    }

   
    public String getDatetime() {
        return datetime;
    }

   
    public void setDatetime(String datetime) {
        this.datetime = datetime;
    }

    
    public String getType() {
        return type;
    }

   
    public void setType(String type) {
        this.type = type;
    }

   
    public String getImage() {
        return image;
    }

   
    public void setImage(String image) {
        this.image = image;
    }

    public Police_Station getPolice_Station_FK() {
        return police_Station_FK;
    }

    public void setPolice_Station_FK(Police_Station police_Station_FK) {
        this.police_Station_FK = police_Station_FK;
    }

    

    

   


    
    
}
