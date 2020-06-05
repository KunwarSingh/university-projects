/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package Servlets;

import Entity.Criminal_Activity;
import Entity.Criminal_Record;
import Entity.Police_Station;
import Entity.User_Complaint;
import Utility.HibernateUtil;
import java.io.IOException;
import java.io.PrintWriter;
import java.util.List;
import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import org.hibernate.Query;
import org.hibernate.Session;
import org.hibernate.Transaction;

/**
 *
 * @author nishant
 */
public class superAd extends HttpServlet {

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
            
            
           // String cid = request.getParameter("cid") ;
String crimeLevel = request.getParameter("crimelevel");
String fName =request.getParameter("fname") ;
String lName = request.getParameter("lastname");
String gender = request.getParameter("gender");
String height = request.getParameter("height");
String imageFile = request.getParameter("imagefile");
int status = Integer.parseInt(request.getParameter("status"));
String weight = request.getParameter("weight");
String branch = request.getParameter("branch");
      
int x = Integer.parseInt(request.getParameter("caid")) ;
String y = request.getParameter("actiontaken") ;
String z = request.getParameter("crimeactivity") ;
String as = request.getParameter("dateofcrime");



          

//String q ="insert into criminal_record1 values(1,'ubu')";
  Session s = HibernateUtil.getSession();
      Transaction t = s.beginTransaction();
      Criminal_Record c=null;
      Criminal_Activity ca ;
      // Query q=s.createQuery("from Police_Station where name='"+areaOfCrime+"'");
      Query q=s.createQuery("from Police_Station where name='"+branch+"'"); 
         List<Police_Station> data=q.list();
          for(Police_Station ps : data)
          {
      c= new Criminal_Record(1,crimeLevel,fName ,gender ,height ,imageFile,lName,status,weight,ps);
      ca= new Criminal_Activity(x,y,z,as,c);
      s.save(ca);  
      s.save(c);
     
        }
         
  t.commit();
  out.println("Data Added");
            
            
           
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
