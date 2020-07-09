<template>
  <div class="select" 
    :class="{active: active}"
    @click="toggleSelect"
  >
    <div class="select__value">
      <p>{{ select.name || placeholder }}</p>
      <span>▼</span>
    </div>
    <ul class="select__list">
      <li 
        v-for="(item, idx) in list"
        :key="idx"
        :class="[select.brief == item.brief ? 'active' : '']"
        @click.prevent="onSelect(item)"
      >{{ item.name }}</li>
    </ul>
  </div>
</template>

<script>
  export default {
  name: 'Select',
  props: ['list','default'],
  data() {
    return {
      active: false,
      select: {},
      placeholder: 'Выберите услугу'
    };
  },
  created() {
    this.defaultSelect();
  },
  methods: {
    defaultSelect() {
      if (this.default)
        this.select = this.default;
    },
    onSelect(value) {
      this.select = (value)
        ? value 
        : this.default;

      this.$emit('emitselect', value);
    },
    toggleSelect() {
      this.active = !this.active;
    },
  }
}
</script>
