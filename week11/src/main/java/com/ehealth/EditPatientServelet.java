package com.ehealth;

import jakarta.servlet.ServletException;
import jakarta.servlet.annotation.WebServlet;
import jakarta.servlet.http.*;

import java.io.IOException;


@WebServlet("/EditPatientServelet")
public class EditPatientServelet extends HttpServlet {

    private static final long serialVersionUID = 1L;


    protected void doGet(HttpServletRequest request,
                         HttpServletResponse response)
            throws ServletException, IOException {


        String id = request.getParameter("id");


        PatientDAO dao = new PatientDAO();


        Patient patient = dao.getPatientById(id);


        request.setAttribute(
                "patient",
                patient
        );


        request.getRequestDispatcher("editPatient.jsp")
               .forward(request, response);

    }

}