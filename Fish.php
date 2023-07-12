<?php
   $respuestas = array(
       "💀 Has muerto por un megalodon 🦈",
       "🎣|Has recolectado en Playa Gale: 🐟 🐠",
       "🎣|Has recolectado en Playa del Viaje: 🐡",
       "🎣|Has recolectado en Mar Muerto: 🐚",
       "🎣|Has recolectado en Hidra: 🦀 🦑",
       "🎣|Has recolectado en Ciudadela Oceanica: 🐳"
       );
   $random = array_rand($respuestas);
   echo $respuestas[$random];
?>
