<script setup>
import baseInput from "../base/BaseInput.vue"
import baseButton from "../base/BaseButton.vue"
import BaseExplication from "../base/BaseExplication.vue"

</script>


<template>

<div class="participer-container">

<!-- base-explication permet de définir le nom du concours ainsi que sa description -->
<base-explication name="Paléo 2023" description="En participant à ce concours tu gagneras peut-être deux abonnement pour Paléo 2023 !
Pour tenter ta chance envoie nous ta vanne la plus nulle sur la ville de Nyon. Le gagnant sera tiré au sort parmi les plus drôles."/>

<!-- L'input permet à l'utilisateur de rentrer sa réponse -->
<base-input type="plane" placeholder="Envoie nous ta blague!" label="Réponse" />

<!-- Le bouton envoie la réponse rentrée dans l'input vers la bd -->
<base-button title="Je tente ma chance!" link="#home" size="large" />

</div>

</template>


<style scoped>

.participer-container {
align-items: center;
justify-content: center;
margin-top: 20px;
margin-left: 10px;
margin-right: 10px;
margin-bottom: 10px;
}


</style>