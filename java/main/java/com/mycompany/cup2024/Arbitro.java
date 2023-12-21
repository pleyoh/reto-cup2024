/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.mycompany.cup2024;

/**
 *
 * @author daw206
 */
public class Arbitro extends Persona{

    public Arbitro(Persona persona) {
        super(persona.getNombre(), persona.getApellidos(), persona.getEdad());
    }
    
    public void AplicarFalta(Jugador jugador){
        jugador.CometeFalta();
        System.out.println("El jugador " +jugador.getNombre()+" tiene "+jugador.TieneFalta());
    }
    
    public void AplicarTarjeta(Jugador jugador){
        jugador.TieneTarjeta();
        System.out.println("El jugador " +jugador.getNombre()+" tiene "+jugador.TieneTarjeta());
    }
}
