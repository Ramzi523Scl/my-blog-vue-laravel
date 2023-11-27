<template>
  <div >
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
          :rules="[ val => val && val.length > 0 || 'Please type something']"
          dense
        />

        <q-input
          v-model="nickname"
          placeholder="Your nickname"
          lazy-rules
          :rules="[ val => val && val.length > 0 || 'Please type something']"
          dense
        />

        <q-input
          :type="isPwd ? 'password' : 'text'"
          v-model="password"
          placeholder="Your password"
          lazy-rules
          :rules="[
          val => val !== null && val !== '' || 'Please type your password',
          val => val.length > 5 || 'Хахаха'
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


        <q-input
          type="password"
          v-model="confirm_password"
          placeholder="Your confirm password"
          lazy-rules
          :rules="[
          val => val !== null && val !== '' || 'Please type your password',
          val => val.length > 5 || 'Хахаха'
        ]"
          dense
        />

        <div>
          <q-btn label="Зарегистрироваться" type="submit" color="primary" class="auth__btn"/>
          <!--          <q-btn label="Reset" type="reset" color="primary" flat class="q-ml-sm"/>-->
        </div>
      </q-form>

    </div>
  </div>
</template>

<script>
import {defineComponent} from 'vue'

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
      console.log(this.nickname);
    }
  }
})
</script>

<style scoped>

</style>
