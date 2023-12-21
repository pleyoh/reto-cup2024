/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.mycompany.cup2024;

/**
 *
 * @author daw206
 */
public class Partido {
    private String fecha;
    private String lugar;
    private static byte id = 0;

    public Partido() {
    }

    public Partido(String fecha, String lugar) {
        this.fecha = fecha;
        this.lugar = lugar;
        id++;
    }
    
    

    public String getFecha() {
        return fecha;
    }

    public void setFecha(String fecha) {
        this.fecha = fecha;
    }

    public String getLugar() {
        return lugar;
    }

    public void setLugar(String lugar) {
        this.lugar = lugar;
    }

    public byte getId() {
        return id;
    }

    @Override
    public String toString() {
        return "Partido: \nfecha= " + fecha + "\n lugar= " + lugar;
    }
    
}
