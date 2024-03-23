<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $date = $_POST['date'];

   $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');

   if($insert){
      $message[] = 'appointment made successfully!';
   }else{
      $message[] = 'appointment failed';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>ToothPulse</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- bootstrap cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->

<header class="header fixed-top">

   <div class="container">

      <div class="row align-items-center justify-content-between">

         <a href="#home" class="logo">dental<span>Care.</span></a>

         <nav class="nav">
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#services">services</a>
            <a href="#reviews">reviews</a>
            <a href="#contact">contact</a>
         </nav>

         <a href="#contact" class="link-btn">make appointment</a>

         <div id="menu-btn" class="fas fa-bars"></div>

      </div>

   </div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

   <div class="container">

      <div class="row min-vh-100 align-items-center">
         <div class="content text-center text-md-left">
            <h3>let us brighten your smile</h3>
            <p>Expert dental care for healthy smiles and happy patients.</p>
            <a href="#contact" class="link-btn">make appointment</a>
         </div>
      </div>

   </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

   <div class="container">

      <div class="row align-items-center">

         <div class="col-md-6 image">
            <img src="images/about-img.jpg" class="w-100 mb-5 mb-md-0" alt="">
         </div>

         <div class="col-md-6 content">
            <span>about us</span>
            <h3>True Healthcare For Your Family</h3>
            <p>Welcome to ToothPulse, where smiles are crafted and oral health is our top priority. At ToothPulse, we take pride in providing personalized and compassionate dental care for our patients. With a team of highly skilled and dedicated dental professionals, we are committed to delivering excellence in every aspect of dentistry. Our state-of-the-art facility is equipped with the latest technology, ensuring precise diagnostics and effective treatments. What sets us apart is our unwavering dedication to creating a comfortable and welcoming environment, where patients feel at ease throughout their dental journey. From routine check-ups to specialized treatments, we strive to exceed expectations and make every dental experience a positive one. Choose ToothPulse for comprehensive, patient-centered dental care that goes beyond expectations. Your smile is our passion, and your oral health is our mission. Welcome to a dental experience that prioritizes your comfort and wellbeing.</p>
            <a href="#contact" class="link-btn">make appointment</a>
         </div>

      </div>

   </div>

</section>

<!-- about section ends -->

<!-- services section starts  -->

<section class="services" id="services">

   <h1 class="heading">our services</h1>

   <div class="box-container container">

      <div class="box">
         <img src="images/icon-1.svg" alt="">
         <h3>Alignment specialist</h3>
         <p>Our Alignment Specialists are dedicated professionals with expertise in correcting misalignments and malocclusions. Using advanced orthodontic techniques, they work to straighten teeth and improve overall dental health. Whether it's traditional braces or modern aligners, our specialists are committed to creating beautiful smiles and enhancing oral function.</p>
      </div>

      <div class="box">
         <img src="images/icon-2.svg" alt="">
         <h3>Cosmetic dentistry</h3>
         <p>Discover the artistry of our Cosmetic Dentistry services, where we blend science and aesthetics to enhance the appearance of your teeth. From teeth whitening to porcelain veneers, our skilled cosmetic dentists transform smiles, boosting confidence and leaving a lasting impression. Unleash your radiant smile with our personalized cosmetic dentistry solutions.</p>
      </div>

      <div class="box">
         <img src="images/icon-3.svg" alt="">
         <h3>Oral hygiene experts</h3>
         <p>Our Oral Hygiene Experts prioritize the foundation of good dental health—oral hygiene. With a focus on preventive care, they guide patients in establishing effective daily routines. From proper brushing and flossing techniques to personalized recommendations for dental products, our experts empower individuals to maintain optimal oral health and prevent common dental issues.</p>
      </div>

      <div class="box">
         <img src="images/icon-4.svg" alt="">
         <h3>Root canal specialist</h3>
         <p>When it comes to addressing severe tooth decay or infection, our Root Canal Specialists excel in providing precise and comfortable root canal treatments. Using state-of-the-art technology and a gentle approach, they aim to save natural teeth and alleviate pain. Trust our specialists to handle root canal procedures with expertise and care.</p>
      </div>

      <div class="box">
         <img src="images/icon-5.svg" alt="">
         <h3>Live dental advisory</h3>
         <p>Our Live Dental Advisory service connects patients with experienced dental professionals in real-time. Whether you have questions about oral care routines, treatment options, or dental emergencies, our advisory team is here to provide immediate guidance. Receive personalized advice and make informed decisions about your dental health from the comfort of your own home.</p>
      </div>

      <div class="box">
         <img src="images/icon-6.svg" alt="">
         <h3>Cavity inspection</h3>
         <p>Regular dental check-ups are crucial for identifying and addressing cavities early on. Our Cavity Inspection services utilize modern diagnostic tools to detect even the smallest signs of decay. Our experienced dentists conduct thorough examinations to ensure prompt intervention and prevent the progression of cavities. Trust us for comprehensive cavity inspections that prioritize your long-term dental well-being.




</p>
      </div>

   </div>

</section>

<!-- services section ends -->

<!-- process section starts  -->

<section class="process">

   <h1 class="heading">work process</h1>

   <div class="box-container container">

      <div class="box">
         <img src="images/process-1.png" alt="">
         <h3>Cosmetic Dentistry</h3>
         <p>Elevate your smile with our cutting-edge Cosmetic Dentistry services. Our skilled professionals blend artistry with precision, offering teeth whitening, veneers, and smile makeovers tailored to enhance your aesthetic appeal. Discover the confidence that comes with a radiant and perfectly aligned smile through our meticulous cosmetic treatments.</p>
      </div>

      <div class="box">
         <img src="images/process-2.png" alt="">
         <h3>Pediatric Dentistry</h3>
         <p>Nurture your child's dental health with our specialized Pediatric Dentistry. Our caring team understands the unique needs of young patients, creating a positive and comfortable environment for their dental journey. From preventive care to gentle treatments, we prioritize the oral health and well-being of your little ones, ensuring a foundation for a lifetime of healthy smiles.</p>
      </div>

      <div class="box">
         <img src="images/process-3.png" alt="">
         <h3>Dental Implants</h3>
         <p>Restore your smile's functionality and aesthetics with our advanced Dental Implant services. Our expert team employs state-of-the-art techniques to seamlessly replace missing teeth, providing a permanent and natural-looking solution. Experience the confidence of a complete smile, supported by durable and long-lasting dental implants that blend seamlessly with your natural teeth.</p>
      </div>

   </div>

</section>

<!-- process section ends -->

<!-- reviews section starts  -->

<section class="reviews" id="reviews">

   <h1 class="heading"> satisfied clients </h1>

   <div class="box-container container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>Our family has found a trusted partner in ToothPulse for our pediatric dental needs. From the inviting atmosphere to the gentle and patient staff, our children feel at ease during every visit. The pediatric dentistry services are top-notch, emphasizing preventive care and education. Dr. Johnson has a wonderful way of connecting with kids, making dental visits a positive experience. We appreciate the personalized care and highly recommend ToothPulse for families seeking exceptional pediatric dental services.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>The Anderson Family</h3>
         <span>satisfied client</span>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>I recently had dental implant surgery at ToothPulse, and the results are truly life-changing. The entire process, from consultation to the final restoration, was seamless. Dr. Rodriguez and the implant team were not only highly skilled but also compassionate, addressing my concerns and explaining each step thoroughly. The dental implants look and feel incredibly natural, restoring my confidence in my smile. The facility is state-of-the-art, and the care I received exceeded my expectations. ToothPulse is the go-to destination for anyone considering dental implants.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Mark T.</h3>
         <span>satisfied client</span>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>I recently had an exceptional experience at ToothPulse. From the moment I walked in, the staff made me feel welcomed and at ease. Dr. Adams demonstrated a high level of expertise during my cosmetic dentistry procedure, explaining each step and ensuring my comfort. The results exceeded my expectations, and I couldn't be happier with my new smile. The professionalism, cleanliness, and genuine care exhibited by the entire team at ToothPulse make them stand out. I highly recommend their services.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Jason M.</h3>
         <span>satisfied client</span>
      </div>

   </div>

</section>

<!-- reviews section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

   <h1 class="heading">make appointment</h1>

   <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <?php 
         if(isset($message)){
            foreach($message as $message){
               echo '<p class="message">'.$message.'</p>';
            }
         }
      ?>
      <span>your name :</span>
      <input type="text" name="name" placeholder="enter your name" class="box" required>
      <span>your email :</span>
      <input type="email" name="email" placeholder="enter your email" class="box" required>
      <span>your number :</span>
      <input type="number" name="number" placeholder="enter your number" class="box" required>
      <span>appointment date :</span>
      <input type="datetime-local" name="date" class="box" required>
      <input type="submit" value="make appointment" name="submit" class="link-btn">
   </form>  

</section>

<!-- contact section ends -->

<!-- footer section starts  -->

<section class="footer">

   <div class="box-container container">

      <div class="box">
         <i class="fas fa-phone"></i>
         <h3>phone number</h3>
         <p>+123-456-7890</p>
         <p>+111-222-3333</p>
      </div>
      
      <div class="box">
         <i class="fas fa-map-marker-alt"></i>
         <h3>our address</h3>
         <p>mumbai, india - 400104</p>
      </div>

      <div class="box">
         <i class="fas fa-clock"></i>
         <h3>opening hours</h3>
         <p>00:07am to 10:00pm</p>
      </div>

      <div class="box">
         <i class="fas fa-envelope"></i>
         <h3>email address</h3>
         <p>securehack@tuta.io</p>
         <p>mysteriousimmature@gmail.com</p>
      </div>

   </div>

   <div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>mysteriousimmature</span>  </div>

</section>

<!-- footer section ends -->










<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>