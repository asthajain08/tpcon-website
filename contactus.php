<?php require('header.php');?>

<style>
      .form-group {
     margin-bottom: 15px;
     font-size: 15px;
   }
   label {
     display: block;
     font-weight: bold;
   }
   input[type="text"],
   input[type="email"],
   input[type="tel"] {
     width: 100%;
     padding: 8px;
     border: 1px solid #ccc;
     border-radius: 4px;
   }
   select {
     width: 100%;
     padding: 8px;
     border: 1px solid #ccc;
     border-radius: 4px;
   }
   .captcha {
     display: flex;
     align-items: center;
   }
   img {
     margin-right: 10px;
   }
   .submit-btn {
     background-color: #4CAF50;
     color: #fff;
     border: none;
     padding: 10px 20px;
     font-size: 15px;
     cursor: pointer;
     border-radius: 4px;
   }
   .submit-btn:hover {
     background-color: #45a049;
   }
     </style>
		<!-- Main content Start -->
		<div class="main-content">
			<!-- Breadcrumbs Start -->
			<div class="rs-breadcrumbs breadcrumbs-overlay">
					<div class="breadcrumbs-img">
							<img src="background.jpg" alt="Breadcrumbs Image">
					</div>
					<div class="breadcrumbs-text white-color">
							<h1 class="page-title" >Contact Us</h1>
							<!--<ul>
								<li>
									<a class="active" href="index.html">Why TPCON</a>
								</li>
								<li>Contact Us</li>
							</ul>-->
					</div>
			</div>


               
			<!-- Breadcrumbs End -->


               <div id="fh5co-course">
          <div class="container">

               <div class="row mt-4 ">
                    <div class="col-md-6 col-md-push-1 animate-box ">
                         <div class="fh5co-contact-info">
                            
						<h3 style="color: darkorange">Contact Information</h3>
                            
                              <ul class="address-widget" style="color:black">
                              <li>
                                    <i class="flaticon-location" ></i>
                                    &emsp;Teerthanker Parshvanath <br> &emsp;&emsp;College of Nursing, Amroha (U.P)
                                </li>
                                <li>
                                    <i class="flaticon-call"></i>
                                    &emsp;
                                        <a href="tel:(123)-456-7890" style="color:black">0591-2360000</a> , 
                                      <br> &emsp; &emsp;  <a href="tel:(123)-456-7890" style="color:black">0591-23605555</a>
                                </li>
                                <li>
                                    <i class="flaticon-email"></i>
                                    &emsp;<a href="mailto:principalnursing@tmu.ac.in" style="color:black">principal.parasvnath@tmu.ac.in</a> , 
                                       <br> &emsp; &emsp; <a href="#" style="color:black">www.TPCON.com</a>
                                </li>
                            </ul>
					</div>

                    </div>

                    <div class="col-md-6 animate-box ">
                         
                         <h4 style="color: darkorange">Admissions Open 2023-24 Enquire Now</h4>
                         </span>
                         <form action=" " >
                           <div class="form-group">
                             <label for="name">Name:</label>
                             <input type="text" id="name" name="name" required>
                           </div>
                           <div class="form-row">
                              <div class="col-md-6 mb-6">
                             <label for="email">Email:</label>
                             <input type="email" id="email" name="email" required>
                           </div>
                           
                           <div class="col-md-6 mb-6">
                             <label for="phone">Phone No.:</label>
                             <input type="tel" id="phone" name="phone" required>
                           </div>
                         </div>
                         
                           <div class="form-row">
                               <div class="col-md-6 mb-6">
                             <label for="state">Select State:</label>
                             <select id="state" name="state" required>
                               <option value="" selected disabled>Select State</option>
                               <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                               <option value="Andhra Pradesh">Andhra Pradesh</option>
                               <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                               <option value="Assam">Assam</option>
                               <option value="Chandigarh">Chandigarh</option>
                               <option value="Bihar">Bihar</option>
                               <option value="Dadra and Nagar Haveli and Daman and Diu">Dadra and Nagar Haveli and Daman and Diu</option>
                               <option value="Chhattisgarh">Chhattisgarh</option>
                               <option value="Delhi">Delhi</option>
                               <option value="Goa">Goa</option>
                               <option value="Gujarat">Gujarat</option>
                               <option value="Haryana">Haryana</option>
                               <option value="Himachal Pradesh">Himachal Pradesh</option>
                               <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                               <option value="Jharkhand">Jharkhand</option>
                               <option value="Karnataka">Karnataka</option>
                               <option value="Kerala">Kerala</option>
                               <option value="Ladakh">Ladakh</option>
                               <option value="Madhya Pradesh">Madhya Pradesh</option>
                               <option value="Maharashtra">Maharashtra</option>
                               <option value="Manipur">Manipur</option>
                               <option value="Meghalaya">Meghalaya</option>
                               <option value="Mizoram">Mizoram</option>
                               <option value="Nagaland">Nagaland</option>
                               <option value="Odisha">Odisha</option>
                               <option value="Puducherry">Puducherry</option>
                               <option value="Punjab">Punjab</option>
                               <option value="Rajasthan">Rajasthan</option>
                               <option value="Sikkim">Sikkim</option>
                               <option value="Tamil Nadu">Tamil Nadu</option>
                               <option value="Telangana">Telangana</option>
                               <option value="Tripura">Tripura</option>
                               <option value="Uttar Pradesh">Uttar Pradesh</option>
                               <option value="Uttarakhand">Uttarakhand</option>
                               <option value="West Bengal">West Bengal</option>
                               <!-- Add more state options here -->
                             </select>
                           </div>
                               <div class="col-md-6 mb-6">
                             <label for="city">Select City:</label>
                             <select id="city" name="city" required>
                               <option value="" selected disabled>Select City</option>
                             </select>
                           </div>
                           </div>
                         
                           <div class="form-group">
                             <label for="program">Program Type:</label>
                             <select id="program" name="program" required>
                               <option value="" selected disabled>Select Program </option>
                               <option value="B.Sc Nursing">B.Sc Nursing</option>
                               <option value="A.N.M">A.N.M</option>
                             </select>
                           </div>
                          
                           <div class="form-group">
                               <div class="form-check">
                                 <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required>
                                 <label class="form-check-label" for="invalidCheck3">
                                   Agree to terms and conditions
                                 </label>
                                 
                               </div>
                             </div>
                     
                             <input type="button" value="Submit" onclick="Send()">
                         </form>
                       </div>                         
               </div>
          </div>
     </div>

        </div> 
        <!-- Main content End -->
        <script src="https://smtpjs.com/v3/smtp.js"></script>
     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   
     <script>
       function Send() {
         var name=document.getElementById('name').value;
         var email=document.getElementById('email').value;
         var phone=document.getElementById('phone').value;
         var state=document.getElementById('state').value;
         var city=document.getElementById('city').value;
         var program=document.getElementById('program').value;
   
         var body= "Name:" +name + "<br/> Email:" +email +"<br/> Contact Number:" + phone +"<br/> State:" + state + "<br/> City:" + city + "<br/> Program :" + program;
         console.log(body);
         Email.send({
           Host: "smtp.elasticemail.com",
           Username: "asthajain497@gmail.com",
           Password: "BAA936DDAC90800A5585E5B421B60D0A613F",
           To: 'admission@tmu.ac.in',
           From: "asthajain497@gmail.com",
           Subject: "New contact info",
           Body: body
         }).then(
           message => {
             if(message='OK'){
               swal("Form Submitted!", "we will get back soon", "success");
             }
             else{
               swal("Something Wrong ", "Kindly, Fill the form again!", "error");
             } 
           }
         );
       }
     </script>
     <script>
   
       var cityOptions = {
         'Andaman and Nicobar Islands': ['Select', 'Port Blair'],
         'Andhra Pradesh': ['Select', 'Adoni', 'Amaravati', 'Anantapur', 'Chandragiri', 'Chittoor', 'Dowlaiswaram', 'Eluru', 'Guntur', 'Kadapa', 'Kakinada', 'Kurnool', 'Machilipatnam', 'Nagarjunakoṇḍa', 'Rajahmundry', 'Srikakulam', 'Tirupati', 'Vijayawada', 'Visakhapatnam', 'Vizianagaram', 'Yemmiganur'],
         'Arunachal Pradesh': ['Select', 'Itanagar'],
         'Assam': ['Select', 'Dhuburi', 'Dibrugarh', 'Dispur', 'Guwahati', 'Jorhat', 'Nagaon', 'Sivasagar', 'Silchar', 'Tezpur', 'Tinsukia'],
         'Chandigarh': ['Select', 'Chandigarh'],
         'Bihar': ['Select', 'Ara', 'Barauni', 'Begusarai', 'Bettiah', 'Bhagalpur', 'Bihar Sharif', 'Bodh Gaya', 'Buxar', 'Chapra', 'Darbhanga', 'Dehri', 'Dinapur Nizamat', 'Gaya', 'Hajipur', 'Jamalpur', 'Katihar', 'Madhubani', 'Motihari', 'Munger', 'Muzaffarpur', 'Patna', 'Purnia', 'Pusa', 'Saharsa', 'Samastipur', 'Sasaram', 'Sitamarhi', 'Siwan'],
         'Dadra and Nagar Haveli and Daman and Diu': ['Select', 'Daman', 'Diu', 'Silvassa'],
         'Chhattisgarh': ['Select', 'Ambikapur', 'Bhilai', 'Bilaspur', 'Dhamtari', 'Durg', 'Jagdalpur', 'Raipur', 'Rajnandgaon'],
         'Delhi': ['Select', 'New Delhi'],
         'Goa': ['Select', 'Madgaon', 'Panaji'],
         'Gujarat': ['Select', 'Ahmadabad', 'Amreli', 'Bharuch', 'Bhavnagar', 'Bhuj', 'Dwarka', 'Gandhinagar', 'Godhra', 'Jamnagar', 'Junagadh', 'Kandla', 'Khambhat', 'Kheda', 'Mahesana', 'Morbi', 'Nadiad', 'Navsari', 'Okha', 'Palanpur', 'Patan', 'Porbandar', 'Rajkot', 'Surat', 'Surendranagar', 'Valsad', 'Veraval'],
         'Haryana': ['Select', 'Ambala', 'Bhiwani', 'Chandigarh', 'Faridabad', 'Firozpur Jhirka', 'Gurugram', 'Hansi', 'Hisar', 'Jind', 'Kaithal', 'Karnal', 'Kurukshetra', 'Panipat', 'Pehowa', 'Rewari', 'Rohtak', 'Sirsa', 'Sonipat'],
         'Himachal Pradesh': ['Select', 'Bilaspur', 'Chamba', 'Dalhousie', 'Dharmshala', 'Hamirpur', 'Kangra', 'Kullu', 'Mandi', 'Nahan', 'Shimla', 'Una'],
         'Jammu and Kashmir': ['Select', 'Anantnag', 'Baramula', 'Doda', 'Gulmarg', 'Jammu', 'Kathua', 'Punch', 'Rajouri', 'Srinagar', 'Udhampur'],
         'Jharkhand': ['Select', 'Bokaro', 'Chaibasa', 'Deoghar', 'Dhanbad', 'Dumka', 'Giridih', 'Hazaribag', 'Jamshedpur', 'Jharia', 'Rajmahal', 'Ranchi', 'Saraikela'],
         'Karnataka': ['Select', 'Badami', 'Ballari', 'Bengaluru', 'Belagavi', 'Bhadravati', 'Bidar', 'Chikkamagaluru', 'Chitradurga', 'Davangere', 'Halebid', 'Hassan', 'Hubballi-Dharwad', 'Kalaburagi', 'Kolar', 'Madikeri', 'Mandya', 'Mangaluru', 'Mysuru', 'Raichur', 'Shivamogga', 'Shravanabelagola', 'Shrirangapattana', 'Tumakuru', 'Vijayapura'],
         'Kerala': ['Select', 'Alappuzha', 'Vatakara', 'Idukki', 'Kannur', 'Kochi', 'Kollam', 'Kottayam', 'Kozhikode', 'Mattancheri', 'Palakkad', 'Thalassery', 'Thiruvananthapuram', 'Thrissur'],
         'Ladakh': ['Select', 'Kargil', 'Leh'],
         'Madhya Pradesh': ['Select', 'Balaghat', 'Barwani', 'Betul', 'Bharhut', 'Bhind', 'Bhojpur', 'Bhopal', 'Burhanpur', 'Chhatarpur', 'Chhindwara', 'Damoh', 'Datia', 'Dewas', 'Dhar', 'Dr. Ambedkar Nagar (Mhow)', 'Guna', 'Gwalior', 'Hoshangabad', 'Indore', 'Itarsi', 'Jabalpur', 'Jhabua', 'Khajuraho', 'Khandwa', 'Khargone', 'Maheshwar', 'Mandla', 'Mandsaur', 'Morena', 'Murwara', 'Narsimhapur', 'Narsinghgarh', 'Narwar', 'Neemuch', 'Nowgong', 'Orchha', 'Panna', 'Raisen', 'Rajgarh', 'Ratlam', 'Rewa', 'Sagar', 'Sarangpur', 'Satna', 'Sehore', 'Seoni', 'Shahdol', 'Shajapur', 'Sheopur', 'Shivpuri', 'Ujjain', 'Vidisha'],
         'Maharashtra': ['Select', 'Ahmadnagar', 'Akola', 'Amravati', 'Aurangabad', 'Bhandara', 'Bhusawal', 'Bid', 'Buldhana', 'Chandrapur', 'Daulatabad', 'Dhule', 'Jalgaon', 'Kalyan', 'Karli', 'Kolhapur', 'Mahabaleshwar', 'Malegaon', 'Matheran', 'Mumbai', 'Nagpur', 'Nanded', 'Nashik', 'Osmanabad', 'Pandharpur', 'Parbhani', 'Pune', 'Ratnagiri', 'Sangli', 'Satara', 'Sevagram', 'Solapur', 'Thane', 'Ulhasnagar', 'Vasai-Virar', 'Wardha', 'Yavatmal'],
         'Manipur': ['Select', 'Imphal'],
         'Meghalaya': ['Select', 'Cherrapunji', 'Shillong'],
         'Mizoram': ['Select', 'Aizawl', 'Lunglei'],
         'Nagaland': ['Select', 'Kohima', 'Mon', 'Phek', 'Wokha', 'Zunheboto'],
         'Odisha': ['Select', 'Balangir', 'Baleshwar', 'Baripada', 'Bhubaneshwar', 'Brahmapur', 'Cuttack', 'Dhenkanal', 'Kendujhar', 'Konark', 'Koraput', 'Paradip', 'Phulabani', 'Puri', 'Sambalpur', 'Udayagiri'],
         'Puducherry': ['Select', 'Karaikal', 'Mahe', 'Puducherry', 'Yanam'],
         'Punjab': ['Select', 'Amritsar', 'Batala', 'Chandigarh', 'Faridkot', 'Firozpur', 'Gurdaspur', 'Hoshiarpur', 'Jalandhar', 'Kapurthala', 'Ludhiana', 'Nabha', 'Patiala', 'Rupnagar', 'Sangrur'],
         'Rajasthan': ['Select', 'Abu', 'Ajmer', 'Alwar', 'Amer', 'Barmer', 'Beawar', 'Bharatpur', 'Bhilwara', 'Bikaner', 'Bundi', 'Chittaurgarh', 'Churu', 'Dhaulpur', 'Dungarpur', 'Ganganagar', 'Hanumangarh', 'Jaipur', 'Jaisalmer', 'Jalor', 'Jhalawar', 'Jhunjhunu', 'Jodhpur', 'Kishangarh', 'Kota', 'Merta', 'Nagaur', 'Nathdwara', 'Pali', 'Phalodi', 'Pushkar', 'Sawai Madhopur', 'Shahpura', 'Sikar', 'Sirohi', 'Tonk', 'Udaipur'],
         'Sikkim': ['Select', 'Gangtok', 'Gyalshing', 'Lachung', 'Mangan'],
         'Tamil Nadu': ['Select', 'Arcot', 'Chengalpattu', 'Chennai', 'Chidambaram', 'Coimbatore', 'Cuddalore', 'Dharmapuri', 'Dindigul', 'Erode', 'Kanchipuram', 'Kanniyakumari', 'Kodaikanal', 'Kumbakonam', 'Madurai', 'Mamallapuram', 'Nagappattinam', 'Nagercoil', 'Palayamkottai', 'Pudukkottai', 'Rajapalayam', 'Ramanathapuram', 'Salem', 'Thanjavur', 'Tiruchchirappalli', 'Tirunelveli', 'Tiruppur', 'Thoothukudi', 'Udhagamandalam', 'Vellore'],
         'Telangana': ['Select', 'Hyderabad', 'Karimnagar', 'Khammam', 'Mahbubnagar', 'Nizamabad', 'Sangareddi', 'Warangal'],
         'Tripura': ['Select', 'Agartala'],
         'Uttar Pradesh': ['Select', 'Agra', 'Aligarh', 'Amroha', 'Ayodhya', 'Azamgarh', 'Bahraich', 'Ballia', 'Banda', 'Bara Banki', 'Bareilly', 'Basti', 'Bijnor', 'Bithur', 'Budaun', 'Bulandshahr', 'Deoria', 'Etah', 'Etawah', 'Faizabad', 'Farrukhabad-cum-Fatehgarh', 'Fatehpur', 'Fatehpur Sikri', 'Ghaziabad', 'Ghazipur', 'Gonda', 'Gorakhpur', 'Hamirpur', 'Hardoi', 'Hathras', 'Jalaun', 'Jaunpur', 'Jhansi', 'Kannauj', 'Kanpur', 'Lakhimpur', 'Lalitpur', 'Lucknow', 'Mainpuri', 'Mathura', 'Meerut', 'Mirzapur-Vindhyachal', 'Moradabad', 'Muzaffarnagar', 'Partapgarh', 'Pilibhit', 'Prayagraj', 'Rae Bareli', 'Rampur', 'Saharanpur', 'Sambhal', 'Shahjahanpur', 'Sitapur', 'Sultanpur', 'Tehri', 'Varanasi'],
         'Uttarakhand': ['Select', 'Almora', 'Dehra Dun', 'Haridwar', 'Mussoorie', 'Nainital', 'Pithoragarh'],
         'West Bengal': ['Select', 'Alipore', 'Alipur Duar', 'Asansol', 'Baharampur', 'Bally', 'Balurghat', 'Bankura', 'Baranagar', 'Barasat', 'Barrackpore', 'Basirhat', 'Bhatpara', 'Bishnupur', 'Budge Budge', 'Burdwan', 'Chandernagore', 'Darjeeling', 'Diamond Harbour', 'Dum Dum', 'Durgapur', 'Halisahar', 'Haora', 'Hugli', 'Ingraj Bazar', 'Jalpaiguri', 'Kalimpong', 'Kamarhati', 'Kanchrapara', 'Kharagpur', 'Cooch Behar', 'Kolkata', 'Krishnanagar', 'Malda', 'Midnapore', 'Murshidabad', 'Nabadwip', 'Palashi', 'Panihati', 'Purulia', 'Raiganj', 'Santipur', 'Shantiniketan', 'Shrirampur', 'Siliguri', 'Siuri', 'Tamluk', 'Titagarh'],
   
       };
       var stateDropdown = document.getElementById('state');
       var cityDropdown = document.getElementById('city');
   
       // Function to populate the city dropdown based on the selected state
       function populateCities() {
         var selectedState = stateDropdown.value;
         var cities = cityOptions[selectedState];
         cityDropdown.innerHTML = '';
         if (cities) {
           for (var i = 0; i < cities.length; i++) {
             var option = document.createElement('option');
             option.value = cities[i];
             option.textContent = cities[i];
             cityDropdown.appendChild(option);
           }
         }
       }
   
       // Event listener for state dropdown change
       stateDropdown.addEventListener('change', populateCities);
     </script>
   
     <script src="js/jquery-3.3.1.min.js"></script>
     <script src="js/popper.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.sticky.js"></script>
     <script src="js/main.js"></script>
     <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
     <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.5.0/js/bootstrap.min.js"></script>
        <?php require('footer.php');?>