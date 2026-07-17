package com.ehealth;

import jakarta.servlet.ServletException;
import jakarta.servlet.annotation.WebServlet;
import jakarta.servlet.http.*;

import java.io.IOException;


@WebServlet("/LoginServlet")
public class LoginServelet extends HttpServlet {

    private static final long serialVersionUID = 1L;


    protected void doPost(HttpServletRequest request,
                          HttpServletResponse response)
            throws ServletException, IOException {


        String username =
                request.getParameter("username");


        String password =
                request.getParameter("password");
        UserDAO dao = new UserDAO();
        if(dao.validateUser(username, password)) {
        	
        	HttpSession session = request.getSession();

        	session.setAttribute(
        	        "username",
        	        username
        	);


        	session.setAttribute(
        	        "loginTime",
        	        new java.util.Date()
        	);


            String remember =
                request.getParameter("remember");


            if(remember != null) {


                Cookie cookie =
                    new Cookie("username", username);


                cookie.setMaxAge(
                    7 * 24 * 60 * 60
                );


                response.addCookie(cookie);

            }
            String theme =
                    request.getParameter("theme");


            if(theme != null) {


                Cookie themeCookie =
                        new Cookie("theme", theme);


                themeCookie.setMaxAge(
                        30 * 24 * 60 * 60
                );


                response.addCookie(themeCookie);

            }


            response.sendRedirect("dashboard.jsp");


        }
    }
    
}

