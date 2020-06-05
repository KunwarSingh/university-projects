/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package Entity;

/**
 *
 * @author Legend
 */
import java.io.Serializable;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.Id;
import javax.persistence.ManyToOne;

/**
 *
 * @author Sony
 */
@Entity
public class User_Complaint implements Serializable{
  
    @Id
@GeneratedValue
    private int uId;
    private String actionTaken;
    private String address;
    private String areaOfCrime;
    private String category;
    private String city; 
    private String dateTime;
    private String description;
    private String emailId;
    private String fathersName;
    private String mobile;
    private String name;
    private String pincode;
    private String priority;
    private String status;
    
    private String verificationId;
    private String verificationType;
    
    @ManyToOne
    private Police_Station police_Station_FK;
    
    public User_Complaint(){}

    public User_Complaint(int uId, String actionTaken, String address, String areaOfCrime, String category, String city, String dateTime, String description, String emailId, String fathersName, String mobile, String name, String pincode, String priority, String status, String verificationId, String verificationType, Police_Station police_Station_FK) {
        this.uId = uId;
        this.actionTaken = actionTaken;
        this.address = address;
        this.areaOfCrime = areaOfCrime;
        this.category = category;
        this.city = city;
        this.dateTime = dateTime;
        this.description = description;
        this.emailId = emailId;
        this.fathersName = fathersName;
        this.mobile = mobile;
        this.name = name;
        this.pincode = pincode;
        this.priority = priority;
        this.status = status;
        this.verificationId = verificationId;
        this.verificationType = verificationType;
        this.police_Station_FK = police_Station_FK;
    }
   
    public int getuId() {
        return uId;
    }


    public void setuId(int uId) {
        this.uId = uId;
    }

    public String getActionTaken() {
        return actionTaken;
    }

    public void setActionTaken(String actionTaken) {
        this.actionTaken = actionTaken;
    }

    public String getAddress() {
        return address;
    }

    public void setAddress(String address) {
        this.address = address;
    }

    public String getAreaOfCrime() {
        return areaOfCrime;
    }

    public void setAreaOfCrime(String areaOfCrime) {
        this.areaOfCrime = areaOfCrime;
    }

    public String getCategory() {
        return category;
    }

    public void setCategory(String category) {
        this.category = category;
    }

    public String getCity() {
        return city;
    }

    public void setCity(String city) {
        this.city = city;
    }

    public String getDateTime() {
        return dateTime;
    }

    public void setDateTime(String dateTime) {
        this.dateTime = dateTime;
    }

    public String getDescription() {
        return description;
    }

    public void setDescription(String description) {
        this.description = description;
    }

    public String getEmailId() {
        return emailId;
    }

    public void setEmailId(String emailId) {
        this.emailId = emailId;
    }

    public String getFathersName() {
        return fathersName;
    }

    public void setFathersName(String fathersName) {
        this.fathersName = fathersName;
    }

    public String getMobile() {
        return mobile;
    }

    public void setMobile(String mobile) {
        this.mobile = mobile;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public String getPincode() {
        return pincode;
    }

    public void setPincode(String pincode) {
        this.pincode = pincode;
    }

    public String getPriority() {
        return priority;
    }

    public void setPriority(String priority) {
        this.priority = priority;
    }

    public String getStatus() {
        return status;
    }

    public void setStatus(String status) {
        this.status = status;
    }

    public String getVerificationId() {
        return verificationId;
    }

    public void setVerificationId(String verificationId) {
        this.verificationId = verificationId;
    }

    public String getVerificationType() {
        return verificationType;
    }

    public void setVerificationType(String verificationType) {
        this.verificationType = verificationType;
    }

    public Police_Station getPolice_Station_FK() {
        return police_Station_FK;
    }

    public void setPolice_Station_FK(Police_Station police_Station_FK) {
        this.police_Station_FK = police_Station_FK;
    }
   
    
}

