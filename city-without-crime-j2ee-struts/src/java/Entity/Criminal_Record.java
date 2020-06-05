/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package Entity;

import java.util.ArrayList;
import java.util.List;
import javax.persistence.*;

/**
 *
 * @author Legend
 */
@Entity
public class Criminal_Record {   
    @Id
    @GeneratedValue
    private int cId;
     private String crimeLevel;
    private String fName;
     private String gender;
     private String height;
     private String imageFile;
    private String lName;
   private int status;
    private String weight;
    
    
    @OneToMany
    private List<Criminal_Activity> crime_activity;
    @ManyToOne
    private Police_Station police_Station_FK;
    
    public Criminal_Record(){}
    
    public Criminal_Record(int cId,String crimeLevel,String fName , String gender , String height ,String imageFile,String lName, int status,String weight,Police_Station police_Station_FK  ){
    this.cId=cId;
    this.fName=fName;
    this.lName=lName;
    this.gender=gender;
    this.height=height;
    this.weight=weight;
    this.crimeLevel=crimeLevel;
    this.status=status;
    this.imageFile=imageFile;
    this.police_Station_FK=police_Station_FK;
}

    public int getcId() {
        return cId;
    }

    public void setcId(int cId) {
        this.cId = cId;
    }

    public String getfName() {
        return fName;
    }

    public void setfName(String fName) {
        this.fName = fName;
    }

    public String getlName() {
        return lName;
    }

    public void setlName(String lName) {
        this.lName = lName;
    }

    public String getGender() {
        return gender;
    }

    public void setGender(String gender) {
        this.gender = gender;
    }

    public String getHeight() {
        return height;
    }

    public void setHeight(String height) {
        this.height = height;
    }

    public String getWeight() {
        return weight;
    }

    public void setWeight(String weight) {
        this.weight = weight;
    }

    public String getCrimeLevel() {
        return crimeLevel;
    }

    public void setCrimeLevel(String crimeLevel) {
        this.crimeLevel = crimeLevel;
    }

    public int getStatus() {
        return status;
    }

    public void setStatus(int status) {
        this.status = status;
    }

    public String getImageFile() {
        return imageFile;
    }

    public void setImageFile(String imageFile) {
        this.imageFile = imageFile;
    }

    public Police_Station getPolice_Station_FK() {
        return police_Station_FK;
    }

    public void setPolice_Station_FK(Police_Station police_Station_FK) {
        this.police_Station_FK = police_Station_FK;
    }

  

   

    
    
   
    
}
