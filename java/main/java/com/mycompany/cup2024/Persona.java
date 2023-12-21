/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.mycompany.cup2024;

/**
 *
 * @author daw206
 */
public class Persona {
    private String nombre;
    private String apellidos;
    private int edad;

    public Persona(){
        
    }
    public Persona(String Minombre, String Miapellidos, int Miedad){
        nombre = Minombre;
        apellidos = Miapellidos;
        edad = Miedad;
    }
    public String getNombre() {
        return nombre;
    }

    public void setNombre(String nombre) {
        this.nombre = nombre;
    }

    public String getApellidos() {
        return apellidos;
    }

    public void setApellidos(String apellidos) {
        this.apellidos = apellidos;
    }

    public int getEdad() {
        return edad;
    }

    public void setEdad(int edad) {
        this.edad = edad;
    }

    @Override
    public String toString() {
        return "Persona: \n nombre= " + nombre + " \n apellidos= " + apellidos + "\n edad= " + edad ;
    }
    
    
    
}
