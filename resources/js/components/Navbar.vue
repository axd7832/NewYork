<template>
  <div>
    <header>
      <nav class="navbar navbar-expand-lg navbar-light ">
        <a class="navbar-brand" href="#">Venture Creations</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Workflow</a>
            </li>
              <li class="nav-item">
              <a class="nav-link" href="#">Milestones</a>
            </li>
              <li class="nav-item">
              <a class="nav-link" href="#">Projects</a>
            </li>
              <li class="nav-item">
              <a class="nav-link" href="#">Documents</a>
            </li>
              <li class="nav-item">
              <a class="nav-link" href="#">myCompany</a>
            </li>
              <li class="nav-item">
              <a class="nav-link" href="#">myProfile</a>
            </li>
              <li class="nav-item">
              <a class="nav-link" href="#">Logout</a>
              </li>
          
         
          </ul>
        </div>
      </nav>
    </header>
  </div>
</template>

<script>
export default {
  name: 'Navbar',
  data: function () {
    return {
      
    }
  },
  methods: {

  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
.navbar {
  width:100%;
  background-color:  #F0EFEF; 
}
.navbar-nav{
  background-color: #F0EFEF;
  border:1px solid #F0EFEF; 
  border-radius: 4px;
  text-align:center;
  color: #C3C7BD;
  text-align: center;
}
.navbar a.nav-link:hover{
  background-color:#C3C7BD;
  border:1px solid #C3C7BD;
  border-radius : 2px;
  text-align: center;
 
}

</style>
