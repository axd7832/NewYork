<template>
  <div id="content">
    <Navbar></Navbar>
    <router-view></router-view>
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
