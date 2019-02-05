<template>
  <div id="content">
    <Navbar></Navbar>
    <router-view></router-view>
    <notifications id="notifications" group="notificationCenter" position="top right"/>
    <Footer></Footer>
  </div>
</template>

<script>
export default {
  mounted () {
    console.log('Main component mounted...')
  }
}
</script>
<style lang="scss" scoped>
  #notifications {
    top: 55px !important;
  }
</style>