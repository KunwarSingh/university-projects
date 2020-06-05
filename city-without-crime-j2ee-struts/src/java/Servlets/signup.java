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
import java.util.List;
import javax.servlet.RequestDispatcher;
import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;
import org.hibernate.Query;
import org.hibernate.Session;
import org.hibernate.Transaction;

/**
 *
 * @author Sony
 */
public class signup extends HttpServlet {

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
           
        
        
        try{
            
          
          String u= (String)(request.getParameter("name"));
          String p= (String)(request.getParameter("password"));
          String a= (String)(request.getParameter("areatype"));
          String d= (String)(request.getParameter("address"));
          String f= (String)(request.getParameter("fax"));
          String m= (String)(request.getParameter("mobile"));
          String h= (String)(request.getParameter("phead"));
          String o= (String)(request.getParameter("other"));
          String k= (String)(request.getParameter("phone"));
          String l= (String)(request.getParameter("username"));
          
           Session s = HibernateUtil.getSession();
      Transaction t = s.beginTransaction();
      Police_Station  ps= new Police_Station(0,d,a,f,m,u,o,p,h,k,l);
 
          s.save(ps);
      t.commit();
      request.setAttribute("status","You are registerd successfully . \n Click on Login button to sign in .");
     RequestDispatcher rd = request.getRequestDispatcher("index.jsp");
               rd.forward(request, response);
    
          out.println("registered");
      
         
        }catch(Exception e){}
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
