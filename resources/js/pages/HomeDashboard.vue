<template>
  <div class="container">
    <div class="row col-sm-12 pr-0">
      <div class="col-sm-4 mt-5" :key="company.id" v-for="company in companies">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">{{company.name}}</h5>
            <p class="card-text">{{company.description}}</p>
          </div>
          <div class="card-footer">
            <a :href="'company/'+company.id" class="btn btn-primary">See More</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  data () {
    return {
      companies: [],
    }
  },
  mounted () {
    window.axios.get('/api/company/getAll').then(res => {
      console.log(res.data)
      this.companies= res.data;
    }).catch(err => {
      console.log(err)
    })
  },
  methods: {
  }
}
</script>
