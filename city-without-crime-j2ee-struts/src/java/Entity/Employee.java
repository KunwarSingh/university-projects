/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package Entity;

import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.Id;

/**
 *
 * @author Legend
 */
@Entity
public class Employee {
    
    private int employeeId;
    private String name;
    private String depName;
    private String username;
    private String password;

   public Employee(){}
   
  

    public Employee(int employeeId, String depName, String name,  String password,String username) {
        this.employeeId = employeeId;
        this.name = name;
        this.depName = depName;
        this.username = username;
        this.password = password;
    }

    /**
     * @return the employeeId
     */ @Id
    @GeneratedValue
    public int getEmployeeId() {
        return employeeId;
    }

    /**
     * @param employeeId the employeeId to set
     */
   
    public void setEmployeeId(int employeeId) {
        this.employeeId = employeeId;
    }

    /**
     * @return the name
     */
    public String getName() {
        return name;
    }

    /**
     * @param name the name to set
     */
    public void setName(String name) {
        this.name = name;
    }

    /**
     * @return the depName
     */
    public String getDepName() {
        return depName;
    }

    /**
     * @param depName the depName to set
     */
    public void setDepName(String depName) {
        this.depName = depName;
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
