<template>
  <div class="container">
    <div class="row col-sm-12 pr-0-xs mt-2">
      <div class="card w-100">
        <div class="card-header">
          <h2><input type="text" class="form-control-plaintext" id="companyName" placeholder="Company Name" v-model="company.name" v-bind:readonly="!canUserEdit"></h2>
          <h5><input type="text" class="form-control-plaintext" id="companyDescription" placeholder="Company Description" v-model="company.description" v-bind:readonly="!canUserEdit"></h5>
        </div>
        <div class="card-body">
          <form @submit.prevent="saveForm">
            <div class="form-group">
              <label for="ceoIdSelect">Company CEO</label>
              <select v-model="company.ceo_id" class="form-control" id="ceoIdSelect">
                <option :key="user.id" v-for="user in users" v-bind:value="user.id">{{user.name}}</option>
              </select>
            </div>
            <div class="form-group">
              <label for="directorIdSelect">Director</label>
              <select v-model="company.director_id" class="form-control" id="directorIdSelect">
                <option :key="user.id" v-for="user in users" v-bind:value="user.id">{{user.name}}</option>
              </select>
            </div>
            <div class="form-group">
              <label for="coachIdSelect">Team Coach</label>
              <select v-model="company.coach_id" class="form-control" id="coachIdSelect">
                <option :key="user.id" v-for="user in users" v-bind:value="user.id">{{user.name}}</option>
              </select>
            </div>
            
            <div class="float-right">
              <!-- <button type="submit" class="btn btn-primary">Save</button> -->
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  data () {
    return {
      company: [],
      users: [],
      canUserEdit: true,
      newCompany: false
    }
  },
  mounted () {
    if (this.$route.params.id !== undefined) {
      window.axios.get('/api/company/getOne/'+this.$route.params.id).then(res => {
        console.log(res.data)
        this.company = res.data
        this.newCompany = false
      }).catch(err => {
        console.log(err)
      })
    } else {
      this.newCompany = true
    }
    
    window.axios.get('/api/user/getAll').then(res => {
      console.log(res.data)
      this.users = res.data
    }).catch(err => {
      console.log(err)
    })
    console.log(this.newCompany)
    if (this.newCompany === false) {
      setInterval(() => {
        this.saveForm();
        console.log('FORM SAVED')
      }, 10000); 
    }
  },
  methods: {
    saveForm () {
      if (this.newCompany === true) {
        window.axios.post('/api/company/create', {
          name: this.company.name,
          description: this.company.description,
          ceo_id: this.company.ceo_id,
          coach_id: this.company.coach_id,
          director_id: this.company.director_id
        }).then(res => {
          console.log('Company Created')
          console.log(res)
          this.$notify({
            group: 'notificationCenter',
            title: 'Success',
            type: 'success',
            text: `Company ${this.company.name} Created.`
          })
        }).catch(err => {
          console.log(err)
          this.$notify({
            group: 'notificationCenter',
            title: 'Error!',
            type: 'error',
            text: 'Oops! Something went wrong. Please try again.'
          })
        })
      } else {
        window.axios.post('/api/company/update', {
          id: this.company.id,
          name: this.company.name,
          description: this.company.description,
          ceo_id: this.company.ceo_id,
          coach_id: this.company.coach_id,
          director_id: this.company.director_id
        }).then(res => {
          console.log('Success!')
          console.log(res)
          this.$notify({
            group: 'notificationCenter',
            title: 'Success',
            type: 'success',
            text: res.data
          })
        }).catch(err => {
          console.log(err)
          this.$notify({
            group: 'notificationCenter',
            title: 'Error!',
            type: 'error',
            text: 'Oops! Something went wrong. Please try again.'
          });
        })
      }
    }
  }
}
</script>
