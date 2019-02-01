<template>
  <div class="container">
    HELLO!!!
  </div>
</template>
<script>
export default {
  data () {
    return {
    }
  },
  mounted () {
    window.axios.get('/api/company/getAll').then(res => {
      console.log(res.data)
    }).catch(err => {
      console.log(err)
    })
  },
  methods: {
  }
}
</script>
