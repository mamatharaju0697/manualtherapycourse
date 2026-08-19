 <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-lg">
         <div class="modal-content">
             <div class="modal-header pb-3" style="background-color:#4f587c;color:#fff">
                 <h5 class="modal-title" id="registerModalLabel">Course Registration Form</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="filter: invert(1);"></button>
             </div>
             <div class="modal-body m-3">
                 <form action="https://rightturn.asia/dont-delete/manualTherapyCourses/course-registration-form.php" method="POST"
                     class="d-flex flex-column h-100 justify-content-center w-100  mb-3 form"
                     novalidate>
                     <!--<input type="text" name="action" value="appointment" hidden>-->
                     <div class="mb-3">
                         <input type="text" class="form-control py-3 px-4" name="name" id="name"
                             placeholder="Name" required>

                     </div>
                     <div class="mb-3">
                         <input type="tel" class="form-control py-3 px-4" name="phone" id="phone"
                             placeholder="Phone" required>

                     </div>
                     <div class="mb-3">
                         <input type="email" class="form-control py-3 px-4" name="email" id="email"
                             placeholder="Email" required>

                     </div>

                     <div class="col mb-3">
                         <select name="course" id="course" class="form-select py-3 px-4"
                             aria-label="Default select example">
                             <option value="">Choose a Course</option>
                             <option value="Certificate in Orthopaedic Manual Therapy (COMT)">Certificate in Orthopaedic Manual Therapy (COMT)</option>
                             <option value="Certificate in Mastery in Manual Therapy (CMMT)">Certificate in Mastery in Manual Therapy (CMMT)</option>
                             <option value="Certificate in Kinesiology Taping">Certificate in Kinesiology Taping</option>
                             <option value="Certificate in Sports Manual Therapy">Certificate in Sports Manual Therapy</option>
                             <option value="Certificate in Spinal Manipulation">Certificate in Spinal Manipulation</option>
                             <option value="Certificate in Trigger Point Therapy">Certificate in Trigger Point Therapy</option>
                             <option value="Certificate in Therapeutic Taping">Certificate in Therapeutic Taping</option>
                             <option value="Certificate in Myofascial Release">Certificate in Myofascial Release</option>
                             <option value="Certificate in Differential Diagnosis for Musculoskeletal Disorders">Certificate in Differential Diagnosis for Musculoskeletal Disorders</option>
                             <option value="Management of Sports Injuries & MSK Disorders using PNF Techniques">Management of Sports Injuries &amp; MSK Disorders using PNF Techniques</option>
                             <option value="Therapeutic Specific Exercise (TSE) for Chronic Pain Syndrome">Therapeutic Specific Exercise (TSE) for Chronic Pain Syndrome</option>
                             <option value="Certificate Course in Belt Mobilisation for Peripheral Joints">Certificate Course in Belt Mobilisation for Peripheral Joints</option>
                         </select>
                     </div>
                     <div class="col mb-3">
                         <textarea class="form-control" name="message" id="message" rows="4" placeholder="Message / Comments" required></textarea>

                     </div>

                     <div class="d-flex justify-content-center ">
                         <a href="#"
                             class="btn button font-1 ls-2 fw-semibold fs-7 py-3 px-4 mt-2">Make Registration</a>
                     </div>
                 </form>
             </div>
         </div>
     </div>
 </div>
 <div class="modal fade" id="ScheduleAConsultation" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-lg">
         <div class="modal-content">
             <div class="modal-header pb-3" style="background-color:#4f587c;color:#fff">
                 <h5 class="modal-title" id="registerModalLabel">Schedule A Consultation</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="filter: invert(1);"></button>
             </div>
             <div class="modal-body m-3">
                 <form action="https://rightturn.asia/dont-delete/manualTherapyCourses/schedule-visit.php" method="POST" class="d-flex flex-column w-100 mb-3 form" novalidate>
                     <div class="mb-3">
                         <input type="text" class="form-control py-3 px-4" name="name" id="name" placeholder="Full Name" required>
                     </div>
                     <div class="mb-3">
                         <input type="email" class="form-control py-3 px-4" name="email" id="email" placeholder="Email" required>
                     </div>
                     <div class="mb-3">
                         <input type="tel" class="form-control py-3 px-4" name="phone" id="phone" placeholder="Phone Number" required>
                     </div>
                     <div class="mb-3">
                         <input type="date" class="form-control py-3 px-4" name="date" id="date" required>
                     </div>
                     <div class="mb-3">
                         <select name="time" id="time" class="form-select py-3 px-4" required>
                             <option value="">Select Time Slot</option>
                             <option value="Morning">Morning</option>
                             <option value="Afternoon">Afternoon</option>
                             <option value="Evening">Evening</option>
                         </select>
                     </div>
                     <div class="mb-3">
                         <select name="treatment" id="treatment" class="form-select py-3 px-4" required>
                             <option value="">Select Treatment</option>
                             <option value="Back Pain">Back Pain</option>
                             <option value="Knee Pain">Knee Pain</option>
                             <option value="Shoulder Pain">Shoulder Pain</option>
                             <option value="Neck Pain">Neck Pain</option>
                             <option value="Manual Therapy">Manual Therapy</option>
                             <option value="Rehabiltation">Rehabiltation</option>
                             <option value="Sports Injuries">Sports Injuries</option>
                             <option value="Stroke Rehab">Stroke Rehab</option>
                             <option value="Geriatric physiotherapy">Geriatric physiotherapy</option>
                             <option value="Paediatic Physiotherapy">Paediatic Physiotherapy</option>
                             <option value="Post-Operative Physiotherapy">Post-Operative Physiotherapy</option>
                             <option value="Women Wellness">Women Wellness</option>
                         </select>
                     </div>
                     <div class="mb-3">
                         <input type="text" class="form-control py-3 px-4" name="address" id="address" placeholder="Location / Address" required>
                     </div>
                     <div class="mb-3">
                         <textarea class="form-control py-3 px-4" name="message" id="message" rows="4" placeholder="Message / Additional Notes"></textarea>
                     </div>
                     <div class="d-flex justify-content-center mt-4">
                         <button type="submit" class="btn button py-3">Schedule Visit</button>
                     </div>
                 </form>

             </div>
         </div>
     </div>
 </div>

 <footer>
     <section class="bg-accent-color-2">
         <div class="r-container section border-bottom">
             <div class="row row-cols-1 row-cols-lg-2 w-100">
                 <div class="col col-lg-4">
                     <div class="d-flex flex-column gap-3 text-white">
                         <div class="logo-container">
                             <!-- <img src="image/logo.png" alt="" class="img-fluid"> -->
                             <p>Pearlson’s Pain Management & Wellness Centre</p>
                             <p>
                                 <a href="https://maps.app.goo.gl/c9mk2aywriohjcqg6?g_st=com.google.maps.preview.copy" target="_blank" rel="noopener" style="color:inherit;">
                                     1032, 2nd Main Rd, Govindaraja Nagar Ward, Priyadarshini Layout, Vijayanagar, Bengaluru, Karnataka 560040
                                 </a>
                             </p>
                         </div>

                         <div class="social-container">
                             <a href="https://www.facebook.com/share/PcSioqTNA2J1eAxj/" target="_blank" rel="noopener" class="social-item" aria-label="Facebook">
                                 <i class="fa-brands fa-facebook-f"></i>
                             </a>
                             <a href="https://www.facebook.com/share/FPM6SFrDixienSS1/" target="_blank" rel="noopener" class="social-item" aria-label="Facebook Page">
                                 <i class="fa-brands fa-facebook-f"></i>
                             </a>
                             <a href="https://www.linkedin.com/in/prof-dr-pearlson-k-pt-616aab11" target="_blank" rel="noopener" class="social-item" aria-label="LinkedIn">
                                 <i class="fa-brands fa-linkedin-in"></i>
                             </a>

                             <a href="https://www.instagram.com/drpearlson_ptofficial?igsh=MW9hY2M3bjYwemdr" target="_blank" rel="noopener" class="social-item" aria-label="Instagram">
                                 <i class="fa-brands fa-instagram"></i>
                             </a>
                             <a href="https://youtube.com/@manualtherapycourses?si=KHUi3UJ6NA2bVWHi" target="_blank" rel="noopener" class="social-item" aria-label="YouTube">
                                 <i class="fa-brands fa-youtube"></i>
                             </a>
                         </div>
                     </div>
                 </div>
                 <div class="col col-lg-8">
                     <div class="row row-cols-1 row-cols-lg-3 text-white">
                         <div class="col">
                             <h5 class="font-2 mb-3">Quick Links</h5>
                             <ul class="list gap-2">
                                 <li>
                                     <a href="index.php" class="d-flex flex-row gap-3 align-items-center link">
                                         <i class="fa-regular fa-circle-dot"></i>
                                         Home
                                     </a>
                                 </li>
                                 <li>
                                     <a href="about.php" class="d-flex flex-row gap-3 align-items-center link">
                                         <i class="fa-regular fa-circle-dot"></i>
                                         About Us
                                     </a>
                                 </li>
                                 <li>
                                     <a href="for-students.php" class="d-flex flex-row gap-3 align-items-center link">
                                         <i class="fa-regular fa-circle-dot"></i>
                                         For student
                                     </a>
                                 </li>
                                 <li>
                                     <a href="for-patients.php" class="d-flex flex-row gap-3 align-items-center link">
                                         <i class="fa-regular fa-circle-dot"></i>
                                         For Patients
                                     </a>
                                 </li>
                                 <li>
                                     <a href="gallery.php" class="d-flex flex-row gap-3 align-items-center link">
                                         <i class="fa-regular fa-circle-dot"></i>
                                         Gallery
                                     </a>
                                 </li>
                                 <li>
                                     <a href="events.php" class="d-flex flex-row gap-3 align-items-center link">
                                         <i class="fa-regular fa-circle-dot"></i>
                                         Events
                                     </a>
                                 </li>


                                 <li>
                                     <a href="contact.php" class="d-flex flex-row gap-3 align-items-center link">
                                         <i class="fa-regular fa-circle-dot"></i>
                                         Contact Us
                                     </a>
                                 </li>
                             </ul>
                         </div>
                         <div class="col">
                             <h5 class="font-2 mb-3">Working Hours</h5>
                             <ul class="list gap-2">
                                 <li>
                                     <a href="" class="d-flex flex-row gap-3 align-items-center link mb-3">
                                         <i class="fa-regular fa-clock"></i>
                                         Monday to Sunday <br>
                                         10.00 AM to 8.00 PM

                                     </a>
                                 </li>
                                 <li>
                                     <a href="" class="d-flex flex-row gap-3 align-items-center link">

                                     </a>
                                 </li>


                             </ul>
                         </div>
                         <div class="col">
                             <h5 class="font-2 mb-3">Contact Us</h5>
                             <div class="d-flex flex-column gap-3">

                                 <div class="d-flex flex-row align-items-center gap-3 text-white mb-3">
                                     <span class="fs-2"><i class="fa-solid fa-phone"></i></span>
                                     <div class="d-flex flex-column">
                                         <span>Phone</span>
                                         <span><a href="tel:+91 80882 06973" style="color:white">+91 80882 06973</a></span>
                                     </div>
                                 </div>
                                 <div class="d-flex flex-row align-items-center gap-3 text-white">
                                     <span class="fs-2">
                                         <i class="fa-solid fa-envelope"></i>
                                     </span>
                                     <div class="d-flex flex-column">
                                         <span>Email</span>
                                         <span><a href="mailto:shreesaradhaacademy@gmail.com" style="color:white">shreesaradhaacademy@gmail.com</a> </span>
                                     </div>
                                 </div>
                                 <div class="d-flex flex-row align-items-center gap-3 pt-3 text-white">
                                 <a href="https://thecpdregister.com/providers/cpd-group-providers--786671" target="_blank" class="mb-3">
                            <img src="image/TheCPDRegister_Find_Us_On_white.webp" alt="CPD Accredited" width="100" />
                            </a>
</div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <div class="p-3 text-white text-center">
             <p class="m-0">Copyright © <span id="year"></span> Manual Therapy Treatment and Course. All Right Reserved. Design and Development by : <a href="https://rightturn.co.in/" target="_blank" style="color:white">Right Turn E Design</a> </p>
         </div>
     </section>
 </footer>
 <script src="js/vendor/fslightbox.js"></script>
 <script src="js/masonry.js"></script>
 <script>
     document.getElementById('year').innerHTML = new Date().getFullYear();
 </script>