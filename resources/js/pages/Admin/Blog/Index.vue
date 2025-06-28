<template>
  <AppLayout>
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
      <div class="px-4 py-6 sm:px-0">
        <div class="flex justify-between items-center mb-6">
          <Heading>Blog Posts</Heading>
          <Button as="link" :href="route('admin.blog.create')">
            Create New Post
          </Button>
        </div>

        <Card>
          <CardContent class="p-0">
            <div class="overflow-x-auto">
              <table class="w-full">
                <thead class="bg-gray-50 border-b">
                  <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                      Title
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                      Category
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                      Status
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                      Published
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                      Reading Time
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                      Actions
                    </th>
                  </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                  <tr v-for="post in posts.data" :key="post.id">
                    <td class="px-6 py-4">
                      <div class="text-sm font-medium text-gray-900">{{ post.title }}</div>
                      <div class="text-sm text-gray-500">{{ post.excerpt.substring(0, 100) }}...</div>
                    </td>
                    <td class="px-6 py-4">
                      <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                        {{ post.category.name }}
                      </span>
                    </td>
                    <td class="px-6 py-4">
                      <BlogPostStatus :post="post" />
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-500">
                      {{ post.published_at ? formatDate(post.published_at) : 'Not published' }}
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-500">
                      {{ post.reading_time }} min read
                    </td>
                    <td class="px-6 py-4 text-sm font-medium space-x-2">
                      <Button 
                        variant="outline" 
                        size="sm" 
                        as="link" 
                        :href="route('admin.blog.edit', post.id)"
                      >
                        Edit
                      </Button>
                      <Button 
                        variant="destructive" 
                        size="sm"
                        @click="deletePost(post.id)"
                      >
                        Delete
                      </Button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </CardContent>
        </Card>

        <!-- Pagination -->
        <div class="mt-6" v-if="posts.links.length > 3">
          <nav class="flex justify-center">
            <div class="flex space-x-1">
              <Link 
                v-for="link in posts.links" 
                :key="link.label"
                :href="link.url"
                :class="[
                  'px-3 py-2 text-sm font-medium rounded-md',
                  link.active 
                    ? 'bg-blue-600 text-white' 
                    : 'text-gray-500 hover:text-gray-700 hover:bg-gray-100'
                ]"
                v-html="link.label"
              />
            </div>
          </nav>
        </div>
      </div>
    </div>
  </AppLayout>
</template>

<script setup>
import { router } from '@inertiajs/vue3'
import AppLayout from '@/layouts/AppLayout.vue'
import Heading from '@/components/Heading.vue'
import Button from '@/components/ui/button/Button.vue'
import Card from '@/components/ui/card/Card.vue'
import CardContent from '@/components/ui/card/CardContent.vue'
import BlogPostStatus from '@/components/BlogPostStatus.vue'
import { Link } from '@inertiajs/vue3'

defineProps({
  posts: Object
})

function formatDate(dateString) {
  return new Date(dateString).toLocaleDateString('et-EE', {
    year: 'numeric',
    month: 'short',
    day: 'numeric'
  })
}

function deletePost(postId) {
  if (confirm('Are you sure you want to delete this post?')) {
    router.delete(route('admin.blog.destroy', postId))
  }
}
</script>