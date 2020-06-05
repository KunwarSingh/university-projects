/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package Servlets;

import Entity.Police_Station;
import Entity.User_Complaint;
import Utility.HibernateUtil;
import java.io.IOException;
import java.io.PrintWriter;
import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import org.hibernate.Session;
import org.hibernate.Transaction;
import java.util.Date;
import java.util.List;
import javax.servlet.RequestDispatcher;
import org.hibernate.Query;

/**
 *
 * @author Legend
 */
public class userReport extends HttpServlet {

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
            /* TODO output your page here. You may use following sample code. */
           // String actionTaken = request.getParameter("actionTaken");
            String category = request.getParameter("category");
            String city = request.getParameter("city");
            String areaOfCrime=request.getParameter("areaOfCrime");
          // String dateTime = java.util.Date.Date();
            String description = request.getParameter("description");
            String emailId = request.getParameter("emailId");
            String fathersName = request.getParameter("fathersName");
            String mobile = request.getParameter("mobile");
            String name = request.getParameter("name");
            String pincode = request.getParameter("pincode");
            String priority = request.getParameter("priority");
         //   String status = request.getParameter("status");
            String address = request.getParameter("address");
            String verificationId = request.getParameter("verificationId");
            String verificationType = request.getParameter("verificationType");
       
      Session s = HibernateUtil.getSession();
      Transaction t = s.beginTransaction();
       Query q=s.createQuery("from Police_Station where name='"+areaOfCrime+"'");      
         List<Police_Station> data=q.list();
         for(Police_Station ps: data){
      User_Complaint e=new User_Complaint(0,"none",address,areaOfCrime,category,city,"Now();",description,emailId,fathersName,mobile,name,pincode,priority,"none",verificationId,verificationType,ps);
      s.save(e);
         }
      t.commit();
      request.setAttribute("Status","Thank you");
     RequestDispatcher rd = request.getRequestDispatcher("contactUs.jsp");
               rd.forward(request, response);
    
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
