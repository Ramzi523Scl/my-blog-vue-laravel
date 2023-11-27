<template>
  <div>
    hello world
  </div>
</template>

<script>
import { defineComponent } from 'vue'
import { api } from 'boot/axios'

export default defineComponent({
  name: 'IndexPage',

  mounted() {
    this.getData()
  },
  methods: {
    getData() {
      api.get('/users')
        .then(response => console.log(response))
    }
  }
})
</script>
