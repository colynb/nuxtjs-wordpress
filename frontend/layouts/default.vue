<template>
  <div>
    <header class="mb-6">
      <div class="container mx-auto">
        <div class="flex items-start">
          <nuxt-link to="/" class="mr-3">
            <img src="/nuxt-square.svg" width="70" height="70" />
          </nuxt-link>
          <div>
            <div class="text-2xl font-bold">NuxtPress Blog</div>
            <p class="text-xl">A NuxtJS Server Rendered Blog with a Wordpress API</p>
          </div>
        </div>
      </div>
    </header>
    <main>
      <nuxt />
    </main>
  </div>
</template>

<style>
html {
  font-family: 'Source Sans Pro', -apple-system, BlinkMacSystemFont, 'Segoe UI',
    Roboto, 'Helvetica Neue', Arial, sans-serif;
  font-size: 16px;
  word-spacing: 1px;
  -ms-text-size-adjust: 100%;
  -webkit-text-size-adjust: 100%;
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
  box-sizing: border-box;
}

*,
*:before,
*:after {
  box-sizing: border-box;
  margin: 0;
}

.button--green {
  display: inline-block;
  border-radius: 4px;
  border: 1px solid #3b8070;
  color: #3b8070;
  text-decoration: none;
  padding: 10px 30px;
}

.button--green:hover {
  color: #fff;
  background-color: #3b8070;
}

.button--grey {
  display: inline-block;
  border-radius: 4px;
  border: 1px solid #35495e;
  color: #35495e;
  text-decoration: none;
  padding: 10px 30px;
  margin-left: 15px;
}

.button--grey:hover {
  color: #fff;
  background-color: #35495e;
}
</style>
