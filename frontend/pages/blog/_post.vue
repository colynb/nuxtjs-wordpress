<template>
  <div class="container mx-auto">
    <div v-if="loading && post">Loading...</div>
    <article v-else>
      <h1 class="text-6xl font-bold leading-tight mb-6" v-html="post.title.rendered" />
      <div class="text-xl" v-html="post.content.rendered" />
    </article>
  </div>
</template>

<script>
import axios from 'axios'
export default {
  asyncData(context) {
    let { params, error, res, env } = context
    return axios
      .get(`${env.API_BASE_URL}nuxt/v1/posts/${params.post}`)
      .then(res => {
        return { post: res.data, loading: false }
      })
      .catch(err => {
        if (err.response.status === 301) {
          res.writeHead(301, { Location: err.response.data.message.location })
          res.end()
        } else {
          error({
            statusCode: err.response.status,
            message: err.response.data.message
          })
        }
      })
  },

  head() {
    return {
      title: this.post.title.rendered
    }
  },

  data() {
    return {
      loading: false,
      slug: this.$route.params.post,
      post: {
        title: {
          rendered: ''
        },
        content: {
          rendered: ''
        }
      }
    }
  }
}
</script>

<style>
h2 {
  @apply font-bold;
  @apply mb-3;
  @apply text-2xl;
}
h3 {
  @apply font-bold;
  @apply mb-3;
  @apply text-xl;
}
p {
  @apply mb-3;
}
</style>
