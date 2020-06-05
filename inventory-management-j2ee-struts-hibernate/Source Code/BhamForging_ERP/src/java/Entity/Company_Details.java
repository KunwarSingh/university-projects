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
import javax.persistence.OneToMany;

/**
 *
 * @author Kunwar
 */
@Entity
public class Company_Details implements Serializable {
    private int companyId;
    private String companyName;
    private String street1;
    private String street2;
    private String city;
    private String province;
    private String pincode;
    private String emailId;
    private String companyHead;
    private String contactNo1;
    private String contactNo2;
private List <Order_Details> order_Details;

    public Company_Details() {
    }

    public Company_Details(int companyId, String companyName, String street1, String street2, String city, String province, String pincode, String emailId, String companyHead, String contactNo1, String contactNo2) {
        this.companyId = companyId;
        this.companyName = companyName;
        this.street1 = street1;
        this.street2 = street2;
        this.city = city;
        this.province = province;
        this.pincode = pincode;
        this.emailId = emailId;
        this.companyHead = companyHead;
        this.contactNo1 = contactNo1;
        this.contactNo2 = contactNo2;
    }
   

    public String getCompanyName() {
        return companyName;
    }

    public void setCompanyName(String companyName) {
        this.companyName = companyName;
    }

    public String getStreet1() {
        return street1;
    }

    public void setStreet1(String street1) {
        this.street1 = street1;
    }

    public String getStreet2() {
        return street2;
    }

    public void setStreet2(String street2) {
        this.street2 = street2;
    }

    public String getCity() {
        return city;
    }

    public void setCity(String city) {
        this.city = city;
    }

    public String getPincode() {
        return pincode;
    }

    public void setPincode(String pincode) {
        this.pincode = pincode;
    }

    public String getEmailId() {
        return emailId;
    }

    public void setEmailId(String emailId) {
        this.emailId = emailId;
    }

    public String getCompanyHead() {
        return companyHead;
    }

    public void setCompanyHead(String companyHead) {
        this.companyHead = companyHead;
    }

@OneToMany
    public List <Order_Details> getOrder_Details() {
        return order_Details;
    }

    public void setOrder_Details(List <Order_Details> order_Details) {
        this.order_Details = order_Details;
    }
    
    @Id
    @GeneratedValue
    public int getCompanyId() {
        return companyId;
    }

    public void setCompanyId(int companyId) {
        this.companyId = companyId;
    }

    public String getProvince() {
        return province;
    }

    public void setProvince(String province) {
        this.province = province;
    }

    public String getContactNo1() {
        return contactNo1;
    }

    public void setContactNo1(String contactNo1) {
        this.contactNo1 = contactNo1;
    }

    public String getContactNo2() {
        return contactNo2;
    }

    public void setContactNo2(String contactNo2) {
        this.contactNo2 = contactNo2;
    }
    
}
