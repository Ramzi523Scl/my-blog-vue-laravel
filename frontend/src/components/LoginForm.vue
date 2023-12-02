<template>
  <div class="q-pa-md flex justify-center">

    <p class="text-weight-bold">Войдите свой профиль</p>
    <q-form
      @submit="onSubmit"
      class="q-gutter-md"
    >
      <q-input
        dense
        v-model="nickname"
        placeholder="Ваш ник"
        lazy-rules
        :rules="[ val => val && val.length > 0 || 'Поле не должно быть пустым']"
      />

      <q-input
        v-model="password"
        :type="isPwd ? 'password' : 'text'"
        dense
        placeholder="Ваш пароль"
        lazy-rules
        :rules="[
          val => val !== null && val !== '' || 'Поле не должно быть пустым',
          val => val.length > 5 || 'Пароль должен быть длиннее 8 символов',
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

      <q-btn label="Войти" type="submit" color="primary" class="auth__btn"/>

    </q-form>

  </div>
</template>

<script>
import {defineComponent} from 'vue'
import {api} from "boot/axios";

export default defineComponent({
  name: "LoginForm",

  data: () => ({
    nickname: null,
    password: null,
    isPwd: true,
  }),

  methods: {
    onSubmit() {
      api.post('login', { nickname: this.nickname, password: this.password })
        .then(response => console.log(response));
    }
  }
})
</script>

<style scoped>

</style>
