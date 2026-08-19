<?php include 'header.php'; ?>
<!-- End Of Header -->
<style>
    .testimonial-slider {
        background-color: #f8f9fa;
        padding: 50px 0;
    }

    .video-thumbnail {
        position: relative;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
        margin: 15px;
        transition: transform 0.3s ease;
        cursor: pointer;
        height: 0;
        padding-bottom: 56.25%;
        /* 16:9 aspect ratio fallback */
        background-color: #000;
    }

    .video-thumbnail:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    }

    .video-thumbnail img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .play-button {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: rgba(255, 255, 255, 0.7);
        color: #f00;
        width: 60px;
        height: 60px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.8rem;
        transition: all 0.3s ease;
    }

    .video-thumbnail:hover .play-button {
        background-color: rgba(255, 255, 255, 0.9);
        transform: translate(-50%, -50%) scale(1.1);
    }

    .section-title {
        color: #424b5a;
        margin-bottom: 30px;
        font-size: 2.5rem;
        font-weight: bold;
    }

    /* Custom carousel controls */
    .carousel-control-custom-icons {
        position: static;
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }

    .carousel-control-custom-icons .carousel-control-prev,
    .carousel-control-custom-icons .carousel-control-next {
        position: static;
        width: 50px;
        height: 50px;
        background-color: #4AD295;
        border-radius: 50%;
        opacity: 1;
        margin: 0 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
    }

    .nav-buttons {
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }

    .nav-button {
        background-color: #4AD295;
        color: white;
        border: none;
        border-radius: 50%;
        width: 50px;
        height: 50px;
        margin: 0 10px;
        font-size: 20px;
    }

    .carousel-control-custom-icons .carousel-control-prev:hover,
    .carousel-control-custom-icons .carousel-control-next:hover {
        background-color: #38b580;
        transform: scale(1.1);
    }

    .carousel-control-custom-icons .carousel-control-prev-icon,
    .carousel-control-custom-icons .carousel-control-next-icon {
        background-image: none;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    /* Modal customization */
    .modal-content {
        border-radius: 10px;
        overflow: hidden;
    }

    .modal-header {
        border-bottom: none;
        padding: 0;
        position: relative;
        z-index: 1050;
    }

    .modal-body {
        padding: 0;
    }

    .video-container-modal {
        position: relative;
        padding-bottom: 56.25%;
        /* 16:9 aspect ratio */
        height: 0;
        overflow: hidden;
    }

    .video-container-modal iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: 0;
    }

    .close-button {
        position: absolute;
        top: 10px;
        right: 10px;
        background-color: white;
        border: none;
        color: #333;
        border-radius: 50%;
        width: 30px;
        height: 30px;
        font-size: 1rem;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 1050;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    }

    /* Responsive adjustments */
    @media (max-width: 767px) {
        .video-row [class*='col-'] {
            margin-bottom: 20px;
        }
    }
</style>
<main>
    <!-- Banner -->
    <section class="section position-relative"
        style="background-image: url(image/hero-img.jpg); height: 90vh;">
        <div class="image-overlay"></div>
        <div class="r-container position-relative h-100" style="z-index: 2;">
            <div class="row row-cols-lg-2 row-cols-1 w-100 h-100">
                <div class="col h-100">
                    <div class="d-flex flex-column h-100 justify-content-center gap-3">
                        <h6 class="fw-semibold font-1 accent-color-1 ls-2">WELCOME TO MANUAL THERAPY TREATMENT AND COURSES</h6>
                        <h2 class="accent-color font-1 fw-semibold fontsize-30">Pearlson's pain management & wellness center for your well being</h2>
                        <p class="font-1">
                            Consult Dr.K.Pearlson at our center for Manual therapy/ Physiotherapy. Dr.K.Pearlson, in
                            his illustrious 30 years long career has treated over 2.5 LAKH patients and has passed on
                            his knowledge to over 20,000 students.
                        </p>
                        <a href="https://thecpdregister.com/providers/cpd-group-providers--786671" target="_blank" class="mb-3">
                            <img src="image/TheCPDRegister_Verify_On_black.webp" alt="CPD Accredited" width="150" />
                            </a>
                        <div class="d-flex flex-row gap-5 ">
                            <a href="contact.php"
                                class="btn button font-1 ls-2 fw-semibold fs-7 py-3 px-4">Contact Us</a>
                            <!-- <button type="button" class="btn request-loader" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    <i class="fa-solid fa-play"></i>
                                </button> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>



    <!-- ABOUT FIMT -->
    <section class="section">
        <div class="r-container">
            <div class="row row-cols-1 row-cols-lg-2">
                <div class="col mb-3">
                    <div class="position-relative">
                        <a href="image/about-img.jpg" data-fslightbox="gallery">
                            <img src="image/about-img.jpg" alt="" class="img-fluid rounded-4">
                        </a>
                        <!-- <div
                                class="top-0 start-0 rounded-4 p-4 text-white text-center mt-5">
                                 <img src="image/doctor.jpg" alt="" class="img-fluid rounded-4">
                            </div> -->
                    </div>
                </div>
                <div class="col mb-3">
                    <div class="d-flex flex-column gap-2 h-100 justify-content-center ">
                        <h6 class="fw-semibold font-1 accent-color-1 ls-2"></h6>
                        <h3 class="accent-color font-1 fw-semibold fontsize-30">We provide continuing Best Physiotherapy Education in Bangalore</h3>
                        <p class="font-2 fw-light mb-0">
                            Join FIMT today and add a feather in the cap of your Physiotherapy assessment and management skills. And Learn the latest advancements in Manual Therapy from the finest instructors through our Integrated courses available both online and offline.
                        </p>
                        <p class="font-2 fw-light mb-0">
                            We are committed to providing the best treatment with the latest available scientific and clinical evidence within the biopsychosocial framework of each individual patient at a nominal cost.
                        </p>
                        <p class="font-2 fw-light mb-0">And also Our team of experts led by Prof. K Pearlson (Australia), MIMS, MAIH, with over 30 years of clinical experience, is determined to provide the highest quality of treatment and training. </p>
                        <!-- <p>Keep up with the latest trends in physiotherapy and manual therapy using our very own FIOMT app. </p> -->

                        <div>
                            <a href="about.php"
                                class="btn button font-1 ls-2 fw-semibold fs-7 py-3 px-4">READ
                                MORE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICES -->
    <section class="section bg-color-2">
        <div class="r-container">
            <div class="d-flex flex-column text-center gap-2">
                <h6 class="fw-semibold font-1 accent-color-1 ls-2">Courses</h6>
                <h3 class="accent-color font-1 fw-semibold fontsize-30 mb-4">Best Physiotherapy Course Offered</h3>

                <div class="w-100 row row-cols-1 row-cols-lg-4">
                    <div class="col mb-3">
                        <div class="rounded-3 border border-1 p-2 d-flex flex-column justify-content-center align-items-center gap-3 custom-shadow"
                            style="--bs-border-color: var(--accent-color-2);">
                            <img src="image/award.png" alt="" class="img-fluid" width="80" height="80">
                            <h6>Certificate in Orthopaedic Manual Therapy (COMT)</h6>
                            <a href="course.php?course=comt" class="btn font-1 fw-semibold accent-color-1">READ MORE <i
                                    class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <div class="rounded-3 border border-1 p-2 d-flex flex-column justify-content-center align-items-center gap-3 custom-shadow"
                            style="--bs-border-color: var(--accent-color-2);">
                            <img src="image/award.png" alt="" class="img-fluid" width="80" height="80">
                            <h6>Certificate in Mastery in Manual Therapy (CMMT)</h6>
                            <a href="course.php?course=cmmt" class="btn font-1 fw-semibold accent-color-1">READ MORE <i
                                    class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <div class="rounded-3 border border-1 p-2 d-flex flex-column justify-content-center align-items-center gap-3 custom-shadow"
                            style="--bs-border-color: var(--accent-color-2);">
                            <img src="image/award.png" alt="" class="img-fluid" width="80" height="80">
                            <h6>Certificate in Kinesiology <br> Taping</h6>
                            <a href="course.php?course=kinesiology-taping" class="btn font-1 fw-semibold accent-color-1">READ MORE <i
                                    class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <div class="rounded-3 border border-1 p-2 d-flex flex-column justify-content-center align-items-center gap-3 custom-shadow"
                            style="--bs-border-color: var(--accent-color-2);">
                            <img src="image/award.png" alt="" class="img-fluid" width="80" height="80">
                            <h6>Certificate in Sports Manual <br> Therapy</h6>
                            <a href="course.php?course=sports-manual-therapy" class="btn font-1 fw-semibold accent-color-1">READ MORE <i
                                    class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <div class="rounded-3 border border-1 p-2 d-flex flex-column justify-content-center align-items-center gap-3 custom-shadow"
                            style="--bs-border-color: var(--accent-color-2);">
                            <img src="image/award.png" alt="" class="img-fluid" width="80" height="80">
                            <h6>Certificate in Spinal Manipulation</h6>
                            <a href="course.php?course=spinal-manipulation" class="btn font-1 fw-semibold accent-color-1">READ MORE <i
                                    class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <div class="rounded-3 border border-1 p-2 d-flex flex-column justify-content-center align-items-center gap-3 custom-shadow"
                            style="--bs-border-color: var(--accent-color-2);">
                            <img src="image/award.png" alt="" class="img-fluid" width="80" height="80">
                            <h6>Certificate in Trigger Point Therapy</h6>
                            <a href="course.php?course=trigger-point-therapy" class="btn font-1 fw-semibold accent-color-1">READ MORE <i
                                    class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <div class="rounded-3 border border-1 p-2 d-flex flex-column justify-content-center align-items-center gap-3 custom-shadow"
                            style="--bs-border-color: var(--accent-color-2);">
                            <img src="image/award.png" alt="" class="img-fluid" width="80" height="80">
                            <h6>Certificate in Therapeutic Taping</h6>
                            <a href="course.php?course=therapeutic-taping" class="btn font-1 fw-semibold accent-color-1">READ MORE <i
                                    class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <div class="rounded-3 border border-1 p-2 d-flex flex-column justify-content-center align-items-center gap-3 custom-shadow"
                            style="--bs-border-color: var(--accent-color-2);">
                            <img src="image/award.png" alt="" class="img-fluid" width="80" height="80">
                            <h6>Certificate in Myofascial Release</h6>
                            <a href="course.php?course=myofascial-release" class="btn font-1 fw-semibold accent-color-1">READ MORE <i
                                    class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <div class="rounded-3 border border-1 p-2 d-flex flex-column justify-content-center align-items-center gap-3 custom-shadow"
                            style="--bs-border-color: var(--accent-color-2);">
                            <img src="image/award.png" alt="" class="img-fluid" width="80" height="80">
                            <h6>Certificate in Differential Diagnosis for Musculoskeletal Disorders</h6>
                            <a href="course.php?course=differential-diagnosis" class="btn font-1 fw-semibold accent-color-1">READ MORE <i
                                    class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <div class="rounded-3 border border-1 p-2 d-flex flex-column justify-content-center align-items-center gap-3 custom-shadow"
                            style="--bs-border-color: var(--accent-color-2);">
                            <img src="image/award.png" alt="" class="img-fluid" width="80" height="80">
                            <h6>Management of Sports Injuries &amp; MSK Disorders using PNF Techniques</h6>
                            <a href="course.php?course=pnf-techniques" class="btn font-1 fw-semibold accent-color-1">READ MORE <i
                                    class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <div class="rounded-3 border border-1 p-2 d-flex flex-column justify-content-center align-items-center gap-3 custom-shadow"
                            style="--bs-border-color: var(--accent-color-2);">
                            <img src="image/award.png" alt="" class="img-fluid" width="80" height="80">
                            <h6>Therapeutic Specific Exercise (TSE) for Chronic Pain Syndrome</h6>
                            <a href="course.php?course=tse-chronic-pain" class="btn font-1 fw-semibold accent-color-1">READ MORE <i
                                    class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <div class="rounded-3 border border-1 p-2 d-flex flex-column justify-content-center align-items-center gap-3 custom-shadow"
                            style="--bs-border-color: var(--accent-color-2);">
                            <img src="image/award.png" alt="" class="img-fluid" width="80" height="80">
                            <h6>Certificate Course in Belt Mobilisation for Peripheral Joints</h6>
                            <a href="course.php?course=belt-mobilisation-peripheral-joints" class="btn font-1 fw-semibold accent-color-1">READ MORE <i
                                    class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="r-container">
            <div class="d-flex flex-column gap-3 text-center">
                <h6 class="fw-semibold font-1 accent-color-1 ls-2">Best Physiotherapy Services</h6>
                <h3 class="accent-color font-1 fw-semibold fontsize-30">Treatment available for</h3>
                <div class="row g-4">
                    <!-- First Row -->
                    <div class="col-md-3 col-sm-6">
                        <div class="treatment-card card">
                            <div class="card-body">
                                <div class="treatment-icon">
                                    <i class="fas fa-user-injured"></i>
                                </div>
                                <h3 class="treatment-title">Back Pain</h3>
                            </div>
                            <div class="card-overlay"></div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="treatment-card card">
                            <div class="card-body">
                                <div class="treatment-icon">
                                    <i class="fas fa-bone"></i>
                                </div>
                                <h3 class="treatment-title">Knee Pain</h3>
                            </div>
                            <div class="card-overlay"></div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="treatment-card card">
                            <div class="card-body">
                                <div class="treatment-icon">
                                    <i class="fas fa-heartbeat"></i>
                                </div>
                                <h3 class="treatment-title">Rehabilitation</h3>
                            </div>
                            <div class="card-overlay"></div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="treatment-card card">
                            <div class="card-body">
                                <div class="treatment-icon">
                                    <i class="fas fa-dumbbell"></i>
                                </div>
                                <h3 class="treatment-title">Sports Rehab</h3>
                            </div>
                            <div class="card-overlay"></div>
                        </div>
                    </div>

                    <!-- Second Row -->
                    <!--<div class="col-md-3 col-sm-6">-->
                    <!--    <div class="treatment-card card">-->
                    <!--        <div class="card-body">-->
                    <!--            <div class="treatment-icon">-->
                    <!--                <i class="fas fa-align-center"></i>-->
                    <!--            </div>-->
                    <!--            <h3 class="treatment-title">Chiropractic</h3>-->
                    <!--        </div>-->
                    <!--        <div class="card-overlay"></div>-->
                    <!--    </div>-->
                    <!--</div>-->

                    <div class="col-md-3 col-sm-6">
                        <div class="treatment-card card">
                            <div class="card-body">
                                <div class="treatment-icon">
                                    <i class="fas fa-diagnoses"></i>
                                </div>
                                <h3 class="treatment-title">Shoulder Pain</h3>
                            </div>
                            <div class="card-overlay"></div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="treatment-card card">
                            <div class="card-body">
                                <div class="treatment-icon">
                                    <i class="fas fa-female"></i>
                                </div>
                                <h3 class="treatment-title">Women Wellness</h3>
                            </div>
                            <div class="card-overlay"></div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="treatment-card card">
                            <div class="card-body">
                                <div class="treatment-icon">
                                    <i class="fas fa-baby"></i>
                                </div>
                                <h3 class="treatment-title">Paediatric Physiotherapy</h3>
                            </div>
                            <div class="card-overlay"></div>
                        </div>
                    </div>

                    <!-- Third Row -->
                    <div class="col-md-3 col-sm-6">
                        <div class="treatment-card card">
                            <div class="card-body">
                                <div class="treatment-icon">
                                    <i class="fas fa-user-plus"></i>
                                </div>
                                <h3 class="treatment-title">Geriatric Physiotherapy</h3>
                            </div>
                            <div class="card-overlay"></div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="treatment-card card">
                            <div class="card-body">
                                <div class="treatment-icon">
                                    <i class="fas fa-hospital-alt"></i>
                                </div>
                                <h3 class="treatment-title">Post operative Physiotherapy</h3>
                            </div>
                            <div class="card-overlay"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>




    <section class="section position-relative bg-attach-fixed"
        style="background-image: url(image/bg.jpg);">
        <div class="image-overlay-2"></div>
        <div class="r-container position-relative mb-5 text-center" style="z-index: 2;">
            <!-- <div class="w-100 row row-cols-1 row-cols-lg-4 text-center text-white"> -->
            <!-- <h6 class="fw-semibold font-1 accent-color-1 ls-2 ">Federation of Indian Manual Therapists</h6>
            <h3 class="accent-color font-1 fw-semibold fontsize-30 text-white">Trust Us To Be There To Help All & Make Things well again</h3>
            <p class="font-2 fw-light text-white mx-auto mt-4" style="max-width: 970px;">FIMT teachers Chiropractic Manual Therapy. The Certificate in Orthopedic Manual Therapy (COMT) program integrates 30 years of clinical experience of emeritus Prof.K. Pearlson with the best teachings with 27 years clinical experience</p> -->



            <!-- </div> -->
        </div>
    </section>

    <!-- WHY CHOOSE US -->
    <section class="pb-5 position-relative" style="margin-top: -100px;">
        <div class="r-container">
            <div class="rounded-3 bg-color-2 p-5">
                <div class="col mb-12">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="service-card">
                                <div class="card-icon">
                                    <i class="fas fa-hands"></i>
                                </div>
                                <div class="card-content">
                                    <h3 class="service-title">Manual Therapy</h3>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="service-card">
                                <div class="card-icon">
                                    <i class="fas fa-user-md"></i>
                                </div>
                                <div class="card-content">
                                    <h3 class="service-title">Chiropractic Care</h3>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="service-card">
                                <div class="card-icon">
                                    <i class="fas fa-brain"></i>
                                </div>
                                <div class="card-content">
                                    <h3 class="service-title">Craniosacral Therapy</h3>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="service-card">
                                <div class="card-icon">
                                    <i class="fas fa-chair"></i>
                                </div>
                                <div class="card-content">
                                    <h3 class="service-title">Posture & Ergonomics<br> Analysis & management</h3>

                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>


    <!-- Our Patient Review -->
    <section class="section">
        <div class="r-container">
            <div class="d-flex flex-lg-row flex-column-reverse">
                <div class="col col-lg-12 mb-3">
                    <div class="d-flex flex-column gap-3">
                        <h3 class="accent-color font-1 fw-semibold fs-1">Our Patient Review</h3>

                        <div class="row">
                            <div class="col-12">
                                <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <!-- Testimonial with Video -->
                                        <div class="carousel-item active">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="testimonial-item text-only">
                                                        <i class="fas fa-quote-left quote-icon"></i>
                                                        <p class="testimonial-text">I have undergone physiotherapy after my ACL surgery at Padmashree. Dr. Pearlson sir and Team supervised my treatment for almost 2 to 3 months and treatment was excellent. The physiotherapy department is very humble, caring and excellent in providing services.</p>
                                                        <div class="client-info justify-content-center">

                                                            <div class="client-details">
                                                                <h5>Govindappa Maradi</h5>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="testimonial-item text-only">
                                                        <i class="fas fa-quote-left quote-icon"></i>
                                                        <p class="testimonial-text">I have undergone physiotherapy after my ACL surgery at Padmashree. Dr. Pearlson sir and Team supervised my treatment for almost 2 to 3 months and treatment was excellent. The physiotherapy department is very humble, caring and excellent in providing services.</p>
                                                        <div class="client-info justify-content-center">

                                                            <div class="client-details">
                                                                <h5>Govindappa Maradi</h5>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Testimonial with Video -->
                                        <div class="carousel-item">
                                            <div class="row">
                                                <div class="col-lg-6 mb-4 mb-lg-0">
                                                    <div class="testimonial-item text-only">
                                                        <i class="fas fa-quote-left quote-icon"></i>
                                                        <p class="testimonial-text">I have undergone physiotherapy after my ACL surgery at Padmashree. Dr. Pearlson sir and Team supervised my treatment for almost 2 to 3 months and treatment was excellent. The physiotherapy department is very humble, caring and excellent in providing services.</p>
                                                        <div class="client-info justify-content-center">

                                                            <div class="client-details">
                                                                <h5>Govindappa Maradi</h5>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="testimonial-item text-only">
                                                        <i class="fas fa-quote-left quote-icon"></i>
                                                        <p class="testimonial-text">I have undergone physiotherapy after my ACL surgery at Padmashree. Dr. Pearlson sir and Team supervised my treatment for almost 2 to 3 months and treatment was excellent. The physiotherapy department is very humble, caring and excellent in providing services.</p>
                                                        <div class="client-info justify-content-center">

                                                            <div class="client-details">
                                                                <h5>Govindappa Maradi</h5>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>


                                    </div>

                                    <!-- Carousel Controls -->
                                    <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>

                                    <!-- Carousel Indicators -->
                                    <div class="carousel-indicators">
                                        <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                        <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- Testimonial Slider Section -->
    <section class="testimonial-slider">
        <div class="container">
            <h3 class="accent-color font-1 fw-semibold fs-1">What Physiotherapists Say About Our Courses</h3>

            <div id="testimonialCarousel-video" class="carousel slide" data-interval="false">
                <div class="carousel-inner">
                    <!-- Slide 1 - Two videos side by side -->
                    <div class="carousel-item active">
                        <div class="row video-row justify-content-center">
                            <div class="col-md-6">
                                <div class="video-thumbnail" data-video-id="oqyF9Vy0Oyk">
                                    <img src="image/thumbnail-1.jpeg" alt="Video thumbnail">
                                    <div class="play-button">
                                        <i class="fas fa-play"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="video-thumbnail" data-video-id="mGAibLvsuXw">
                                    <img src="image/thumbnail-2.jpeg" alt="Video thumbnail">
                                    <div class="play-button">
                                        <i class="fas fa-play"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 - Two more videos side by side -->
                    <div class="carousel-item">
                        <div class="row video-row justify-content-center">
                            <div class="col-md-6">
                                <div class="video-thumbnail" data-video-id="a4QiiwJ9M-FqHKuC">
                                    <img src="image/thumbnail-3.jpeg" alt="Video thumbnail">
                                    <div class="play-button">
                                        <i class="fas fa-play"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="video-thumbnail" data-video-id="WQ8yDHcmvxwFLkvC">
                                    <img src="image/thumbnail-4.jpeg" alt="Video thumbnail">
                                    <div class="play-button">
                                        <i class="fas fa-play"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Custom Navigation Controls -->
                <div class="nav-buttons">
                    <button class="nav-button" id="videoPrevBtn">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button class="nav-button" id="videoNextBtn">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Video Modal for full-screen view -->
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="video-container-modal">
                        <iframe id="youtubeFrame" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="floating-icons">
        <a href="https://wa.me/8088206973" class="btn  rounded-circle whatsapp" target="_blank">
            <i class="fab fa-whatsapp"></i>
        </a>
        <a href="tel:+91 80882 06973" class="btn rounded-circle phone">
            <i class="fas fa-phone-alt"></i>
        </a>
    </div>
</main>

<?php include 'footer.php'; ?>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var myModal = new bootstrap.Modal(document.getElementById('imageModal'));
        myModal.show();
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const swiper = new Swiper('.swiper', {
            slidesPerView: 3,
            spaceBetween: 30,
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                // Mobile - show 1 slide
                320: {
                    slidesPerView: 1,
                    spaceBetween: 20
                },
                // Tablet - show 2 slides
                768: {
                    slidesPerView: 2,
                    spaceBetween: 20
                },
                // Desktop - show 3 slides
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 30
                }
            }
        });
    });
</script>
<script>
    $(document).ready(function() {
        // Make sure the carousel is initialized
        $("#testimonialCarousel-video").carousel({
            interval: false
        });

        // Connect the navigation buttons to the correct carousel ID
        $("#videoPrevBtn").on("click", function() {
            $("#testimonialCarousel-video").carousel("prev");
        });

        $("#videoNextBtn").on("click", function() {
            $("#testimonialCarousel-video").carousel("next");
        });

        // Your existing video modal code
        $('.video-thumbnail').on('click', function() {
            var videoId = $(this).data('video-id');
            $('#youtubeFrame').attr('src', 'https://www.youtube.com/embed/' + videoId + '?autoplay=1&rel=0&modestbranding=1&showinfo=0&fs=1&controls=1');
            $('#videoModal').modal('show');
        });

        $('#videoModal').on('hidden.bs.modal', function() {
            $('#youtubeFrame').attr('src', '');
        });
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var imageModal = new bootstrap.Modal(document.getElementById("imageModal"), {
            keyboard: false
        });

        // Show the modal on page load
        imageModal.show();

        // Automatically hide the modal after 3 seconds
        setTimeout(function() {
            imageModal.hide();
        }, 2000);

        // Ensure the backdrop is properly removed after modal closes
        document.getElementById("imageModal").addEventListener("hidden.bs.modal", function() {
            document.querySelectorAll(".modal-backdrop").forEach(function(backdrop) {
                backdrop.remove();
            });

            document.body.classList.remove("modal-open"); // Fix scroll locking issue
            document.body.style.overflow = "auto"; // Ensure scrolling is enabled
        });
    });
</script>

</body>

</html>