<script setup>
import { ref } from "vue";
import BaseInput from "../../base/BaseInput.vue";

const removeButton = ref(false);
const addButton = ref(true);
const extraInputs = ref([
    {
        id: 1,
        value: "",
    },
    {
        id: 2,
        value: "",
    },
]);

const addInput = () => {
    if (extraInputs.value.length == 4) {
        addButton.value = false;
    }
    extraInputs.value.push({
        id: extraInputs.value.length + 1,
        value: "",
    });
    removeButton.value = true;
};

const removeInput = () => {
    if (extraInputs.value.length > 2) {
        extraInputs.value.pop();
    }

    if (extraInputs.value.length == 2) {
        removeButton.value = false;
    }
    addButton.value = true;
};

//le emit
const emits = defineEmits(["emitMultipleInput"]);
const updateInput = (value, input) => {
    //update the input value
    input.value = value;
    emits("emitMultipleInput", extraInputs.value);
};
</script>

<template>
    <BaseInput
        class="choixPossible-container"
        v-for="input in extraInputs"
        :key="input"
        :placeholder="`Option/Choix n°${input.id}`"
        @emit-input="updateInput($event, input)"
    />
    <button class="add-button" @click="addInput()" v-if="addButton">+ Ajouter une option</button>
    <button class="remove-button" v-if="removeButton" @click="removeInput()">- Retirer une option</button>
</template>

<style scoped>
.choixPossible-container {
    margin-top: 0px;
}
.add-button {
    background: var(--pink);
    color: var(--white);
    border-radius: 6px;
    justify-content: center;
    align-items: center;
    cursor: pointer;
    border: none;
    min-height: 20px;
    max-width: fit-content;
    margin-right: 10px;
    padding: 10px;
}

.add-button:hover {
    background: rgb(196, 62, 156);
    color: var(--white);
    border-radius: 10px;
    justify-content: center;
    align-items: center;
    cursor: pointer;
    border: none;
    min-height: 20px;
    max-width: fit-content;
}

.remove-button {
    background: rgb(222, 80, 80);
    color: var(--white);
    border-radius: 10px;
    justify-content: center;
    align-items: center;
    cursor: pointer;
    border: none;
    min-height: 20px;
    max-width: fit-content;
    padding: 10px;
}

.remove-button:hover {
    background: rgb(197, 57, 57);
    color: var(--white);
    border-radius: 10px;
    justify-content: center;
    align-items: center;
    cursor: pointer;
    border: none;
    min-height: 20px;
    max-width: fit-content;
}
</style>
