import { Skills, Skill } from '../types/api'

interface SkillState {
  all: Skills
}

export const state = (): SkillState => ({
  all: [],
})

export const mutations = {
  set (state: SkillState, data: Skills) {
    state.all = data
  },

  add (state: SkillState, data: Skill) {
    state.all.push(data)
  },

  remove (state: SkillState, id: number) {
    state.all.splice(
      state.all.findIndex(item => item.id === id),
      1,
    )
  },
}
