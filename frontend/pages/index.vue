<template>
  <div class="container mx-auto">
    <div>
      <h1>Blog</h1>
      <ul>
        <li v-for="(post, index) in posts" :key="index">
          <NuxtLink
            :to="{ name: 'blog-post', params: { post: post.slug } }"
          >{{ post.title.rendered }}</NuxtLink>
        </li>
      </ul>
    </div>
  </div>
</template>

<script>
import axios from 'axios'

export default {
  asyncData({ req, params, env }) {
    return axios.get(`${env.API_BASE_URL}wp/v2/posts`).then(res => {
      return { posts: res.data }
    })
  },
  head: {
    title: 'List of posts'
  }
}
</script>
