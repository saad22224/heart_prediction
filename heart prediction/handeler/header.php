

<style>
    @media(min-width:768px) {
        .log{
          position: absolute;
           right:0
        }
    }
    @media(max-width:767px){
        .navbar-brand{
            padding: 15px;
        }
        .active{
            padding: 15px;
        }
        .log{
            padding: 15px;
        }
    } 
    .navbar{
            z-index: 100;
            transition: transform 0.5s ease-in-out !important;
        }
        .navbar-brand:hover{
          color: #007bff;
        }
        .nav-link:hover{
            color: #007bff !important;
        }
</style>

<div class="container">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="./form.php">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-[#007bff]" aria-current="page" href="./phoneNumber.php">Emergency</a>
        </li>
          <form class="d-flex log"  role="search" action="./handeler/logout.php">
            <button class="btn btn-outline-success" type="submit">log out</button>
          </form>
        </div>
      </nav>
    </div>