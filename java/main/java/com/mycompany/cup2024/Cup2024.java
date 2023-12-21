/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 */

package com.mycompany.cup2024;

/**
 *
 * @author daw206
 */
public class Cup2024 {

    public static void main(String[] args) {
        Equipo equipo1 = new Equipo("RealMadrid","movistar","Juan López");

        Persona[] personas= new Persona[12];
        for (int i = 0; i < personas.length; i++) {
            personas[i]=new Persona("Alejandro"+(i+1),"Rodriguez"+(i+1), 25+i);
        }
        
        Jugador[] jugadores= new Jugador[12];
        for (int i = 0; i < jugadores.length; i++) {
            jugadores[i]=new Jugador(i, "Delantero", equipo1, personas[i]);
        }
        
   
        Persona persona1 = new Persona("Alejandro","Rodriguez", 25);
        Persona persona2 = new Persona("Mario","Gutierrez", 30);
        Jugador jugador1 = new Jugador(1.80, "delantero", equipo1,persona1);
        Arbitro arbitro1 = new Arbitro(persona2);
        Partido partido1 = new Partido("13-03-2024", "Santander");
        
        System.out.println("Datos del jugador: ");
        System.out.println(jugador1.toString());
        
        System.out.println("\n Datos del equipo: ");
        System.out.println(equipo1.toString());
        
        System.out.println("\n Datos del partido: ");
        System.out.println(partido1.toString());
        System.out.println("id del partido: "+partido1.getId());
        
        
        System.out.println("\n Datos del arbitro: ");
        System.out.println(arbitro1.toString());
        
        
        
        equipo1.Ganapartido();
        
        
        System.out.println("\nEstadísticas del jugador: ");
        System.out.println("Goles marcados: "+jugador1.Mostrargoles());
        jugador1.CometeFalta();
        System.out.println("Faltas del jugador: "+jugador1.TieneFalta());
        System.out.println("Tarjetas del jugador: "+jugador1.TieneFalta());
        System.out.println("-----------------------------------------");
        System.out.println(personas[10].toString());
    }
}
