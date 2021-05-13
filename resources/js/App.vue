<template>
  <div id="app">
    <div id="nav">
        hello world!!
        <br>
        <p v-if="inited">{{data[0].type_name}}</p>
    </div>
    <!-- <router-view/> -->
  </div>
</template>

<script>
export default {
  name:"App",
  data(){
    return{
      data:[],
      inited:false
    }
  },
  mounted(){
    window.axios.get("/api/test").then((response) => {
        this.data = response.data;
        this.inited=true
      });
  }
}
</script>

<style>
</style>
