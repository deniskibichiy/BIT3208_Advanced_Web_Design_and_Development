package com.ehealth;

import jakarta.servlet.ServletException;
import jakarta.servlet.annotation.WebServlet;
import jakarta.servlet.http.*;

import java.io.IOException;
import java.util.List;


@WebServlet("/SearchPatientServelet")
public class SearchPatientServelet extends HttpServlet {

    private static final long serialVersionUID = 1L;


    protected void doGet(HttpServletRequest request,
                         HttpServletResponse response)
            throws ServletException, IOException {


        String name = request.getParameter("name");


        PatientDAO dao = new PatientDAO();


        List<Patient> patients =
                dao.searchPatients(name);


        request.setAttribute(
                "patients",
                patients
        );


        request.getRequestDispatcher("searchPatient.jsp")
               .forward(request, response);

    }

}