import Vue from 'vue';
import App from './App.vue';
import AOS from 'aos';
import VueLazyload from 'vue-lazyload';
import { KinesisContainer, KinesisElement } from 'vue-kinesis';

import 'aos/dist/aos.css';

AOS.init();
Vue.use(VueLazyload, {
  attempt: 1,
  lazyComponent: true
});
Vue.component('kinesis-container', KinesisContainer);
Vue.component('kinesis-element', KinesisElement);

Vue.config.productionTip = false;

new Vue({
  render: h => h(App),
}).$mount('#app');
