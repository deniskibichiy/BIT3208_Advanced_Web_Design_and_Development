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


        if(username.equals("admin")
                && password.equals("1234")) {


            HttpSession session =
                    request.getSession();


            session.setAttribute(
                    "username",
                    username
            );


            response.sendRedirect(
                    "dashboard.jsp"
            );


        } else {


            response.sendRedirect(
                    "login.jsp"
            );

        }

    }

}