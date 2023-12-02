<template>
  <div class="q-pa-lg">
    <RouterLink to="/login"> Вход</RouterLink>
  </div>
</template>

<script>
import {defineComponent} from 'vue'
import {api} from 'boot/axios'

export default defineComponent({
  name: 'IndexPage',

  mounted() {},
  methods: {}
})
</script>
