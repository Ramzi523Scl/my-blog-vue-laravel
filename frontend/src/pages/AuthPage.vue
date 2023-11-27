<template>
  <q-layout view="hHh lpR fFf" class="auth">
    <q-page-container>
      <q-page class="flex column justify-center items-center">
        <div class="auth__content flex justify-center">

          <component :is="activeComponent === 'registration' ? 'registration-form' : 'login-form'">
          </component>

          <div v-show="activeComponent === 'login'" >
            У вас нет профиля ?
            <a @click.prevent="activeComponent = 'registration'" href="#">Зарегистрируйтесь</a>
          </div>
          <div v-show="activeComponent === 'registration'" >
            У вас есть профиль ?
            <a @click.prevent="activeComponent = 'login'" href="#">Войдите</a>
          </div>
        </div>

      </q-page>
    </q-page-container>
  </q-layout>
</template>

<script>
import RegistrationForm from '../components/RegistrationForm.vue'
import LoginForm from '../components/LoginForm.vue'

export default {
  components: {
    RegistrationForm,
    LoginForm
  },
  data() {
    return {
      activeComponent: 'login' // Изначально показываем форму регистрации
    }
  }
}
</script>
