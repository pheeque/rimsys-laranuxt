<template>
  <div class="bg-white rounded-lg shadow mr-8">
    <div class=" px-8 py-4">
      <div class="text-gray-500 text-md mb-4">Experience</div>
      <div v-for="experience in experiences" :key="experience.id" class="mb-4">
        <div class="flex justify-between">
          <div>
            <div class="text-gray-700 text-lg font-bold">{{ experience.company }}</div>
            <div class="text-gray-400 text-sm mb-2">{{ experience.position }}</div>
          </div>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink"
            aria-hidden="true"
            role="img"
            width="1.4em"
            height="1.4em"
            preserveAspectRatio="xMidYMid meet"
            viewBox="0 0 1024 1024"
            class="text-gray-400 cursor-pointer"
            @click="deleteExperience(experience)"
          ><path d="M864 256H736v-80c0-35.3-28.7-64-64-64H352c-35.3 0-64 28.7-64 64v80H160c-17.7 0-32 14.3-32 32v32c0 4.4 3.6 8 8 8h60.4l24.7 523c1.6 34.1 29.8 61 63.9 61h454c34.2 0 62.3-26.8 63.9-61l24.7-523H888c4.4 0 8-3.6 8-8v-32c0-17.7-14.3-32-32-32zm-200 0H360v-72h304v72z" fill="currentColor" /></svg>
        </div>
        <div class="text-gray-700 text-sm whitespace-pre-line">
          {{ experience.description }}
        </div>
      </div>
    </div>
    <div class="border-t border-gray-200">
      <div class="-mt-px flex">
        <div class="w-0 flex-1 flex border-r border-gray-200">
          <NuxtLink
            to="/experience/add"
            class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm leading-5 text-gray-700 font-medium border border-transparent rounded-bl-lg transition ease-in-out duration-150 hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10"
          >
            <AddIcon />
            <span class="ml-3">Add experience</span>
          </NuxtLink>
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { mapMutations } from 'vuex'
import { Experience, Experiences } from '../types/api'

export default {
  computed: {
    experiences () {
      return this.$store.state.experiences.all
    },
  },
  mounted () {
    this.fetchData()
  },
  methods: {
    ...mapMutations({
      setExperiences: 'experiences/set',
      removeExperience: 'experiences/remove',
    }),
    async fetchData (): Promise<void> {
      this.setExperiences(
        (await this.$axios.get('experiences')).data as Experiences,
      )
    },
    async deleteExperience (experience: Experience): Promise<void> {
      if (!confirm('Are you sure?'))
        return

      await this.$axios.delete('experiences/' + experience.id)
      this.removeExperience(experience.id)
    },
  },
}
</script>
