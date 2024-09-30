import { createApp } from 'vue';
import PessoaCreate from './components/PessoaCreate.vue';

const app = createApp({
  components: {
    PessoaCreate
  }
});

app.mount('#app');

