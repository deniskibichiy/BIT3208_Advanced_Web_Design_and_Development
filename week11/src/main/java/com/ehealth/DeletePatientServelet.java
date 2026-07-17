package com.ehealth;

import jakarta.servlet.ServletException;
import jakarta.servlet.annotation.WebServlet;
import jakarta.servlet.http.*;

import java.io.IOException;


@WebServlet("/DeletePatientServelet")
public class DeletePatientServelet extends HttpServlet {

    private static final long serialVersionUID = 1L;


    protected void doGet(HttpServletRequest request,
                         HttpServletResponse response)
            throws ServletException, IOException {


        String id = request.getParameter("id");


        PatientDAO dao = new PatientDAO();


        dao.deletePatient(id);


        response.sendRedirect("ViewPatientServelet");

    }

}