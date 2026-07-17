package com.ehealth;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;


public class UserDAO {


    public boolean validateUser(String username, String password) {


        boolean valid = false;


        String sql =
        "SELECT * FROM users WHERE username=? AND password=?";


        try(Connection connection =
                DatabaseConnection.getConnection();


            PreparedStatement statement =
                connection.prepareStatement(sql)) {


            statement.setString(1, username);

            statement.setString(2, password);


            ResultSet result =
                    statement.executeQuery();


            if(result.next()) {

                valid = true;

            }


        } catch(Exception e) {

            e.printStackTrace();

        }


        return valid;

    }

}