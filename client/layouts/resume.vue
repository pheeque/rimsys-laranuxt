<template>
  <div class="flex items-center justify-center">
    <div class="container p-2 lg:p-8 flex flex-col">
      <div class="mx-8 mt-8 flex items-center">
        <div class="bg-white rounded-lg shadow w-full px-8 py-4">
          <div class="flex items-center">
            <ProfilePic class="mr-6" />
            <div>
              <div class="text-2xl text-gray-700 font-bold">Rafik Abdulwahab</div>
              <div class="text-gray-500">computer programmer</div>
            </div>
          </div>
        </div>
      </div>
      <Nuxt />
    </div>
  </div>
</template>

<style>
html,body {
  @apply bg-gray-100
}
</style>
