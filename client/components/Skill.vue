<template>
  <div class="bg-white rounded-lg shadow mb-8">
    <div class=" px-8 py-4">
      <div class="text-gray-500 text-md mb-4">Skill</div>
      <div v-for="skill in skills" :key="skill.id" class="mb-4">
        <div class="flex justify-between">
          <div>
            <div class="text-gray-700 text-lg font-bold">{{ skill.name }}</div>
            <div class="text-gray-400 text-sm mb-2">{{ skill.level }}</div>
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
            @click="deleteSkill(skill)"
          ><path d="M864 256H736v-80c0-35.3-28.7-64-64-64H352c-35.3 0-64 28.7-64 64v80H160c-17.7 0-32 14.3-32 32v32c0 4.4 3.6 8 8 8h60.4l24.7 523c1.6 34.1 29.8 61 63.9 61h454c34.2 0 62.3-26.8 63.9-61l24.7-523H888c4.4 0 8-3.6 8-8v-32c0-17.7-14.3-32-32-32zm-200 0H360v-72h304v72z" fill="currentColor" /></svg>
        </div>
      </div>
    </div>
    <div class="border-t border-gray-200">
      <div class="-mt-px flex">
        <div class="w-0 flex-1 flex border-r border-gray-200">
          <NuxtLink
            to="/skill/add"
            class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm leading-5 text-gray-700 font-medium border border-transparent rounded-bl-lg transition ease-in-out duration-150 hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10"
          >
            <AddIcon />
            <span class="ml-3">Add skill</span>
          </NuxtLink>
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { mapMutations } from 'vuex'
import { Skill, Skills } from '../types/api'

export default {
  computed: {
    skills () {
      return this.$store.state.skill.all
    },
  },
  mounted () {
    this.fetchData()
  },
  methods: {
    ...mapMutations({
      setSkills: 'skill/set',
      removeSkill: 'skill/remove',
    }),
    async fetchData (): Promise<void> {
      this.setSkills(
        (await this.$axios.get('skills')).data as Skills,
      )
    },
    async deleteSkill (skill: Skill): Promise<void> {
      if (!confirm('Are you sure?'))
        return

      await this.$axios.delete('skills/' + skill.id)
      this.removeSkill(skill.id)
    },
  },
}
</script>
