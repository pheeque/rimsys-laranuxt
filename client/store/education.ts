import { AllEducation, Education } from '../types/api'

interface EducationState {
  all: AllEducation
}

export const state = (): EducationState => ({
  all: [],
})

export const mutations = {
  set (state: EducationState, data: AllEducation) {
    state.all = data
  },

  add (state: EducationState, data: Education) {
    state.all.push(data)
  },

  remove (state: EducationState, id: number) {
    state.all.splice(
      state.all.findIndex(item => item.id === id),
      1,
    )
  },
}
