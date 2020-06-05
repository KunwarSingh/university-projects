/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package Servlets;

import DAO.DBService;

import Entity.Police_Station;
import Utility.HibernateUtil;
import java.io.IOException;
import java.io.PrintWriter;
import java.sql.ResultSet;
import java.util.List;
import javax.servlet.RequestDispatcher;
import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;
import org.hibernate.Query;
import org.hibernate.Session;

/**
 *
 * @author Legend
 */
public class authorisation extends HttpServlet {

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
            String u = request.getParameter("username");
            String p = request.getParameter("password");
            
            String dep=null;
            String name=null;
            boolean access = false;
           
         Session s=HibernateUtil.getSession();
         Query q=s.createQuery("from Police_Station where username='"+u+"'");
         
         List<Police_Station> data=q.list();
      //  Police_Station ps;
         // response.sendRedirect("psAdminHome.jsp");
         for(Police_Station ps: data){
           //out.println("<h1> Name : "+ps.getName()+"<h1>");
             access=true;
             HttpSession session = request.getSession();
             session.setAttribute("username",u);
          
             // session.setAttribute("password", p);
            // session.setAttribute("name",name);
             session.setAttribute("ps",ps);
            
             response.sendRedirect("psAdminHome.jsp");
           //  RequestDispatcher rd = request.getRequestDispatcher("psAdminHome.jsp");
          //     rd.forward(request, response);
              // rd.include(request,response);
             
             
         }
        
           
       
         
        /*
            String query="Select * from police_station where username='"+u+"' AND password='"+p+"'";
            ResultSet rs=DBService.getData(query);
           
                       
            while(rs.next()){
            access=true;
            dep = rs.getString("depName");
            name = rs.getString("name");
            request.setAttribute("dep", dep);
            request.setAttribute("name", name);
            
            }}catch(Exception e){}
            */
            
         
           
          
          
           
            
           
            if(access=false){
           request.setAttribute("status","wrong username or password");
         //  response.sendRedirect("login.jsp");
            RequestDispatcher rd = request.getRequestDispatcher("index.jsp");
                rd.forward(request, response);
               //   rd.include(request, response);
           }
           
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
