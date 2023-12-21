/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.mycompany.cup2024;

/**
 *
 * @author daw206
 */
public class Equipo {
    private String nombreEquipo;
    private String patrocinador;
    private String tecnico;
    private byte victorias;
    private byte derrotas;
    private boolean ganador;

    public Equipo() {
    }

    public Equipo(String nombreEquipo, String patrocinador, String tecnico) {
        this.nombreEquipo = nombreEquipo;
        this.patrocinador = patrocinador;
        this.tecnico = tecnico;
        this.ganador = false;
        this.derrotas = 0;
        this.victorias = 0;
    }
    
    public void Ganapartido(){
        this.victorias++;
    }
    
    public void Pierdepartido(){
        this.derrotas++;
    }
    
    public boolean EsElGanador(){
        if(this.victorias>5){
            this.ganador=true;
        }
        return this.ganador;
    }

    public String getNombreEquipo() {
        return nombreEquipo;
    }

    public void setNombreEquipo(String nombreEquipo) {
        this.nombreEquipo = nombreEquipo;
    }

    public String getPatrocinador() {
        return patrocinador;
    }

    public void setPatrocinador(String patrocinador) {
        this.patrocinador = patrocinador;
    }

    public String getTecnico() {
        return tecnico;
    }

    public void setTecnico(String tecnico) {
        this.tecnico = tecnico;
    }

    @Override
    public String toString() {
        return  "Equipo: \n nombreEquipo=" + nombreEquipo + "\n patrocinador=" + patrocinador + "\n tecnico=" + tecnico;
    }

    
    
}
