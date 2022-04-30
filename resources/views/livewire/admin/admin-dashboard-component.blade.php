<div>
  <main id="main" class="main">

   <div class="pagetitle">
     <h1>Dashboard</h1>
     <nav>
       <ol class="breadcrumb">
         <li class="breadcrumb-item"><a href="index.html">Home</a></li>
         <li class="breadcrumb-item active">Dashboard</li>
       </ol>
     </nav>
   </div><!-- End Page Title -->

   <section class="section dashboard">
     <div class="row">

       <!-- Left side columns -->
       <div class="col-lg-8">
         <div class="row">

           <!-- Sales Card -->
           <div class="col-xxl-4 col-md-6">
             <div class="card info-card sales-card">

               <div class="filter">
                 <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                 <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                   <li class="dropdown-header text-start">
                     <h6>Filter</h6>
                   </li>

                   <li><a class="dropdown-item" href="#">Today</a></li>
                   <li><a class="dropdown-item" href="#">This Month</a></li>
                   <li><a class="dropdown-item" href="#">This Year</a></li>
                 </ul>
               </div>

               <div class="card-body">
                 <h5 class="card-title">Bookings<span>| Today</span></h5>

                 <div class="d-flex align-items-center">
                   <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                     <i class="bx bxs-book-alt"></i>
                   </div>
                   <div class="ps-3">
                     <h6>50</h6>
                     <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                   </div>
                 </div>
               </div>

             </div>
           </div><!-- End Sales Card -->

           <!--  Owners Card -->
           <div class="col-xxl-4 col-md-6">
             <div class="card info-card revenue-card">

               <div class="filter">
                 <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                 <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                   <li class="dropdown-header text-start">
                     <h6>Filter</h6>
                   </li>

                   <li><a class="dropdown-item" href="#">Today</a></li>
                   <li><a class="dropdown-item" href="#">This Month</a></li>
                   <li><a class="dropdown-item" href="#">This Year</a></li>
                 </ul>
               </div>

               <div class="card-body">
                 <h5 class="card-title"> Owners<span>| This Month</span></h5>

                 <div class="d-flex align-items-center">
                   <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                     <i class="bx bxs-spreadsheet"></i>
                   </div>
                   <div class="ps-3">
                     <h6>264</h6>
                     <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                   </div>
                 </div>
               </div>

             </div>
           </div><!-- End Owners  Card -->

           <!-- Categories Card -->
           <div class="col-xxl-4 col-md-6">
             <div class="card info-card revenue-card">

               <div class="filter">
                 <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                 <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                   <li class="dropdown-header text-start">
                     <h6>Filter</h6>
                   </li>

                   <li><a class="dropdown-item" href="#">Today</a></li>
                   <li><a class="dropdown-item" href="#">This Month</a></li>
                   <li><a class="dropdown-item" href="#">This Year</a></li>
                 </ul>
               </div>

               <div class="card-body">
                 <h5 class="card-title">Categories<span>| This Month</span></h5>

                 <div class="d-flex align-items-center">
                   <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                     <i class="bx bxs-spreadsheet"></i>
                   </div>
                   <div class="ps-3">
                     <h6>264</h6>
                   </div>
                 </div>
               </div>

             </div>
           </div><!-- End Categories Card -->

           <!-- Feedbacks Card -->
           <div class="col-xxl-4 col-md-6">
             <div class="card info-card revenue-card">

               <div class="filter">
                 <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                 <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                   <li class="dropdown-header text-start">
                     <h6>Filter</h6>
                   </li>

                   <li><a class="dropdown-item" href="#">Today</a></li>
                   <li><a class="dropdown-item" href="#">This Month</a></li>
                   <li><a class="dropdown-item" href="#">This Year</a></li>
                 </ul>
               </div>

               <div class="card-body">
                 <h5 class="card-title">Feedbacks<span>| This Month</span></h5>

                 <div class="d-flex align-items-center">
                   <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                     <i class="bx bxs-spreadsheet"></i>
                   </div>
                   <div class="ps-3">
                     <h6>264</h6>

                   </div>
                 </div>
               </div>

             </div>
           </div><!-- End Feedbacks Card -->



           <div class="col-12">
         <div class="card">
           <div class="card-body">
             <h5 class="card-title">Total Customers</h5>

             <!-- Bar Chart -->
             <canvas id="barChart" style="max-height: 400px;"></canvas>
             <script>
               document.addEventListener("DOMContentLoaded", () => {
                 new Chart(document.querySelector('#barChart'), {
                   type: 'bar',
                   data: {
                     labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                     datasets: [{
                       label: 'Bar Chart',
                       data: [20, 50, 40, 30, 56, 15, 40],
                       backgroundColor: [
                         'rgba(255, 99, 132, 0.2)',
                         'rgba(255, 159, 64, 0.2)',
                         'rgba(255, 205, 86, 0.2)',
                         'rgba(75, 192, 192, 0.2)',
                         'rgba(54, 162, 235, 0.2)',
                         'rgba(153, 102, 255, 0.2)',
                         'rgba(201, 203, 207, 0.2)'
                       ],
                       borderColor: [
                         'rgb(255, 99, 132)',
                         'rgb(255, 159, 64)',
                         'rgb(255, 205, 86)',
                         'rgb(75, 192, 192)',
                         'rgb(54, 162, 235)',
                         'rgb(153, 102, 255)',
                         'rgb(201, 203, 207)'
                       ],
                       borderWidth: 1
                     }]
                   },
                   options: {
                     scales: {
                       y: {
                         beginAtZero: true
                       }
                     }
                   }
                 });
               });
             </script>
             <!-- End Bar CHart -->

           </div>
         </div>
       </div>


         </div>
       </div><!-- End Left side columns -->

       <!-- Right side columns -->
       <div class="col-lg-4">

         <!-- News & Updates Traffic -->
         <div class="card">
           <div class="filter">
             <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
             <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
               <li class="dropdown-header text-start">
                 <h6>Filter</h6>
               </li>

               <li><a class="dropdown-item" href="#">Today</a></li>
               <li><a class="dropdown-item" href="#">This Month</a></li>
               <li><a class="dropdown-item" href="#">This Year</a></li>
             </ul>
           </div>

           <div class="card-body pb-0">
             <h5 class="card-title">News &amp; Updates <span>| Today</span></h5>

             <div class="news">
               <div class="post-item clearfix">
                 <img src="assets/img/profile/person.jpg" alt="">
                 <h4><a href="#">Nihil blanditiis at in nihil autem</a></h4>
                 <p>Sit recusandae non aspernatur laboriosam. Quia enim eligendi sed ut harum...</p>
               </div>

               <div class="post-item clearfix">
                 <img src="assets/img/profile/person.jpg" alt="">
                 <h4><a href="#">Quidem autem et impedit</a></h4>
                 <p>Illo nemo neque maiores vitae officiis cum eum turos elan dries werona nande...</p>
               </div>

               <div class="post-item clearfix">
                 <img src="assets/img/profile/person.jpg" alt="">
                 <h4><a href="#">Id quia et et ut maxime similique occaecati ut</a></h4>
                 <p>Fugiat voluptas vero eaque accusantium eos. Consequuntur sed ipsam et totam...</p>
               </div>

               <div class="post-item clearfix">
                 <img src="assets/img/profile/person.jpg" alt="">
                 <h4><a href="#">Laborum corporis quo dara net para</a></h4>
                 <p>Qui enim quia optio. Eligendi aut asperiores enim repellendusvel rerum cuder...</p>
               </div>

               <div class="post-item clearfix">
                 <img src="assets/img/profile/person.jpg" alt="">
                 <h4><a href="#">Et dolores corrupti quae illo quod dolor</a></h4>
                 <p>Odit ut eveniet modi reiciendis. Atque cupiditate libero beatae dignissimos eius...</p>
               </div>

             </div><!-- End sidebar recent posts-->

           </div>
         </div><!-- End News & Updates -->

       </div><!-- End Right side columns -->

     </div>
   </section>

 </main><!-- End #main -->
</div>
