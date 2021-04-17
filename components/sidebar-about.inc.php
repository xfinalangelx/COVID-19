
        <div id="wrapper" class="toggled">
            <!-- Sidebar -->
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav">
                   <!-- <li class="sidebar-brand"> <a href="#"> Start Bootstrap </a> </li> -->
                    <li> <a href="#about-head">What is COVID-19?</a> </li>
                    <li> <a href="#symptom-head">Symptoms</a> </li>
                    <li> <a href="#prevention-head">Prevention</a> </li>
                </ul>
            </div>
            <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script> <!-- Menu Toggle Script -->
        <script>
          $(function(){
            $("#menu-toggle").click(function(e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });

            $(window).resize(function(e) {
              if($(window).width()<=768){
                $("#wrapper").removeClass("toggled");
              }else{
                $("#wrapper").addClass("toggled");
              }
            });
          });
           
        </script>