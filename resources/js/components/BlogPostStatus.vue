<template>
  <span 
    :class="[
      'inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium',
      statusClasses
    ]"
  >
    {{ statusText }}
  </span>
</template>

<script setup lang="ts">
import { computed } from 'vue'

const props = defineProps({
  post: Object
})

const statusText = computed(() => {
  if (!props.post.published_at) {
    return 'Draft'
  }
  
  const publishDate = new Date(props.post.published_at)
  const now = new Date()
  
  if (publishDate > now) {
    return 'Scheduled'
  }
  
  return 'Published'
})

const statusClasses = computed(() => {
  switch (statusText.value) {
    case 'Published':
      return 'bg-green-100 text-green-800'
    case 'Scheduled':
      return 'bg-yellow-100 text-yellow-800'
    case 'Draft':
      return 'bg-gray-100 text-gray-800'
    default:
      return 'bg-gray-100 text-gray-800'
  }
})
</script>