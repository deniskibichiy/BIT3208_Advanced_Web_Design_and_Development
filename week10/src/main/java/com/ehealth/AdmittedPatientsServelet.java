package com.ehealth;

import jakarta.servlet.ServletException;
import jakarta.servlet.annotation.WebServlet;
import jakarta.servlet.http.*;

import java.io.IOException;

@WebServlet("/AdmittedPatientsServelet")
public class AdmittedPatientsServelet extends HttpServlet {

    private static final long serialVersionUID = 1L;

    protected void doGet(HttpServletRequest request,
            HttpServletResponse response)
            throws ServletException, IOException {


    	PatientDAO dao = new PatientDAO();

    	int count = dao.getAdmittedCount();


        request.setAttribute("count", count);


        request.getRequestDispatcher("admitted.jsp")
               .forward(request, response);

    }
}