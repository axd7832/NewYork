<template>
  <div id="content">
    <!-- <nav-bar></nav-bar> -->
    <router-view></router-view>
  </div>
</template>

<script>
export default {
  mounted () {
    console.log('Main component mounted...')
  }
}
</script>
