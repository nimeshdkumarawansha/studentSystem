<template>
  <div>
    <NavBar />
    <slot name="content" />
  </div>
</template>
<script>
import NavBar from "@/Components/Main/NavBar.vue"


export default {
  components: {
    NavBar
  }
}
</script>
<style lang="scss" scoped></style>
