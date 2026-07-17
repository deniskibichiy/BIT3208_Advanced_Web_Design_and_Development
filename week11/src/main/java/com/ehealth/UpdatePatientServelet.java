package com.ehealth;

import jakarta.servlet.ServletException;
import jakarta.servlet.annotation.WebServlet;
import jakarta.servlet.http.*;

import java.io.IOException;


@WebServlet("/UpdatePatientServelet")
public class UpdatePatientServelet extends HttpServlet {

    private static final long serialVersionUID = 1L;


    protected void doPost(HttpServletRequest request,
                          HttpServletResponse response)
            throws ServletException, IOException {


        String id =
                request.getParameter("id");


        String name =
                request.getParameter("name");


        int age =
                Integer.parseInt(
                    request.getParameter("age")
                );


        String gender =
                request.getParameter("gender");


        String diagnosis =
                request.getParameter("diagnosis");


        boolean admitted =
                Boolean.parseBoolean(
                    request.getParameter("admitted")
                );


        Patient patient =
                new Patient(
                    id,
                    name,
                    age,
                    gender,
                    diagnosis,
                    admitted
                );


        PatientDAO dao =
                new PatientDAO();


        dao.updatePatient(patient);


        response.sendRedirect(
                "ViewPatientServelet"
        );

    }

}