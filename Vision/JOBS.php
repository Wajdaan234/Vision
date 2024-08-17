<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="icon" type="image/x-icon" href="favicon.png"> -->
    <link rel="stylesheet" href="media.css">
    <link rel="icon" type="image/x-icon" href="favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <title>Job Act</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,100..900;1,100..900&family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap');
        :root {
            --primarycolor: #0076de;
            --whitecolor: #fff;
            --blackcolor: #000000;
            --greycolor: #f6f8fa;
            --labelcolor: #64b1f5;
            --yellowcolor: #ffd723;
        }
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            outline: none;
            font-family: 'Nunito';
        }
        html {
            scroll-behavior: smooth;
        }
        body {
            width: 100%;
            background-color: black;
            height: auto;
        }
        .heading {
            font-size: 1.2rem;
            color: #ddd;
            padding: 0.5rem 4rem;
        }
        .logo {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
            height: fit-content;
            color: #ddd;
            padding: 1rem 4rem;
        }
        .left-side {
            width: 40rem;
        }
        .left-side > a, .right-side > a {
            text-decoration: none;
            font-weight: bolder;
            font-size: 2rem;
            color: rgb(255, 255, 255);
        }
        .search-wrapper {
            width: 90%;
            margin: auto;
            min-width: 400px;
            height: 3.5rem;
            position: relative; 
        }
        .search-box {
            width: 100%;
            position: absolute;
            background-color: var(--greycolor);
            box-shadow: rgba(2,11,20,0.2) 0px 5px 15px;
            height: 100%;
            width: 100%;
        }
        .search-card {
            display: flex;
            justify-content: space-between;
            height: 100%;
            padding: 0.5rem;
        }
        .search-input {
            height: 100%;
            width: 100%;
            border: none;
            padding: 0.5rem;
        }
        .search-btn {
            width: 200px;
            background: var(--primarycolor);
            border: none;
            color: var(--whitecolor);
            border-radius: 0.5rem;
            cursor: pointer;
        }
        .search-btn:hover {
            background-color: var(--whitecolor);
            border: 2px solid var(--primarycolor);
            color: var(--primarycolor);
            transition: 0.3s;
            border-radius: 0.5rem;
        }
        .filter-title {
            font-size: 1.5rem;
            padding: 1rem 4rem;
            color: #ddd;
        }
        .filter-chosen {
            width: 80%;
            padding: 0.3rem 4rem;
            display: flex;
            flex-wrap: wrap;
            margin: auto;
            gap: 0.5rem;
            border-bottom: 1px solid var(--primarycolor);
        }
        .nav-link {
            background: var(--primarycolor);
            padding: 0.2rem 0.7rem;
            border-radius: 20px;
            color: white;
            font-size: 0.9rem;
            cursor: pointer;
            transition: 0.7s;
        }
        .nav-link a {
            color: #ffffff;
            text-align: center;
            text-decoration: none;
            font-weight: bolder;
        }
        .nav-link:hover {
            background-color: var(--blackcolor);
            color: rgb(2, 2, 2);
        }
        .content-container {
            display: none;
            display: flex;
            width: 70%;
            height: fit-content;
            /* border: 1px solid #ddd; */
            margin: auto;
            gap: 5px;
        }
        .summary {
            width: 50%;
            /* border: 1px solid #f6f8fa; */
            color: #ffffff;
            height: fit-content;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        .details {
            width: 100%;
            padding: 20px;
            display: none;
            background-color: #000000;
            color: white;
            height: fit-content;
        }
        .details.active {
            display: block;
        }
        .jscs {
            width: 100%;
            height: fit-content;
            border: 1px solid rgb(1, 124, 173);
            border-radius: 1rem;
            padding: 1rem 2rem;
            margin-bottom: 10px; /* Added margin to create gap */
        }
        .jscs p:nth-child(2){
            color: #b6b6b6;
        }

        .jscs ul {
            list-style-type: circle;
        }
        .detail-section {
            display: flex;
            flex-direction: column;
            border: 1px solid #0077ff;
            border-radius: 1rem;
            width: 50%;
            height: fit-content;
        }
        .details p:nth-of-type(1){
            font-size: 0.8rem;
        }
        .apply-btn{
            display: flex;
            flex-direction: row;
            gap: 0.6rem;
        }
        .apply-btn button:nth-of-type(1){
            background-color: var(--primarycolor);
            padding: 0.4rem;
            border-radius: 1rem;
            color: white;
            font-family: 'Nunito';
            border: none;
            /* margin-right: 0.7rem; */
        }
        .apply-btn button:nth-of-type(2){
            border: none;
            background: transparent;
            color: white;
            font-size: 1rem;
        }

        .scrollable-div{
            width: 100%;
            height: 40vh;
            overflow-x: hidden;
            overflow-y: auto ;
            /* border:2px solid var(--primarycolor); */
            /* padding-top: 1rem; */
            padding-bottom: 1rem;
            border: none;
            background-color: transparent;
        }
        .details h2:nth-of-type(2){
            font-family: 'Noto';
            font-weight: bolder;
            font-size: 1.5rem;
        }
        .grey-btn{
            display: flex;
            gap: 0.8rem;
        }
        .grey-btn i{
            font-size: 0.8rem;
        }
        .grey-btn p:nth-of-type(2){
            font-size: 0.85rem;
        }
        .grey-btn strong{
            background: var(--labelcolor);
            color: black;
            border-radius: 1rem;
            padding: 0rem 1rem;
        }

        .scrollable-div ul {
            list-style-type: circle;
            padding-left: 20px;
            color: rgb(180, 180, 180); /* Adjust color as needed */
        }

        .scrollable-div li {
            margin-bottom: 10px; /* Adjust spacing between list items if needed */
        }

        .ul-li h3, .ul-li p{
            color: rgb(180, 180, 180);
        }
        .ul-li h4, .ul-li h2{
            color: rgb(226, 226, 226);
        }
        
    </style>
</head>
<body>
    <h1 class="heading">JOB<span>ACT</span></h1>
    <div class="logo">
        <div class="left-side">
            <a href="#">FI<span>ND YOUR JO</span>BS <i style="font-size: 10px; color: #0076de;" class="fas fa-search"></i></a>
        </div>
        <div class="right-side">
            <a href="logout.php" style="font-size: 1rem; font-family: 'Nunit';">Logout <span><i class="fas fa-sign-out"></i></span></a>
        </div>
    </div>
    <div class="search-wrapper">
        <div class="search-box">
            <div class="search-card">
                <input type="text" placeholder="Job title or keyword" class="search-input">
                <button class="search-btn"><i class="fas fa-search"></i> Search</button>
            </div>
        </div>
    </div>
    <br>
    <h3 class="filter-title"><span>POPULAR</span> JOBS</h3>
    <div class="filter-chosen">
        <!-- Update data-target attributes to match the correct IDs -->
        <div data-target="summary1" class="nav-link">
            <a href="#">Software Engineer</a>
        </div>
        <div data-target="summary2" class="nav-link">
            <a href="#">Project Manager</a>
        </div>
        <div data-target="summary3" class="nav-link">
            <a href="#">Data Analyst</a>
        </div>
        <div data-target="summary4" class="nav-link">
            <a href="#">Sales Associate</a>
        </div>
        <div data-target="summary5" class="nav-link">
            <a href="#">Marketing Manager</a>
        </div>
        <div data-target="summary6" class="nav-link">
            <a href="#">Accountant</a>
        </div>
        <div data-target="summary7" class="nav-link">
            <a href="#">Graphic Designer</a>
        </div>
    </div>
    <br>
    <div class="content-container">
        <div id="summary1" class="summary">

            <div class="jscs" onclick="toggleDetails('details1')">
                <h2>Trainee Software Engineer</h2>
                <br>
                <p>A Hamson Ins.<br>Karachi</p>
                <br>
                <ul>
                    <li>Previous <b>intership</b> or project experiance in <b>software</b>
                    development is a plus, but not required</li>
                    <li>Basic knowledge of <b>software</b> testing methodlogies and techniques. </li>
                </ul>
                <br>
                <p style="font-size: 0.8rem;">Active 13 days ago <b>More....</b></p>
            </div>

            <div class="jscs" onclick="toggleDetails('details2')">
                <h2>Intership | Software Engineer</h2>
                <br>
                <p>Arthitech <br>Islamabad</p>
                <br>
                <ul>
                    <li>Cultivating <b>enhineering</b> best practise within the <b>enhineering</b>
                    group, and, in conjection with senior engineers , company wide</li>
                   
                </ul>
                <br>
                <p style="font-size: 0.8rem;">Posted 30+ day ago <b>More....</b></p>
            </div>

            <div class="jscs" onclick="toggleDetails('details3')">
                <h2>Software Engineer Intern / <br> Apprenticeship program</h2>
                <br>
                <p>Cogilent Solution Ptv.Ltd <br>Islamabad</p>
                <br>
                <ul>
                    <li>W knoe when <b>software engineers</b> understand users needs, then they are able to think better about solving users problems bu writting good quality software</li>
                   
                </ul>
                <br>
                <p style="font-size: 0.8rem;">Posted 14 daysago <b>More....</b></p>
            </div>

        </div>
        <div class="detail-section">
            
            <div id="details1" class="details">
                <h2>Trainee Software Engineer</h2>
                <br>
                <p> <em>A Hamsaon Inc <i class="fa">&#xf08e;</i></em> <br>Karachi</p>
                <br>
                <p>Rs 40,000 a month</p>
                <br>
                <div class="apply-btn">
                    <button>Apply now <i class="fa">&#xf08e;</i></button>
                    <button><i class="fa">&#xf02e;</i></button>
                </div>
                <br>
                <div class="scrollable-div">
                    <h2>Job detail</h2>
                    <p>here's how the job detail align with your <em>proile <i class="fa">&#xf08e;</i></em></p>
                    <br>
                    <div class="grey-btn">
                        <i class="fas fa-credit-card"></i> <p >Pay <br> <strong>Rs 40,000 a month</strong></p>
                        <br>
                        <i class="fas fa-briefcase"></i> <p>Job-type <br> <strong>Full Time</strong></p>
                    </div>
                    <br>
                    <br>
                    <h2>Location</h2>
                    <br>
                    <p><i class="fa fa-map-marker"></i> Karachi</p>
                    <br>
                    <h2>Full job description</h2>
                    <br>
                    <div class="ul-li">
                        <ul>
                            <li>Bachelor’s degree in Computer Science, Software Engineering, or a related field.</li>
                         <br><li>Understanding of software development fundamentals, including data structures, algorithms, and object-oriented programming principles.</li>
                         <br><li>Proficiency in at least one programming language i.e (PHP, DotNet, Java, Python, C++).</li>
                         <br><li>Familiarity with software development tools such as version control systems (e.g., Git), integrated development environments (IDEs), and build automation tools.</li>
                         <br><li>Basic knowledge of software testing methodologies and techniques.</li>
                          <br><li>Previous internship or project experience in software development is a plus, but not required.</li>
                        </ul>
                    </div>  
                </div>
            </div>

            <div id="details2" class="details">
                <h2>Internship | Software Engineer</h2>
                <br>
                <p> <em>Arkhitech <i class="fa">&#xf08e;</i></em> <br>Karachi</p>
                <!-- <br>
                <p>Rs 40,000 a month</p> -->
                <br>
                <div class="apply-btn">
                    <button>Apply now <i class="fa">&#xf08e;</i></button>
                    <button><i class="fa">&#xf02e;</i></button>
                </div>
                <br>
                <div class="scrollable-div">
                    <h2>Job detail</h2>
                    <p>here's how the job detail align with your <em>proile <i class="fa">&#xf08e;</i></em></p>
                    <br>
                    <div class="grey-btn">
                        <!-- <i class="fas fa-credit-card"></i> <p >Pay <br> <strong>Rs 40,000 a month</strong></p>
                        <br> -->
                        <i class="fas fa-briefcase"></i> <p>Job-type <br> <strong>Intership</strong></p>
                    </div>
                    <br>
                    <br>
                    <h2>Location</h2>
                    <br>
                    <p><i class="fa fa-map-marker"></i> Islamabad</p>
                    <br>
                    <h2>Full job description</h2>
                    <br>
                    <div class="ul-li">
                       <h2>Overview:</h2>
                       <br>
                       <p>Arkhitech is seeking talented fresh Software Engineers for internship, that enjoy building advanced internet applications, and designing great APIs. To qualify for the interview, you MUST have either 3.5+ GPA, OR highly sophisticated and professionally developed FYP, OR demonstration of sophisticated software engineering expertise and application outside of classroom, OR have datastructures, algorithms, and design patterns on your fingertips.</p>
                        <br>
                       <h2>Major Duties & Responsiblities:</h2>
                       <br>   
                        <ul>
                            <li>Cultivating engineering best practices within the engineering group, and, in conjunction with senior engineers, company wide.</li>
                            <li>Collaborating with technical leaders to analyze complex feature requests and suggest implementation strategies.</li>
                            <li>Estimate the time required to complete the work and provide quotes.</li>
                            <li>Performing moderately complex product design, systems analysis and programming activities requiring research.</li>
                            <li>Conducting unit testing (including mocking as needed) and integration testing on software.</li>
                            <li>Adhering to Arkhitech's policies, standards and procedures in the performance of job duties.</li>
                            <li>Other duties as assigned.</li>
                       </ul>
                       <br>
                       <h2>Qualification:</h2>
                       <br>
                       <ul>
                        <li>Minimum Bachelor's or Master's degree in Computer Science.</li>
                        <li>Strong grasp over fundamental computer science concepts such as data structures, algorithms, time complexities, OOP, and MVC.</li>
                        <li>Exposure to Agile development process and engineering best practices like continuous integration and unit testing is highly prefered.</li>
                        <li>Excellent technical judgement to know when to use an off the shelf solution, and when to make a custome one.</li>
                        <li>Good verbal and written communication and presentation skills.</li>
                        <li>>High energy level with strong motivation to meet delivery deadlines.</li>
                       </ul>
                       <br>
                       <h2>Key Benefits:</h2>
                       <br>
                       <ul>
                        <li>Competitive salaries</li>
                        <li>Daily catered lunchesli</li>
                        <li>Accelerated career growth!</li>
                       </ul>
                    </div>  
                </div>
            </div>

            <div id="details3" class="details">
                <h2>Software Engineer Intern / Apprenticeship Program</h2>
                <br>
                <p> <em>Cogilent Solution Ptv.Ltd <i class="fa">&#xf08e;</i></em> <br>Islamad</p>
                <br>
                <p style="font-size: 0.6rem;">You must create an Indeed account before continuing to the company website to apply</p>
                <!-- <br>
                <p>Rs 40,000 a month</p> -->
                <br>
                <div class="apply-btn">
                    <button>Apply now <i class="fa">&#xf08e;</i></button>
                    <button><i class="fa">&#xf02e;</i></button>
                </div>
                <br>
                <div class="scrollable-div">
                    <h2>Job detail</h2>
                    <p>here's how the job detail align with your <em>proile <i class="fa">&#xf08e;</i></em></p>
                    <br>
                    <div class="grey-btn">
                        <!-- <i class="fas fa-credit-card"></i> <p >Pay <br> <strong>Rs 40,000 a month</strong></p>
                        <br> -->
                        <i class="fas fa-briefcase"></i> <p>Job-type <br> <strong>Intership</strong></p>
                    </div>
                    <br>
                    <br>
                    <h2>Location</h2>
                    <br>
                    <p><i class="fa fa-map-marker"></i> Islamabad</p>
                    <br>
                    <h2>Full job description</h2>
                    <br>
                    <div class="ul-li">
                       <h4>Posted date</h4>
                       <p>1st May, 2024</p>
                       <br>
                       <h4>last date to Reply</h4>
                       <p>20th Augest, 2024</p>
                       <br>
                       <br>
                       <h4>Country</h4>
                       <p>Pakistan</p>
                       <h4>Location</h4>
                       <p>Islamabad</p>
                       <br>
                       <h4>Category</h4>
                       <p>Computer and Information Technolgy</p>
                       <br>
                       <p>We are looking for a candidate to join our software development team. The people with excellent communication skills, demonstrable work ethics, team players, having a grasp of data structures and ability to solve complex problems are the important traits that we look for in people starting their careers. Apply only if you have something ( a software application that is running and is available to demonstrate or built a part of the software component, or solved a complex problem, or something that differentiates you from other class mates) that demonstrate your abilities.</p>
                        <br>
                       <!-- <h2>Major Duties & Responsiblities:</h2>
                       <br>    -->
                        <ul>
                            <li>Cultivating engineering best practices within the engineering group, and, in conjunction with senior engineers, company wide.</li>
                            <li>Collaborating with technical leaders to analyze complex feature requests and suggest implementation strategies.</li>
                            <li>Estimate the time required to complete the work and provide quotes.</li>
                            <li>Performing moderately complex product design, systems analysis and programming activities requiring research.</li>
                            <li>Conducting unit testing (including mocking as needed) and integration testing on software.</li>
                            <li>Adhering to Arkhitech's policies, standards and procedures in the performance of job duties.</li>
                            <li>Other duties as assigned.</li>
                       </ul>
                       <br>
                       <h2>Qualification:</h2>
                       <br>
                       <ul>
                        <li>Minimum Bachelor's or Master's degree in Computer Science.</li>
                        <li>Strong grasp over fundamental computer science concepts such as data structures, algorithms, time complexities, OOP, and MVC.</li>
                        <li>Exposure to Agile development process and engineering best practices like continuous integration and unit testing is highly prefered.</li>
                        <li>Excellent technical judgement to know when to use an off the shelf solution, and when to make a custome one.</li>
                        <li>Good verbal and written communication and presentation skills.</li>
                        <li>>High energy level with strong motivation to meet delivery deadlines.</li>
                       </ul>
                       <br>
                       <h2>Key Benefits:</h2>
                       <br>
                       <ul>
                        <li>Competitive salaries</li>
                        <li>Daily catered lunchesli</li>
                        <li>Accelerated career growth!</li>
                       </ul>
                    </div>  
                </div>
            </div>
            
        </div>
    </div>

    <script>
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', function(event) {
                event.preventDefault();

                // Show content container
                document.querySelector('.content-container').style.display = 'flex';

                // Hide all summaries
                document.querySelectorAll('.summary').forEach(summary => {
                    summary.style.display = 'none';
                });
                // Hide all details
                document.querySelectorAll('.details').forEach(detail => {
                    detail.classList.remove('active');
                });

                // Show the relevant summary
                const targetId = this.getAttribute('data-target');
                document.getElementById(targetId).style.display = 'block';
            });
        });

        // Toggle details visibility
        function toggleDetails(detailId) {
            // Close all details
            document.querySelectorAll('.details').forEach(detail => {
                if (detail.id !== detailId) {
                    detail.classList.remove('active');
                }
            });

            // Toggle the clicked detail
            const details = document.getElementById(detailId);
            details.classList.toggle('active');
        }

        // Initially hide the content container
        window.addEventListener('load', () => {
            document.querySelector('.content-container').style.display = 'none';
        });
    </script>

</body>
</html>
