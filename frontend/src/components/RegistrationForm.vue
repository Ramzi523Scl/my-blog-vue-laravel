<template>
    <div class="q-pa-md flex justify-center">
      <p class="text-weight-bold">Создайте свой профиль</p>
      <q-form
        @submit="onSubmit"
        class="q-gutter-md"
      >
        <q-input
          v-model="email"
          type="email"
          placeholder="Your email"
          lazy-rules
          :rules="[ val => val && val.length > 0 || 'Поле не должно быть пустым']"
          dense
        />

        <q-input
          v-model="nickname"
          placeholder="Your nickname"
          lazy-rules
          :rules="[ val => val && val.length > 0 || 'Поле не должно быть пустым']"
          dense
        />

        <q-input
          type="password"
          v-model="password"
          placeholder="Your password"
          lazy-rules
          :rules="[
          val => val !== null && val !== '' || 'Поле не должно быть пустым',
          val => val.length > 5 || 'Пароль должен быть длиннее 8 символов',
        ]"
          dense
        />

        <q-input
          :type="isPwd ? 'password' : 'text'"
          v-model="confirm_password"
          placeholder="Your confirm password"
          lazy-rules
          :rules="[
          val => val !== null && val !== '' || 'Поле не должно быть пустым',
          val => val.length > 5 || 'Пароль должен быть длиннее 8 символов',
          val => val === this.password || 'Пароль не совпадает',
        ]"
          dense
        >
          <template v-slot:append>
            <q-icon
              :name="isPwd ? 'visibility_off' : 'visibility'"
              class="cursor-pointer"
              @click="isPwd = !isPwd"
            />
          </template>
        </q-input>

        <q-btn label="Зарегистрироваться" type="submit" color="primary" class="auth__btn"/>

      </q-form>

    </div>
</template>

<script>
import {defineComponent} from 'vue'
import {api} from "boot/axios";

export default defineComponent({
  name: "RegistrationForm",

  data: () => ({
    email: null,
    nickname: null,
    password: null,
    confirm_password: null,
    isPwd: true,
  }),

  methods: {

    onSubmit() {
      const data = this.createUserData();
      api.post('register', data)
        .then(response => console.log(response))
    },

    createUserData() {
      return {
        email: this.email,
        nickname: this.nickname,
        password: this.password,
        confirm_password: this.confirm_password,
      }
    }
  }
})
</script>

<style scoped>

</style>
