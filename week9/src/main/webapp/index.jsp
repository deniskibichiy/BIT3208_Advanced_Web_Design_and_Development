<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>


<%

String username =
(String) session.getAttribute("username");


if(username == null){


    Cookie[] cookies = request.getCookies();


    if(cookies != null){


        for(Cookie cookie : cookies){


            if(cookie.getName().equals("username")){


                session.setAttribute(
                    "username",
                    cookie.getValue()
                );


                response.sendRedirect(
                    "dashboard.jsp"
                );

                return;

            }

        }

    }


    response.sendRedirect("login.jsp");

    return;

}
else {

    response.sendRedirect("dashboard.jsp");

}

%>