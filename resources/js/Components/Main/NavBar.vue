<template>


    <!-- <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="">student</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
          </li>
        </ul>

      </div>
    </div>
  </nav> -->




    <div class="navbar">
        <a :href="route('dashboard')">Home</a>
        <Link :href="route('Student.index')" >About</Link>
        <a href="#services">Services</a>
        <a href="#portfolio">Portfolio</a>
        <a href="#contact">Contact</a>
    </div>



</template>
<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<style lang="css" scoped>
/* Basic styling for the navigation bar */
.navbar {
    background-color: #333;
    /* Background color */
    overflow: hidden;
    /* Clear floats */
}

/* Style for navigation bar links */
.navbar a {
    float: left;
    /* Float the links to the left */
    display: block;
    /* Display links as blocks */
    color: white;
    /* text color */
    text-align: center;
    /* Center-align the text */
    padding: 14px 16px;
    /* Padding around the links */
    text-decoration: none;
    /* Remove underline from links */
}

/* Change color on hover */
.navbar a:hover {
    background-color: #ddd;
    /* Background color on hover */
    color: black;
    /* Text color on hover */
}
</style>
