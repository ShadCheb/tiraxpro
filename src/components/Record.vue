<template>
  <section class="modal" @click="closeModal">
    <div class="modal__call__content" @click.stop="">
      <div class="modal__header">
        <h2 class="modal__caption">Оставить заявку</h2>
        <button class="btn-close" @click="closeModal">
          <span></span>
          <span></span>
        </button>
      </div>
      <div class="modal__body">
        <p>Отправь заявку и Наш специалист свяжется с Вами:</p>
        <form action="" class="form">
          <input type="text" name="name" placeholder="Имя" v-model="dataSend.name.value">
          <input type="text" name="phone" placeholder="Телефон" v-model="dataSend.phone.value">
          <input type="hidden" name="test" v-model="dataSend.test.value">

          <p class="form__licenze">Отправляя форму Вы соглашаетесь на обработку персональных данных</p>

          <div class="form__btn">
            <button type="submit" class="btn-1 btn--white" 
              @click.prevent="send"
              :disabled="loading"
            >Отправить</button>
          </div>
        </form>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: 'Record',
  props: ['loading', 'service'],
  data() {
    return{
      dataSend: {
        name: {
          value: '',
          error: false
        },
        phone: {
          value: '',
          error: false
        },
        test: {
          value: ''
        }
      },
    };
  },
  created() {
    document.body.style.cssText = 'overflow: hidden;';
  },
  methods: {
    closeModal() {
      document.body.style.cssText = '';
      this.$emit('emitclosemodal');
    },
    send() {
      if (this.service)
        this.dataSend['service'] = {value: this.service};

      this.$emit('emitsend', this.dataSend);
    }
  }
}
</script>

