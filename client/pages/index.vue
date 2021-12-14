<template>
  <div class="mx-8 mt-8 flex">
    <div class="w-2/3">
      <Experience />
    </div>
    <div class="w-1/3">
      <Education />

      <div class="bg-white rounded-lg shadow">
        <div class="px-8 py-4">
          <div class="text-gray-500 text-md mb-4">Skills</div>
          <div v-for="skill in skills" :key="skill.name" class="mb-4">
            <div class="text-gray-700 text-lg font-bold">{{ skill.name }}</div>
            <div class="text-gray-400 text-sm mb-2">{{ skill.level }}</div>
          </div>
        </div>
        <div class="border-t border-gray-200">
          <div class="-mt-px flex">
            <div class="w-0 flex-1 flex border-r border-gray-200">
              <a
                class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm leading-5 text-gray-700 font-medium border border-transparent rounded-bl-lg transition ease-in-out duration-150 hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10"
                href="#"
              >
                <AddIcon />
                <span class="ml-3">Add skill</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import Vue from 'vue'

export default Vue.extend({
  layout: 'resume',
  data () {
    return {
      skills: [
        {
          name: 'PHP | Laravel',
          level: 'Expert',
        },
        {
          name: 'Javascript | React | Vue',
          level: 'Expert',
        },
        {
          name: 'Rust | C++',
          level: 'Intermediate',
        },
        {
          name: 'Flutter | React Native',
          level: 'Intermediate',
        },
      ],
    }
  },
})
</script>
