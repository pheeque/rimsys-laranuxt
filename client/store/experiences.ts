import { Experience, Experiences } from '../types/api'

interface ExperienceState {
  all: Experiences
}

export const state = (): ExperienceState => ({
  all: [],
})

export const mutations = {
  set (state: ExperienceState, data: Experiences) {
    state.all = data
  },

  add (state: ExperienceState, data: Experience) {
    state.all.push(data)
  },

  remove (state: ExperienceState, id: number) {
    state.all.splice(
      state.all.findIndex(item => item.id === id),
      1,
    )
  },
}
