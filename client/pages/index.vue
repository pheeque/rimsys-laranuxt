<template>
  <div class="mx-8 mt-8 flex">
    <div class="w-2/3">
      <Experience />
    </div>
    <div class="w-1/3">
      <Education />

      <Skill />
    </div>
  </div>
</template>

<script lang="ts">
import Vue from 'vue'

export default Vue.extend({
  layout: 'resume',
})
</script>
