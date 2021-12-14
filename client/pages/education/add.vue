<template>
  <div class="mx-8 mt-8 flex">
    <div class="w-full">
      <div class="bg-white rounded-lg shadow">
        <div class=" px-8 py-4">
          <div class="flex items-center mb-4">
            <NuxtLink to="/">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                aria-hidden="true"
                role="img"
                width="2em"
                height="2em"
                preserveAspectRatio="xMidYMid meet"
                viewBox="0 0 24 24"
                class="mr-2"
              ><path fill="currentColor" d="M19 11H7.14l3.63-4.36a1 1 0 1 0-1.54-1.28l-5 6a1.19 1.19 0 0 0-.09.15c0 .05 0 .08-.07.13A1 1 0 0 0 4 12a1 1 0 0 0 .07.36c0 .05 0 .08.07.13a1.19 1.19 0 0 0 .09.15l5 6A1 1 0 0 0 10 19a1 1 0 0 0 .64-.23a1 1 0 0 0 .13-1.41L7.14 13H19a1 1 0 0 0 0-2z" /></svg>
            </NuxtLink>
            <div class="text-gray-700 text-lg font-bold">Add education</div>
          </div>
          <form method="post" @submit.prevent="save">
            <div class="border border-gray-200 rounded-md px-4 py-2 inline-block mb-4">
              <div class="text-gray-500 mb-1">Institution</div>
              <input v-model="institution" type="text" name="institution" class="focus:outline-none w-96 text-gray-700 font-bold">
            </div>
            <div class="border border-gray-200 rounded-md px-4 py-2 inline-block mb-4">
              <div class="text-gray-500 mb-1">Year</div>
              <input v-model="year" type="text" name="year" class="focus:outline-none w-96 text-gray-700 font-bold">
            </div>
            <div>
              <button class="bg-indigo-500 text-white font-bold px-8 py-2 rounded-md">Save</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { mapMutations } from 'vuex'
import { Education } from '../../types/api'

export default {
  layout: 'resume',
  data () {
    const institution: string = ''
    const year: string = ''

    return {
      institution,
      year,
    }
  },
  methods: {
    async save () {
      this.addEducation(
        (await this.$axios.post('education/add', {
          institution: this.institution,
          year: this.year,
        })).data as Education,
      )

      this.$router.push('/')
    },
    ...mapMutations({
      addEducation: 'education/add',
    }),
  },
}
</script>
