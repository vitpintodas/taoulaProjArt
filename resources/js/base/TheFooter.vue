  <script setup>
  import { defineProps, ref, onMounted } from "vue";
  import { getImagePath } from "../utils/getImagePath";
  import { changePage } from "../utils/changePage";
  
  defineProps({
    types: {
      type: Array,
      required: true,
    },
    links: {
      type: Array,
      required: true,
    },
    names: {
      type: Array,
      required: true,
    },
  });
  
  const activeLinkIndex = ref(null);
  
  const getLinkClass = (index) => {
    return {
      active: activeLinkIndex.value === index && activeLinkIndex.value === getLastClickedLinkIndex(),
    };
  };
  
  onMounted(() => {
    changePage();
  });
  
  </script>

<template>
  <nav class="footer">
    <ul>
      <li v-for="(type, index) in types" :key="index">
        <a
          :href="links[index]"
          @click="changePage()"
          :class="getLinkClass(index)"
        >
          <img :src="getImagePath(type)" />
          <p>{{ names[index] }}</p>
        </a>
      </li>
    </ul>
  </nav>
</template>
  
  <style scoped>
  a{
    filter: brightness(100%);
  }
  a.active {
  filter: invert(54%) sepia(55%) saturate(2135%) hue-rotate(286deg) brightness(97%) contrast(94%);
}

.footer {
  box-shadow: 0 -2px 4px rgba(0, 0, 0, 0.1); /* Ajout de l'ombre au-dessus du footer */
}
  </style>
  