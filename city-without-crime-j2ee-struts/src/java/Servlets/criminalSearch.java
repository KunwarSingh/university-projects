/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package Servlets;

import DAO.DBService;
import Entity.Criminal_Record;
import Entity.Police_Station;
import Entity.User_Complaint;
import Utility.HibernateUtil;
import java.io.IOException;
import java.io.PrintWriter;
import java.sql.ResultSet;
import java.sql.ResultSetMetaData;
import java.util.List;
import javax.servlet.RequestDispatcher;
import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import org.hibernate.Query;
import org.hibernate.Session;
import org.hibernate.Transaction;


/**
 *
 * @author Legend
 */
public class criminalSearch extends HttpServlet {

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
        try {            /* TODO output your page here. You may use following sample code. */
              out.println("<!DOCTYPE html>");
            out.println("<html>");
            out.println("<head>");
            out.println("<title>Servlet Fourth_Servlet</title>");            
            out.println("</head>");
            out.println("<body>");
            out.println("<h1>Servlet Fourth_Servlet at </h1>");
           
         String c=request.getParameter("Category");
        out.println(c);
     //   String query=("Select c.fName,c.lName,c.crimeLevel from Criminal_Record As c INNER JOIN Criminal_Activity as ca ON c.cid=ca.criminal_Record_FK_cid WHERE crimeType='"+c+"'");
     String query=("Select  * from Criminal_Record");
   
      //  ResultSetMetaData rsmd = DBService.getMetaData(query);
 int i=0;
        ResultSet rs=DBService.getData(query);
        out.println(c);
       while(  rs.next()){
         i++;
             out.println(c);
             String name=rs.getString("fName");
           request.setAttribute("fname"+i, name);
            request.setAttribute("lname"+i, rs.getString("lName"));
            request.setAttribute("imageFile"+i, rs.getString("imageFile"));
              request.setAttribute("cLevel"+i, rs.getString("crimeLevel"));
              
              out.println(name);
       } 
         RequestDispatcher rd = request.getRequestDispatcher("criminalDBHome.jsp");
          rd.forward(request, response);
        out.println(c);
     
       
        }catch(Exception e){}
          finally {            
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
