<?php include "./conn.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ashish | Portfolio</title>
    <script src="./index.global.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
    <link rel="stylesheet" href="./style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js" integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js" integrity="sha512-onMTRKJBKz8M1TnqqDuGBlowlH0ohFzMXYRNebz+yOcc5TQr/zAKsthzhuv0hiyUKEiQEQXEynnXCvNTOk50dg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
    
    <header>
        <nav class="navbar py-3">
            <ul class="list flex justify-end pr-7 gap-[30px]">
                <li class="item"><a style="scroll-behavior: smooth" href="#" class="text-2xl font-medium ">Home</a></li>
                <li class="item"><a style="scroll-behavior: smooth" href="#about" class="text-2xl font-medium ">About</a></li>
                <li class="item"><a style="scroll-behavior: smooth" href="#contact" class="text-2xl font-medium ">Contact</a></li>
                <li class="item"><a style="scroll-behavior: smooth" href="#certs" class="text-2xl font-medium ">Certificates</a></li>
            </ul>
        </nav>
    </header>
    <hr>
    <section  class="main flex justify-around">
        <div class="left ps-10 pt-9 w-1/2">
            <div class="content ">
                <h1 class="text-5xl font-bold mb-8">Hello, I'm Ashish</h1>
                <p class="text-2xl font-medium">I'm a web developer</p>
                
            </div>
            <div class="account mt-[9vh]">
                <div class="social">
                    <a href="#" title="Facebook"><i class="fa-brands p-3 fa-square-facebook text-3xl hover:text-blue-600"></i></a>
                    <a href="#" title="instagram"><i class="fa-brands p-3 fa-instagram text-3xl hover:text-pink-600"></i></a>
                    <a href="#" title="twitter"><i class="fa-brands p-3 fa-square-x-twitter text-3xl hover:text-gray-700"></i></a>
                    <a href="#" title="whatsapp"><i class="fa-brands p-3 fa-square-whatsapp text-3xl hover:text-green-900"></i></a>
                    <a href="#" title="github"><i class="fa-brands p-3 fa-github text-3xl hover:text-black"></i></a>

                </div>
            </div>
        </div>
        <div class="right w-1/2">
            <img src="./bg.png" style="filter: drop-shadow(0px 0px 5px rgb(144, 27, 144));" alt="hero" class="hero">
        </div>
    </section>
    <hr>
   
    <section id="about" class=" s_container flex w-full sm:flex-col justify-around md:flex-col lg:flex-row xl:flex-row">
        <div class="skill_pera w-1/2 p-8 ">
            <p class="text-lg text-gray-700">
                I have a strong foundation in front-end and back-end development, working with technologies like HTML, CSS, JavaScript, and React for building interactive user interfaces. I also have experience with backend technologies such as PHP and Node.js, along with database management.  
                <br /><br />
                My skills extend to using Bootstrap for responsive design, Git for version control, and problem-solving in various programming challenges. I'm constantly learning and improving my development workflow to build efficient and scalable applications.
            </p>
        </div>
      <div class="icons_skill skills w-1/2">
        <span class="flex flex-col text-center "> <i class="m-8 text-4xl text-red-600 fa-brands fa-html5"></i> html </span>
        <span class="flex flex-col text-center "> <i class="m-8 text-4xl text-blue-600 fa-brands fa-css3-alt"></i>  css </span>
        <span class="flex flex-col text-center "> <i class="m-8 text-4xl  text-yellow-400 fa-brands fa-js"></i> js  </span>
        <span class="flex flex-col text-center "> <i class="m-8 text-4xl text-purple-800 fa-brands fa-bootstrap"></i> bootstrap </span>
        <span class="flex flex-col text-center "> <i class="m-8 text-4xl text-blue-900 fa-brands fa-react"></i> react </span>
        <span class="flex flex-col text-center "> <i class="m-8 text-4xl text-blue-950 fa-brands fa-php"></i> php </span>
        <span class="flex flex-col text-center "> <i class="m-8 text-4xl  fa-solid fa-database"></i> database </span>
        <span class="flex flex-col text-center "> <i class="m-8 text-4xl text-green-950 fa-brands fa-node"></i> node </span>
        <span class="flex flex-col text-center "> <i class="m-8 text-4xl text-orange-900 fa-brands fa-git"></i> git </span>
        <span class="flex flex-col text-center "> <i class="m-8 text-4xl text-teal-400 fa-solid fa-laptop-code"></i> problum Solving </span>
      </div>
    </section>

    <section id="certs" class="cert">
        <section class="container mx-auto px-6 py-12">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">Certificates</h2>
            
            <div class=" grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Certificate 1 -->
                <div class="cert_card bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="certs/c1.jpg" alt="Certificate 1" class="w-full h-64 object-contain">
                    <div class="p-4 text-center">
                        <h3 class="text-lg font-semibold text-gray-800">Learn CSS - for Beginners</h3>
                        <p class="text-gray-600 text-sm">Issued by Udemy</p>
                    </div>
                </div>
        
                <!-- Certificate 2 -->
                <div class="cert_card bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="certs/c2.jpg" alt="Certificate 2" class="w-full h-64 object-contain">
                    <div class="p-4 text-center">
                        <h3 class="text-lg font-semibold text-gray-800 capitalize">Python Complete course for python Beginners</h3>
                        <p class="text-gray-600 text-sm">Issued by Udemy</p>
                    </div>
                </div>
        
                <!-- Certificate 3 -->
                <div class="cert_card bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="certs/c3.jpg" alt="Certificate 3" class="w-full h-64 object-contain">
                    <div class="p-4 text-center">
                        <h3 class="text-lg font-semibold text-gray-800 capitalize">mordern PHP web devlopment mySQL,gitHub & heroku</h3>
                        <p class="text-gray-600 text-sm">Issued by Udemy</p>
                    </div>
                </div>
        
                <!-- Certificate 4 -->
                <div class="cert_card bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="certs/c4.jpg" alt="Certificate 4" class="w-full h-64 object-contain">
                    <div class="p-4 text-center">
                        <h3 class="text-lg font-semibold text-gray-800 capitalize">CSS complete course for beginners</h3>
                        <p class="text-gray-600 text-sm">Issued by Udemy</p>
                    </div>
                </div>
        
                <!-- Certificate 5 -->
                <div class="cert_card bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="certs/c5.jpg" alt="Certificate 5" class="w-full h-64 object-contain">
                    <div class="p-4 text-center">
                        <h3 class="text-lg font-semibold text-gray-800 capitalize">java and c++ complete course for beginners 2022</h3>
                        <p class="text-gray-600 text-sm">Issued by Udemy</p>
                    </div>
                </div>
        
                <!-- Certificate 6 -->
                <div class="cert_card bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="certs/c6.jpg" alt="Certificate 6" class="w-full h-64 object-contain">
                    <div class="p-4 text-center">
                        <h3 class="text-lg font-semibold text-gray-800 capitalize" >learn javaScript from scratch practically</h3>
                        <p class="text-gray-600 text-sm">Issued by Udemy</p>
                    </div>
                </div>
            </div>
        </section>
        
    </section>

    <section id="contact" class="contact flex flex-row  ">
<div class="left_contect w-1/2 p-5">
    <h1 class="c_heading text-2xl font-medium uppercase"> Contact Me</h1>
    <div class="desc">
        <p class="my-16 p-8 text-center text-xl text-gray-700 ">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius sint nihil fuga repellat cumque quasi alias deserunt quaerat harum possimus quam totam eligendi hic, deleniti accusamus minima esse. Esse fuga alias eius consequuntur. Quae reprehenderit eum unde nemo tenetur, quod, repellat voluptatem consequuntur est distinctio voluptatum incidunt? Expedita, laudantium amet.
        </p>
    </div>
</div>
<div class="r_contect w-1/2">
    <form class="w-full  bg-white p-6 md:p-8 rounded-lg  container mx-auto" method="post">
        <!-- <h2 class="text-2xl md:text-3xl font-semibold text-center text-gray-800 mb-4">Get in Touch</h2> -->
    
        <div class="mb-4">
            <label for="name" class="block text-lg font-medium text-gray-700">Name</label>
            <input type="text" name="name" id="name" placeholder="Enter your name"
                class="w-full p-3 border-2 border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 transition">
        </div>
    
        <div class="mb-4">
            <label for="email" class="block text-lg font-medium text-gray-700">Email</label>
            <input type="email" name="email" id="email" placeholder="Enter your email"
                class="w-full p-3 border-2 border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 transition">
        </div>
    
        <div class="mb-4">
            <label for="msg" class="block text-lg font-medium text-gray-700">Message</label>
            <textarea name="text" id="msg" placeholder="Write your message..."
                class="w-full p-3 border-2 border-gray-300 rounded-md resize-none h-32 focus:outline-none focus:ring-2 focus:ring-blue-500 transition"></textarea>
        </div>
    
        <button type="submit"
            class="w-1/4 bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 rounded-md text-lg transition duration-300">
            Submit
        </button>
    </form>
</div>
        
        
    </section>
    <hr>
    <footer class="w-full  text-gray-800 py-8 px-6 md:px-12">
        <div class="container mx-auto flex flex-wrap justify-between items-start gap-8">
    
            <div class="w-full md:w-1/3">
                <h2 class="text-2xl font-semibold text-gray-900">Ashish Prajapati</h2>
                <p class="text-gray-600 mt-2">
                    Creating a portfolio website ( Task-1 )
                </p>
            </div>
    
            <div class="w-full md:w-1/3">
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Quick Links</h3>
                <ul class="text-gray-600 space-y-2">
                    <li><a href="#" class="hover:text-blue-500 transition">Home</a></li>
                    <li><a href="#about" class="hover:text-blue-500 transition">About Us</a></li>
                    <li><a href="#certs" class="hover:text-blue-500 transition">Certificates</a></li>
                    <li><a href="#contact" class="hover:text-blue-500 transition">Contact</a></li>
                </ul>
            </div>
    
            <div class="w-full md:w-1/3">
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Contact Me</h3>
                <p class="text-gray-600">Email: ap5381545@gmail.com</p>
                <p class="text-gray-600">Phone: +91 1234-5678-94</p>
    
                <div class="flex space-x-4 mt-4">
                    <a href="#" class="text-gray-600 hover:text-blue-500 transition text-2xl">
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                    <a href="#" class="text-gray-600 hover:text-blue-500 transition text-2xl">
                        <i class="fa-brands fa-twitter"></i>
                    </a>
                    <a href="#" class="text-gray-600 hover:text-blue-500 transition text-2xl">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="#" class="text-gray-600 hover:text-blue-500 transition text-2xl">
                        <i class="fa-brands fa-linkedin"></i>
                    </a>
                </div>
            </div>
        </div>
    
        <div class="text-center text-gray-500 text-sm mt-6 border-t border-gray-300 pt-4">
            &copy; 2025 Ashish Prajapati. All rights reserved.
        </div>
    </footer>
    
</body>
<script>
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});
</script>
<script src="./script.js"></script>
</html>

<?php 
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['text'];
    if (empty($name) || empty($email) || empty($msg)){
        echo "<script>alert('Please fill all the fields')</script>";
    }else{
        $sql = "INSERT INTO `tb1` (`name`, `email`, `message`) VALUES ('$name', '$email', '$msg');";
        $result = mysqli_query($conn, $sql);
        if($result){
            echo "<script>alert('Message sent successfully!')</script>";
        }
    }
}
?>