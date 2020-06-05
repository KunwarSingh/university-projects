
package Entity;



/**
 *
 * @author Legend
 */
import java.io.Serializable;
import java.util.ArrayList;
import java.util.List;
import javax.persistence.*;


/**
 *
 * @author Legend
 */
@Entity
public class Police_Station implements Serializable {
   
 
    @Id
    @GeneratedValue
    private int pId;  
     private String address;
      private String areaType;
       private String fax;
        private String mobile;
    private String name;    
   private String other;
    private String password;
      private String phead;
    private String phone; 
    private String username;

//@OneToMany(targetEntity=Criminal_Record.class mapped by "pId");
@OneToMany
private List <Criminal_Record> criminal_Record;
@OneToMany
private List <News> news;
@OneToMany
private List <User_Complaint> user_Complaint; 

    public Police_Station() {
    }
public Police_Station(int pId,String address,String areaType,String fax,String mobile,String name,String other,String password,String phead,String phone,String username)
{
this.pId=pId;
this.name=name;
this.address=address;
this.phone=phone;
this.mobile=mobile;
this.fax=fax;
this.phead=phead;
this.username=username;
this.password=password;
this.areaType=areaType;
this.other=other;



}

    public int getpId() {
        return pId;
    }

    public void setpId(int pId) {
        this.pId = pId;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public String getAddress() {
        return address;
    }

    public void setAddress(String address) {
        this.address = address;
    }

    public String getPhone() {
        return phone;
    }

    public void setPhone(String phone) {
        this.phone = phone;
    }

    public String getMobile() {
        return mobile;
    }

    public void setMobile(String mobile) {
        this.mobile = mobile;
    }

    public String getFax() {
        return fax;
    }

    public void setFax(String fax) {
        this.fax = fax;
    }

    public String getPhead() {
        return phead;
    }

    public void setPhead(String phead) {
        this.phead = phead;
    }

    public String getAreaType() {
        return areaType;
    }

    public void setAreaType(String areaType) {
        this.areaType = areaType;
    }

    public String getOther() {
        return other;
    }

    public void setOther(String other) {
        this.other = other;
    }

    public String getUsername() {
        return username;
    }

    public void setUsername(String username) {
        this.username = username;
    }

    public String getPassword() {
        return password;
    }

    public void setPassword(String password) {
        this.password = password;
    }


   
       

    
    
}
