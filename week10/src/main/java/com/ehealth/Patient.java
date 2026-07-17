package com.ehealth;

public class Patient {

    private String id;
    private String name;
    private int age;
    private String gender;
    private String diagnosis;
    private boolean admitted;

    public Patient(String id, String name, int age,
                   String gender, String diagnosis,
                   boolean admitted) {

        this.id = id;
        this.name = name;
        this.age = age;
        this.gender = gender;
        this.diagnosis = diagnosis;
        this.admitted = admitted;
    }

    public String getId() {
        return id;
    }

    public String getName() {
        return name;
    }

    public int getAge() {
        return age;
    }

    public String getGender() {
        return gender;
    }

    public String getDiagnosis() {
        return diagnosis;
    }

    public boolean isAdmitted() {
        return admitted;
    }
}