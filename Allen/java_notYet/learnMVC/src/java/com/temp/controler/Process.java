package com.temp.controler;

import java.io.IOException;
import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import com.temp.model.User;
public class Process extends HttpServlet{
 public void doPost(HttpServletRequest request,HttpServletResponse response)throws ServletException,IOException{
 
    String Name= request.getParameter("Name");
    String Email= request.getParameter("Email");
     User user=new User();
     user.setName(Name);
     user.setEmail(Email);
     request.setAttribute("user", user);
     request.getRequestDispatcher("result.jsp").forward(request, response);
     
 }
    
    
    
    
}
