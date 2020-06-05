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
public class Criminal_Activity {
  
    @Id
    @GeneratedValue
    private int caId;   
    private String actionTaken;
    private String crimeType;
    private String dateOfCrime;
   
    @ManyToOne
    private Criminal_Record criminal_Record_FK; 
    
    public Criminal_Activity(){}
    
    public Criminal_Activity(int caId,String actionTaken,String crimeType, String dateOfCrime, Criminal_Record criminal_Record_FK){
        this.caId=caId;
        this.crimeType=crimeType;
        this.actionTaken=actionTaken;
        this.criminal_Record_FK=criminal_Record_FK;
        this.dateOfCrime=dateOfCrime;
        
        
    }

    public int getCaId() {
        return caId;
    }

    public void setCaId(int caId) {
        this.caId = caId;
    }

    public String getCrimeType() {
        return crimeType;
    }

    public void setCrimeType(String crimeType) {
        this.crimeType = crimeType;
    }

    public String getDateOfCrime() {
        return dateOfCrime;
    }

    public void setDateOfCrime(String dateOfCrime) {
        this.dateOfCrime = dateOfCrime;
    }

    public String getActionTaken() {
        return actionTaken;
    }

    public void setActionTaken(String actionTaken) {
        this.actionTaken = actionTaken;
    }

    public Criminal_Record getCriminal_Record_FK() {
        return criminal_Record_FK;
    }

    public void setCriminal_Record_FK(Criminal_Record criminal_Record_FK) {
        this.criminal_Record_FK = criminal_Record_FK;
    }

   

   
}
