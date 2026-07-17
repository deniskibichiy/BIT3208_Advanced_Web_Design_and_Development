package com.ehealth;

import jakarta.servlet.ServletException;
import jakarta.servlet.annotation.WebServlet;
import jakarta.servlet.http.HttpServlet;
import jakarta.servlet.http.HttpServletRequest;
import jakarta.servlet.http.HttpServletResponse;
import java.io.IOException;

/**
 * Servlet implementation class RegisterPatientServlet
 */
@WebServlet("/RegisterPatientServlet")
public class RegisterPatientServlet extends HttpServlet {
	private static final long serialVersionUID = 1L;
       
    /**
     * @see HttpServlet#HttpServlet()
     */
    public RegisterPatientServlet() {
        super();
        // TODO Auto-generated constructor stub
    }

	/**
	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
		response.getWriter().append("Served at: ").append(request.getContextPath());
	}

	/**
	 * @see HttpServlet#doPost(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doPost(HttpServletRequest request, HttpServletResponse response)
	        throws ServletException, IOException {

	    String id = request.getParameter("id");
	    String name = request.getParameter("name");

	    int age = Integer.parseInt(request.getParameter("age"));

	    String gender = request.getParameter("gender");
	    String diagnosis = request.getParameter("diagnosis");

	    boolean admitted = Boolean.parseBoolean(
	            request.getParameter("admitted")
	    );


	    Patient patient = new Patient(
	            id,
	            name,
	            age,
	            gender,
	            diagnosis,
	            admitted
	    );


	    PatientDAO dao = new PatientDAO();
	    dao.addPatient(patient);
	    System.out.println("Patient added: " + name);
	    System.out.println("Total patients: " + PatientDatabase.patients.size());


	    response.sendRedirect("index.jsp");
	}

}
