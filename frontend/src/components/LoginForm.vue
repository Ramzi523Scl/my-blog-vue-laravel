<template>
  <div>
    <div class="q-pa-md flex justify-center" >

      <p class="text-weight-bold">Войдите свой профиль</p>
      <q-form
        @submit="onSubmit"
        class="q-gutter-md"
      >
        <q-input
          dense
          v-model="nickname"
          placeholder="Your nickname"
          lazy-rules
          :rules="[ val => val && val.length > 0 || 'Please type something']"
        />

        <q-input
          v-model="password"
          :type="isPwd ? 'password' : 'text'"
          dense
          placeholder="Your password"
          lazy-rules
          :rules="[
          val => val !== null && val !== '' || 'Please type your password',
        ]"
        >
          <template v-slot:append>
            <q-icon
              :name="isPwd ? 'visibility_off' : 'visibility'"
              class="cursor-pointer"
              @click="isPwd = !isPwd"
            />
          </template>
        </q-input>



        <div>
          <q-btn label="Войти" type="submit" color="primary" class="auth__btn"/>
<!--          <q-btn label="Reset" type="reset" color="primary" flat class="q-ml-sm"/>-->
        </div>
      </q-form>

    </div>
  </div>
</template>

<script>
import {defineComponent} from 'vue'

export default defineComponent({
  name: "LoginForm",

  data: () => ({
    nickname: null,
    password: null,
    isPwd: true,
  }),

  methods: {
    onSubmit() {
      console.log(this.nickname);
    }
  }
})
</script>

<style scoped>

</style>
