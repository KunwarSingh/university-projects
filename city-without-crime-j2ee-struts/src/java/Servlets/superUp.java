/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package Servlets;

import Entity.Criminal_Activity;
import Entity.Criminal_Record;
import Utility.HibernateUtil;
import java.io.IOException;
import java.io.PrintWriter;
import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import org.hibernate.Session;
import org.hibernate.Transaction;

/**
 *
 * @author nishant
 */
public class superUp extends HttpServlet {

    /**
     * Processes requests for both HTTP
     * <code>GET</code> and
     * <code>POST</code> methods.
     *
     * @param request servlet request
     * @param response servlet response
     * @throws ServletException if a servlet-specific error occurs
     * @throws IOException if an I/O error occurs
     */
    protected void processRequest(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        response.setContentType("text/html;charset=UTF-8");
        PrintWriter out = response.getWriter();
        try {
           
          
int oldcaid =Integer.parseInt(request.getParameter("caid_up"));            
String crimeLevel = request.getParameter("crimelevel_up");
String fName =request.getParameter("fname_up") ;
String lName = request.getParameter("lastname_up");
String gender = request.getParameter("gender_up");
String height = request.getParameter("height_up");
String imageFile = request.getParameter("imagefile_up");
int status = Integer.parseInt(request.getParameter("status_up"));
String weight = request.getParameter("weight_up");
String branch = request.getParameter("branch_up");
      
            
             Session s = HibernateUtil.getSession();
      Transaction t = s.beginTransaction();
      
      Criminal_Record cr = (Criminal_Record)s.get(Criminal_Record.class,oldcaid);
      
      cr.setCrimeLevel(crimeLevel);
      cr.setGender(gender);
      cr.setHeight(height);
      cr.setImageFile(imageFile);
      cr.setStatus(status);
      cr.setfName(fName);
      cr.setlName(lName);
      cr.setWeight(weight);
     
     
      s.update(cr);
      
      
          
      int x = Integer.parseInt(request.getParameter("crid_up")) ;
String y = request.getParameter("actiontaken_up") ;
String z = request.getParameter("crimeactivity_up") ;
String as = request.getParameter("dateofcrime_up");

      
Criminal_Activity ca = (Criminal_Activity)s.get(Criminal_Activity.class, x);

ca.setActionTaken(y);
ca.setCrimeType(z);
ca.setDateOfCrime(as);

s.update(ca);

      
      
      t.commit();  
          
          out.println("Updated!!");
            
            
            
        } finally {            
            out.close();
        }
    }

    // <editor-fold defaultstate="collapsed" desc="HttpServlet methods. Click on the + sign on the left to edit the code.">
    /**
     * Handles the HTTP
     * <code>GET</code> method.
     *
     * @param request servlet request
     * @param response servlet response
     * @throws ServletException if a servlet-specific error occurs
     * @throws IOException if an I/O error occurs
     */
    @Override
    protected void doGet(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        processRequest(request, response);
    }

    /**
     * Handles the HTTP
     * <code>POST</code> method.
     *
     * @param request servlet request
     * @param response servlet response
     * @throws ServletException if a servlet-specific error occurs
     * @throws IOException if an I/O error occurs
     */
    @Override
    protected void doPost(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        processRequest(request, response);
    }

    /**
     * Returns a short description of the servlet.
     *
     * @return a String containing servlet description
     */
    @Override
    public String getServletInfo() {
        return "Short description";
    }// </editor-fold>
}
