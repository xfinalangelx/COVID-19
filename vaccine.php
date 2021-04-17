<?php include('components/head.inc.php'); ?>
<?php include('components/navbar.inc.php'); ?>

<div class="head-about">
    <h2>COVID-19 Vaccines</h2>
    <img src="images/covid2.png" style=" display: block;
  margin-left: auto;
  margin-right: auto;
  width: 60%;">
    <p>
            COVID-19 is a new disease, caused by a novel (or new) coronavirus that has not previously been seen in humans. Because it is a new virus, scientists are learning more each day. Although most people who have COVID-19 have mild symptoms, COVID-19 can also cause severe illness and even death. Some groups, including older adults and people who have certain underlying medical conditions, are at increased risk of severe illness.
    </p>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-12">
     <div class="card text-center my-4">
       <!-- navigation in .card-header -->
       <div class="card-header">
         <ul class="nav nav-tabs card-header-tabs">
           <li class="nav-item">
             <a class="nav-link active" data-toggle="tab" href="#tab1">Vaccine 1</a>
           </li>
           <li class="nav-item" >
             <a class="nav-link" data-toggle="tab" href="#tab2">Vaccine 2</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" data-toggle="tab" href="#tab3">Vaccine 3</a>
           </li>
         </ul>
       </div>
       <!-- .card-body.tab-content  -->
       <div class="card-body tab-content">
         <div class="tab-pane fade show active" id="tab1">
           <h4 class="card-title">Pfizer-BioNTech</h4>
           <p class="card-text">For people 16 years and older</p>
           <p class="card-text">2 shots will be given 3 weeks apart</p>
           <p class="card-text">Fully vaccinated 2 weeks after second shot</p>
           <a href="https://www.cdc.gov/coronavirus/2019-ncov/vaccines/different-vaccines/Pfizer-BioNTech.html" class="btn btn-primary">Read More</a>
         </div>
         <div class="tab-pane fade" id="tab2">
           <h4 class="card-title">Moderna</h4>
           <p class="card-text">For people 18 years and older</p>
           <p class="card-text">2 shots will be given 4 weeks apart</p>
           <p class="card-text">Fully vaccinated 2 weeks after second shot</p>
           <a href="https://www.cdc.gov/coronavirus/2019-ncov/vaccines/different-vaccines/Moderna.html" class="btn btn-primary">Read More</a>
         </div>
         <div class="tab-pane fade" id="tab3">
           <h4 class="card-title">Johnson & Johnson/Janssen</h4>
           <p class="card-text">For people 18 years and older</p>
           <p class="card-text">1 shot will be given</p>
           <p class="card-text">Fully vaccinated 2 weeks after first shot</p>
           <a href="https://www.cdc.gov/coronavirus/2019-ncov/vaccines/different-vaccines/janssen.html" class="btn btn-primary">Read More</a>
         </div>
          </div><!--/.card-body -->
      </div><!--/.card-->
    </div><!--/.col-sm-6 -->
  </div>
</div><!--/.container -->

<?php include('components/footer.inc.php'); ?>