package com.ehealth;

import jakarta.servlet.ServletException;
import jakarta.servlet.annotation.WebServlet;
import jakarta.servlet.http.*;

import java.io.IOException;

@WebServlet("/ViewPatientServelet")
public class ViewPatientServelet extends HttpServlet {

    private static final long serialVersionUID = 1L;

    protected void doGet(HttpServletRequest request,
            HttpServletResponse response)
            throws ServletException, IOException {


        PatientDAO dao = new PatientDAO();

        request.setAttribute(
                "patients",
                dao.getAllPatients()
        );


        request.getRequestDispatcher("patients.jsp")
               .forward(request, response);

    }

    } 
