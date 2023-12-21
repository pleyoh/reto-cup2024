/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.mycompany.cup2024;

/**
 *
 * @author daw206
 */
public class Jugador extends Persona{
    private double altura;
    private String posicion;
    private String equipo;
    private int goles;
    private byte tarjeta;
    private byte faltas;

    public Jugador() {
    }

    public Jugador(double altura, String posicion, Equipo equipo, Persona persona) {
        super(persona.getNombre(), persona.getApellidos(), persona.getEdad());
        this.altura = altura;
        this.posicion = posicion;
        this.equipo = equipo.getNombreEquipo();
        this.faltas = 0;
        this.tarjeta = 0;
        this.goles = 0;
    }
    
    public void golear(){
        this.goles++;
    }
    
    public int Mostrargoles(){
        return this.goles;
    }
    
    public void CometeFalta(){
        this.faltas++;
    }
    
    public byte TieneFalta(){
        return this.faltas;
    }
    
    public byte TieneTarjeta(){
        return this.tarjeta;
    }

    
    public double getAltura() {
        return altura;
    }

    public void setAltura(double altura) {
        this.altura = altura;
    }

    public String getPosicion() {
        return posicion;
    }

    public void setPosicion(String posicion) {
        this.posicion = posicion;
    }

    public String getEquipo() {
        return equipo;
    }

    public void setEquipo(String equipo) {
        this.equipo = equipo;
    }

    @Override
    public String toString() {
        return super.toString() +" Jugador \n altura= " + altura + " \n posicion= " + posicion + " \n equipo= " + equipo ;
    }
    
    
    
}
