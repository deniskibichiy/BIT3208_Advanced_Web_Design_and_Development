package com.ehealth;

import java.sql.*;
import java.util.ArrayList;
import java.util.List;

public class PatientDAO {


    public void addPatient(Patient patient) {

        String sql = "INSERT INTO patients VALUES (?, ?, ?, ?, ?, ?)";


        try(Connection connection = DatabaseConnection.getConnection();
            PreparedStatement statement = connection.prepareStatement(sql)) {


            statement.setString(1, patient.getId());
            statement.setString(2, patient.getName());
            statement.setInt(3, patient.getAge());
            statement.setString(4, patient.getGender());
            statement.setString(5, patient.getDiagnosis());
            statement.setBoolean(6, patient.isAdmitted());


            statement.executeUpdate();


            System.out.println("Patient saved to database");


        } catch(Exception e) {

            e.printStackTrace();

        }

    }



    public List<Patient> getAllPatients() {


        List<Patient> patients = new ArrayList<>();

        String sql = "SELECT * FROM patients";


        try(Connection connection = DatabaseConnection.getConnection();
            Statement statement = connection.createStatement();
            ResultSet result = statement.executeQuery(sql)) {


            while(result.next()) {


                Patient patient = new Patient(

                    result.getString("id"),

                    result.getString("name"),

                    result.getInt("age"),

                    result.getString("gender"),

                    result.getString("diagnosis"),

                    result.getBoolean("admitted")

                );


                patients.add(patient);

            }


        } catch(Exception e) {

            e.printStackTrace();

        }


        return patients;

    }




    public int getAdmittedCount() {


        int count = 0;


        String sql =
        "SELECT COUNT(*) FROM patients WHERE admitted=true";


        try(Connection connection = DatabaseConnection.getConnection();
            Statement statement = connection.createStatement();
            ResultSet result = statement.executeQuery(sql)) {


            if(result.next()) {

                count = result.getInt(1);

            }


        } catch(Exception e) {

            e.printStackTrace();

        }


        return count;

    }
    public static void main(String[] args) {


        Patient patient = new Patient(
                "P001",
                "John Doe",
                35,
                "Male",
                "Malaria",
                true
        );


        PatientDAO dao = new PatientDAO();

        dao.addPatient(patient);

    }

}



